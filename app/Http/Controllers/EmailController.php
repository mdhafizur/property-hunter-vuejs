<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;
use Exception;

class EmailController extends Controller
{
    //
    public function send(Request $request)
    {

        // return $request;
        $validator = Validator::make(
            $request->all(),
            [

                'recipient' => 'required|string',
                'subject' => 'required|string',
                'from' => 'required|string',
                'content' => 'required|string',

            ],
        );


        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 422);
        } else {
            try {
                $sendmail = Mail::send([], [], function ($message) use ($request) {
                    $message->to($request->recipient)
                        ->subject($request->subject)
                        ->from($request->from)
                        ->setBody($request->content, 'text/html');


                    // ->sender('email@example.com', 'Mr. Example')
                    // ->returnPath('email@example.com')
                    // ->cc('email@example.com', 'Mr. Example')
                    // ->bcc('email@example.com', 'Mr. Example')
                    // ->replyTo('email@example.com', 'Mr. Example')
                    // ->priority(2)
                    // ->attach('path/to/attachment.txt')
                    // ->embed('path/to/attachment.jpg');
                });


                if (empty($sendmail)) {
                    return response()->json(['message' => 'Mail Sent Sucssfully'], 200);
                } else {
                    return response()->json(['message' => 'Mail Sent fail'], 400);
                }
            } catch (\Exception $exception) {
                return $exception;
            }
        }
    }
}
