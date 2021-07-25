<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Guzzle\Http\Client;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {

        // return $this->generateToken();

        $data = json_decode($request->getContent(), true);



        $validator = Validator::make($data['user'], [
            // 'first_name' => 'required|max:255',
            // 'last_name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'contact_no' => 'required|unique:users|max:255|min:10'
        ]);



        if ($validator->fails()) {

            return response(['errors' => $validator->errors()], 422);
        } else {

            // put form data in session
            $request->session()->put('data', $data);


            $subscription = 'a';
            // if ($data['user']['agent_no']) {
            //     $subscription = 'bb';
            // }


            $otp = rand(100000, 999999);
            $api_token = $this->generateToken();


            unset($data['user']['password_confirmation']);
            $data['user']['OTP'] = $otp;
            // $data['user']['api_token'] = $api_token;
            $data['user']['subscription'] = $subscription;
            // $data['user']['password'] = bcrypt($data['user']['password']);
            $data['user']['password'] = Hash::make($data['user']['password']);
            // return $data;
            $db = DB::table('users')->insertOrIgnore($data['user']);


            try {
                //write your codes here
                if ($db) {
                    $id = DB::getPdo()->lastInsertId();
                    $user =  User::where('id', '=', $id)->firstOrFail();
                    Auth::login($user);
                    $user->sendEmailVerificationNotification();
                    if (Auth::check()) {
                        return response()->json([
                            'code' => 'Success',
                            'data' => $user,
                            'message' => 'Verify Email'
                        ], 201);
                    }
                }
                // } catch (\Illuminate\Database\QueryException $exception) {
            } catch (\Exception $exception) {

                return response()->json([
                    'err' => $exception->getMessage()
                ], 400);
            }

            // $id = $user->id;



        }
    }

    public function generateToken()
    {
        $this->api_token = Str::random(60);


        return $this->api_token;
    }
}
