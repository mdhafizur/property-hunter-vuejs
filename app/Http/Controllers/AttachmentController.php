<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AttachmentController extends Controller
{

    private $uploads = array();

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

    public function  save($request, $attachment_type, $image_path, $filename, $extension, $title, $caption, $order, $cover)
    {
        $attachment = new Attachment([
            'item_id' => $request->item_id,
            'item_type' => $request->item_type,
            'attachment_type' => $attachment_type,
            'path' => $image_path,
            'file_name' => $filename,
            'extension' => $extension,
            'title' => $title,
            'caption' => $caption,
            'cover' => $cover,
            'publish' => true,
            'order' => $order,
            'status' => 'ACTIVE',
        ]);

        $attachment->save();
        $attachment->refresh();

        array_push($this->uploads, $attachment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

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
                    $image_path = ($request->image)->storeAs('uploads/' . $attachment['item_type'] . '/' . $attachment['attachment_type'] . 's', Str::slug($request->title) . '-' . $attachment['attachment_type'] . '-' . time() . '.' . $extension, 'public');
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

            $cover = 0;

            if ($request->has('item_id') && $request->has('item_type')) {


                if ($request->has('cover')) {
                    $cover = 1;
                    $order = 0;
                    $attachment_type = "cover";
                    $title = $request->cover['title'];
                    $caption = $request->cover['caption'];
                    if (isset($request->cover['image'])) {
                        $filename = isset($request->cover['title']) ? Str::slug($request->cover['title']) . '-cover' : $request->cover['image']->getClientOriginalName();
                        //get filename without extension
                        $extension = ($request->cover['image'])->extension();
                        // save the main image with original size
                        $image_path = ($request->cover['image'])->storeAs('uploads/' . $request->item_type . '/covers', $filename . '-' . time() . '.' . $extension, 'public');
                        Image::make($cover['image']->getRealPath())->resize(350, 240)->save('storage/uploads/news/thumbnails/' . $filename . '-' . time() . '.' . $extension);
                    }
                    $this->save($request, $attachment_type, $image_path, $filename, $extension, $title, $caption, $order, $cover);
                }

                if ($request->has('photos')) {
                    foreach ($request->photos as $index => $file) {
                        $attachment_type = "photo";
                        $title = $file['title'];
                        $caption = $file['caption'];
                        $order = $index;
                        $cover = 0;

                        if (isset($file['image'])) {
                            // $name = ($photo['image'])->getClientOriginalName();
                            //get original name of the file
                            $filename = isset($file['title']) ? Str::slug($file['title']) . '-photo'  : $file['image']->getClientOriginalName();
                            //get filename without extension
                            $extension = ($file['image'])->extension();
                            // save the main image with original size
                            $image_path = ($file['image'])->storeAs('uploads/' . $request->item_type . '/photos', $filename . '-' . time() . '.' . $extension, 'public');
                        }
                        $this->save($request, $attachment_type, $image_path, $filename, $extension, $title, $caption, $order, $cover);
                    }
                }

                if ($request->has('wides')) {
                    foreach ($request->wides as $index => $file) {
                        $attachment_type = "wide";
                        $title = $file['title'];
                        $caption = $file['caption'];
                        $order = $index;
                        $cover = 0;

                        if (isset($file['image'])) {
                            // $name = ($photo['image'])->getClientOriginalName();
                            //get original name of the file
                            $filename = isset($file['title']) ? Str::slug($file['title']) . '-wide'   : $file['image']->getClientOriginalName();

                            //get filename without extension
                            $extension = ($file['image'])->extension();
                            // save the main image with original size
                            $image_path = ($file['image'])->storeAs('uploads/' . $request->item_type . '/wides', $filename .  '-' . time() . '.' . $extension, 'public');
                        }
                        $this->save($request, $attachment_type, $image_path, $filename, $extension, $title, $caption, $order, $cover);
                    }
                }

                if ($request->has('accordions')) {
                    foreach ($request->accordions as $index => $file) {
                        $attachment_type = "accordion";
                        $title = $file['title'];
                        $caption = $file['caption'];
                        $order = $index;
                        $cover = 0;

                        $filename = 'accordion';
                        $extension = 'accordion';
                        $image_path = 'accordion';
                        $this->save($request, $attachment_type, $image_path, $filename, $extension, $title, $caption, $order, $cover);
                    }
                }
            }
            return $this->uploads;
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
