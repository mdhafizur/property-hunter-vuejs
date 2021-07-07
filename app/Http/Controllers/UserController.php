<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Facades\DB;
use Guzzle\Http\Client;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return response()->json([
            'code' => 'OK_RESPONSE',
            'data' => User::all(),
            'message' => ''
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        // return ($request->getContent());
        $data = response()->json($request->all());

        // $header = $request->header('authcode');

        //get

        $array = json_decode($request->getContent(), true);
        // return $array['user'];

        $validator = Validator::make($array['user'], [
            'id' => 'required|unique:users|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {

            return response(['errors' => $validator->errors()], 422);
        } else {

            $db = DB::table('users')->insertOrIgnore($array['user']);

            try {
                //write your codes here
                if ($db) {
                    return response()->json([
                        'code' => 'OK_RESPONSE',
                        'data' => $array,
                        'message' => 'User Created'
                    ], 201);
                }
                // } catch (\Illuminate\Database\QueryException $exception) {
            } catch (\Exception $exception) {

                return response()->json([
                    'err' => $exception->getMessage()
                ], 400);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user =  User::where('id', '=', $id)->firstOrFail();

        if ($user) {
            return response()->json([
                'code' => 'Success',
                'data' => $user,
                'message' => 'User Found'
            ], 200);
        } else {
            return response()->json(null, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $array = json_decode($request->getContent(), true);
        // return $array['user']['id'];

        $validator = Validator::make($array['user'], [
            'id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {

            return response(['errors' => $validator->errors()], 422);
        } else {


            $user = DB::table('users')->where('id', $array['user']['id'])
                ->update($array['user']);


            if ($user) {
                $user =  User::where('id', '=', $array['user']['id'])->firstOrFail();
                return response()->json([
                    'code' => 'Success',
                    'data' => $user,
                    'message' => 'Data updated successfully!'
                ], 200);
            } else {
                return response()->json(null, 204);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $db = DB::delete("DELETE FROM users WHERE id=?", [$id]);

        if ($db) {
            return response()->json([
                "status" => "OK_RESPONSE",
                "data" => [],
                "message" => "Deletion successful",

            ], 200);
        } else {
            return response()->json([
                'code' => 'OK_RESPONSE',
                'data' => 'No data available',
                'message' => 'User not found'
            ], 404);
        }
    }

    public function search()
    {
        //     $new = "ALTER TABLE users CHANGE id ID int(10);";
        // DB::statement($new);
        //
        $name = request('name');
        $value = request('value');

        $data = User::where($name, $value)->get();



        if ($data->isEmpty()) {
            return response()->json([
                'Error' => 'No data avilable',
            ], 204);
        } else {
            return response()->json([
                'code' => 'OK_RESPONSE',
                'data' => $data,
                'message' => 'Data'
            ], 200);
        }
    }
}
