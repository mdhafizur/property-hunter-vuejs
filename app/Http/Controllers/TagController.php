<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // return $request;

        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' =>  'required|max:225|uniqueOfMultiple:tags,name-' . $this->get('name', 'NULL') . ',type-' . $this->get('type', 1),
                    'type' => 'required|string'
                    // 'id' => 'required|unique:news|integer',
                    // 'created_by' => 'required|string|max:255',
                    // 'title' => 'required|unique:news',
                    // 'cover.image' => ['image', 'mimes:jpeg,bmp,png', 'required'],
                    // 'wides.*' => ['nullable'],
                    // 'photos.*' => ['nullable'],
                    // 'photos.*.image' => ['image', 'nullable'],
                    // 'wides.*.image' => ['image', 'nullable'],
                ],
                $messages = [
                    // 'cover.image.image' => 'The cover image must be an image.',
                    // 'cover.image.mimes' => 'The cover image must be a file of type: jpeg, bmp, png.',
                    // 'cover.image.required' => 'The cover image field is required.',
                ]

            );

            if ($validator->fails()) {
                return response(['errors' => $validator->errors()], 422);
            } else {
                $tag =  new Tag();
                $tag->name = $request->name;
                $tag->type = $request->type;

                if ($tag->save()) {
                    $tag->refresh();
                    return response()->json([
                        'code' => 'OK_RESPONSE',
                        'data' =>   $tag,
                        'message' => 'Tag Created'
                    ], 201);
                }
            }
        } catch (Exception $exception) {
            return response()->json($exception, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
