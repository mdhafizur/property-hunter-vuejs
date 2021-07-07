<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json([
            'code' => 'OK_RESPONSE',
            'data' => News::all(),
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
        // return $data = response()->json($request->all());

        // $header = $request->header('authcode');


        $data = json_decode($request->getContent(), true);
        // return $data['user'];

        $validator = Validator::make($data['news'], [
            // 'id' => 'required|unique:news|integer',
            // 'created_by' => 'required|string|max:255',
         
        ]);

        if ($validator->fails()) {

            return response(['errors' => $validator->errors()], 422);
        } else {

            $db = DB::table('news')->insertOrIgnore($data['news']);
            //get last inserted id
            $id = DB::getPdo()->lastInsertId();
            // set id to object
            $data['news']['id'] = $id;

            try {
                //write your codes here
                if ($db) {
                    return response()->json([
                        'code' => 'OK_RESPONSE',
                        'data' => $data,
                        'message' => 'News Created'
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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $news =  News::where('id', '=', $id)->firstOrFail();

        if ($news){
            return response()->json([
                'code'=> 'Success',
                'data' => $news,
                'message' => 'News Found'
            ], 200);
        } else {
            return response()->json(null, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //

        $data = json_decode($request->getContent(), true);
        // return $data['user']['user_id'];

        $validator = Validator::make($data['news'], [
            // 'user_id' => 'required|integer',
            // 'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255',
            // 'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {

            return response(['errors' => $validator->errors()], 422);
        } else {


            $news = DB::table('news')->where('id', $data['news']['id'])
                ->update($data['news']);


            if ($news) {
                $news =  News::where('id', '=', $data['news']['id'])->firstOrFail();
                return response()->json([
                    'code' => 'Success',
                    'data' => $data,
                    'message' => 'News updated successfully!'
                ], 200);
            } else {
                return response()->json(null, 204);
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //

        $db = DB::delete("DELETE FROM news WHERE id=?", [$id]);

        if ($db) {
            return response()->json(null, 204);
        } else {
            return response()->json([
                'code' => 'FAILURE',
                'data' => 'No data available',
                'message' => 'News not found'
            ], 404);
        }
    }
}
