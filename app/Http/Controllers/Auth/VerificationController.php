<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Access\AuthorizationException;
use App\Models\User;
use Facade\Ignition\Exceptions\ViewException;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        // return $request->user()->hasVerifiedEmail();
        if ($request->user()->hasVerifiedEmail()) {

            return response(['message' => 'Email has already been verified']);
        }

        $request->user()->sendEmailVerificationNotification();

        if ($request->wantsJson()) {
            return response(['message' => 'Verification Email has been Sent']);
        }

        return back()->with('resent', true);
    }


    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        if (!hash_equals((string) $request->route('id'), (string) $request->user()->getKey())) {
            throw new AuthorizationException;
        }

        if (!hash_equals((string) $request->route('hash'), sha1($request->user()->getEmailForVerification()))) {
            throw new AuthorizationException;
        }
        if ($request->user()->hasVerifiedEmail()) {
            return response()->json(['message' => 'User already verified'], 200);
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }


        if ($response = $this->verified($request)) {
            return $response;
        }

        return response()->json(['message' => 'Successfully verified']);
    }

    protected function sendOTP(Request $request)
    {

        $mobile = Auth::user()->contact_no;
        //     // return $mobile;


        $otp = rand(100000, 999999);

        $curl = curl_init();

        $json = array('contact' => $mobile, 'message' => $otp);
        $json = json_encode($json);

        $url = "https://www.propertyhunter.com.my/sandbox/api/mobileapp.php?token=mdhz70Kb2j&action=sms_send&jsonMeta=$json";

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);
        $userId = Auth::user()->id;

        if ($otp !== Auth::user()->OTP) {
            User::where('id', $userId)->update(['OTP' => $otp]);
        }

        return response()->json(["message" => "OTP verification code Sent"], 200);
    }


    protected function verifyOTP(Request $request)
    {

        $enteredOtp = $request->route('code');;

        $id = Auth::user()->id;

        if ($enteredOtp == Auth::user()->OTP) {
            if ($enteredOtp == Auth::user()->OTP) {
                User::where('id', $id)->update(['isVerified' => 1]);
            }
            return response()->json(["message" => "OTP code aunthenticated"], 200);
        } else {
            return response()->json(["message" => "OTP code didn't match"], 404);
        }
    }
}
