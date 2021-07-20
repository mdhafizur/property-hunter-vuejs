<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
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


        if (isset($request->id)) {
            if (true) {
                $attachment = Attachment::findOrFail($request->id);
                // return $attachment;
                Storage::disk('public')->delete($request->path);

                if (isset($request->image)) {
                    $filename = isset($request->title) ? Str::slug($request->title) . '-' . $attachment['attachment_type'] : $request->image->getClientOriginalName();
                    //get filename without extension
                    $extension = $request->image->extension();
                    // save the main image with original size
                    $image_path = ($request->image)->storeAs('uploads/' . $attachment['item_type'] . '/' . $attachment['attachment_type'], Str::slug($request->title) . '-' . $attachment['attachment_type'] . '-' . time() . '.' . $extension, 'public');
                }
                $attachment->title = $request->title;
                $attachment->caption = $request->caption;
                $attachment->path = $image_path;
                $attachment->extension = $extension;
                $attachment->file_name = $filename;
                $attachment->save();
                return $attachment;
            }
        } else {

            $uploads = [];
            $cover = 0;
            $filess =  $request->all();

            foreach ($filess as $key => $files) {
                if ($key != "item_id" && $key != "id") {
                    if ($key == 'cover') {
                        $cover = 1;
                        $order = 0;
                        $attachment_type = "news_cover";
                        if (isset($files['image'])) {
                            $filename = isset($files['title']) ? Str::slug($files['title']) . '-cover' : $files['image']->getClientOriginalName();
                            //get filename without extension
                            $extension = ($request->cover['image'])->extension();
                            // save the main image with original size
                            $image_path = ($request->cover['image'])->storeAs('uploads/news/covers', $filename . '-' . time() . '.' . $extension, 'public');
                        }
                    } elseif ($key == 'photos') {
                        foreach ($files as $index => $file) {
                            // return $file;
                            $attachment_type = "news_photo";
                            $order = $index;

                            if (isset($file['image'])) {
                                // $name = ($photo['image'])->getClientOriginalName();
                                //get original name of the file
                                $filename = isset($file['title']) ? Str::slug($file['title']) . '-photo'  : $file['image']->getClientOriginalName();
                                //get filename without extension
                                $extension = ($file['image'])->extension();
                                // save the main image with original size
                                $image_path = ($file['image'])->storeAs('uploads/news/photos', $filename . '-' . time() . '.' . $extension, 'public');
                            }
                        }
                    } elseif ($key == 'wides') {
                        foreach ($files as $index => $file) {
                            // return $file;
                            $attachment_type = "news_wide";

                            $order = $index;

                            if (isset($file['image'])) {
                                // $name = ($photo['image'])->getClientOriginalName();
                                //get original name of the file
                                $filename = isset($file['title']) ? Str::slug($file['title']) . '-wide'   : $file['image']->getClientOriginalName();

                                //get filename without extension
                                $extension = ($file['image'])->extension();
                                // save the main image with original size
                                $image_path = ($file['image'])->storeAs('uploads/news/wides', $filename .  '-' . time() . '.' . $extension, 'public');
                            }
                        }
                    }

                    $attachment = new Attachment([
                        'item_id' => $request->item_id,
                        'item_type' => 'news',
                        'attachment_type' => $attachment_type,
                        'path' => $image_path,
                        'file_name' => $filename,
                        'extension' => $extension,
                        'title' => $request->cover['title'],
                        'caption' => $request->cover['caption'],
                        'cover' => $cover,
                        'publish' => true,
                        'order' => $order,
                        'status' => 'ACTIVE',
                    ]);

                    $attachment->save();
                    $attachment->refresh();

                    array_push($uploads, $attachment);
                }
            }
            return $uploads;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function show(Attachment $attachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(Attachment $attachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attachment $attachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attachment $attachment)
    {
        //
    }
}
