<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\News;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        if ($request->has('limit')) {
            $data = News::with('attachments')->where('status', '!=', 'DELETED')->paginate($request->limit);
        } else {
            $data = News::with('attachments')->where('status', '=', null)->paginate();
        }


        // $data = News::with('attachments')->get();

        return response()->json([
            'code' => 'OK_RESPONSE',
            'data' => $data,
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

        // return $request;
        // return $data = response()->json($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                // 'id' => 'required|unique:news|integer',
                // 'created_by' => 'required|string|max:255',
                'title' => 'required|unique:news',
                // 'cover.image' => ['image', 'mimes:jpeg,bmp,png', 'required'],
                // 'wides.*' => ['nullable'],
                // 'photos.*' => ['nullable'],
                // 'photos.*.image' => ['image', 'nullable'],
                // 'wides.*.image' => ['image', 'nullable'],
            ],
            $messages = [
                'cover.image.image' => 'The cover image must be an image.',
                'cover.image.mimes' => 'The cover image must be a file of type: jpeg, bmp, png.',
                'cover.image.required' => 'The cover image field is required.',
            ]

        );

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 422);
        } else {
            try {
                $news = new News();
                $news->title = $request->title;
                $news->alias = Str::slug($request->title);

                $news->title = $request->title;
                $news->content = $request->content;
                $news->category = $request->category;
                $news->written_by = $request->written_by;
                $news->article_source_from = $request->article_source_from;
                $news->photo_source_and_credit_to = $request->photo_source_and_credit_to;
                $news->featured_publish_date = $request->featured_publish_date;
                $news->featured_expiry_date = $request->featured_expiry_date;
                // $news->created_by = Auth::user();
                $news->id = 5;

                $news->save();
                $news->refresh();

                if (request('cover')) {

                    // $user = Auth::user();
                    // imagepath
                    // return $request->cover['image']->getRealPath();

                    //get original name of the file
                    // $filename = ($request->cover['image'])->getClientOriginalName();
                    $filename = Str::slug($request->title) . '-cover';
                    //get filename without extension
                    $extension = ($request->cover['image'])->extension();
                    // save the main image with original size
                    $image_path = ($request->cover['image'])->storeAs('uploads/news/cover', Str::slug($request->title) . '-cover-' . time() . '.' . $extension, 'public');
                    // create thumbnails in the thumbnail folder (after storage link)
                    Image::make($request->cover['image']->getRealPath())->resize(350, 350)->save('storage/uploads/news/thumbnails/' . Str::slug($request->cover['title']) . time() . '.' . $extension);





                    $attachment = new Attachment([
                        'item_id' => $news->id,
                        'item_type' => 'news',
                        'attachment_type' => 'cover',
                        'path' => $image_path,
                        'file_name' => $filename,
                        'extension' => $extension,
                        'title' => $request->cover['title'],
                        'caption' => $request->cover['caption'],
                        'cover' => true,
                        'publish' => true,
                        'order' => 1,
                        'status' => true,
                    ]);
                    $news->attachments()->save($attachment);
                }


                if (request('photos')) {
                    foreach ($request->photos as $key => $photo) {

                        if (isset($photo['image'])) {
                            // $name = ($photo['image'])->getClientOriginalName();
                            //get original name of the file
                            $filename = ($photo['image'])->getClientOriginalName();
                            //get filename without extension
                            $extension = ($photo['image'])->extension();
                            // save the main image with original size
                            $image_path = ($photo['image'])->storeAs('uploads/news/photos', Str::slug($request->title) . '-photo-'  . $key . '-' . time() . '.' . $extension, 'public');
                            // create thumbnails in the thumbnail folder (after storage link)
                            Image::make($photo['image']->getRealPath())->resize(350, 350)->save('storage/uploads/news/thumbnails/' . Str::slug($photo['title']) . time() . '.' . $extension);




                            $attachment = new Attachment([
                                'item_id' => $news->id,
                                'item_type' => 'news',
                                'attachment_type' => 'photo',
                                'path' => $image_path,
                                'file_name' => $filename,
                                'extension' => $extension,
                                'title' => $photo['title'],
                                'caption' => $photo['caption'],
                                'cover' => false,
                                'publish' => true,
                                'order' => $key,
                                'status' => true,
                            ]);
                            $news->attachments()->save($attachment);
                        }
                    }
                }

                if (request('accordions')) {
                    foreach ($request->accordions as $key => $accordion) {

                        $attachment = new Attachment([
                            'item_id' => $news->id,
                            'item_type' => 'news',
                            'attachment_type' => 'accordion',
                            'path' => null,
                            'file_name' => null,
                            'extension' => null,
                            'title' => $accordion['title'],
                            'caption' => $accordion['caption'],
                            'cover' => false,
                            'publish' => true,
                            'order' => $key,
                            'status' => 'ACTIVE',
                        ]);

                        $news->attachments()->save($attachment);
                    }
                }

                if (request('wides')) {
                    foreach ($request->wides as $key => $wide) {
                        if (isset($wide['image'])) {
                            // $name = ($photo['image'])->getClientOriginalName();
                            //get original name of the file
                            $filename = ($wide['image'])->getClientOriginalName();
                            //get filename without extension
                            $extension = ($wide['image'])->extension();
                            // save the main image with original size
                            $image_path = ($wide['image'])->storeAs('uploads/news/wides', Str::slug($wide['title']) . '-wide-' . $key . '-' . time() . '.' . $extension, 'public');

                            $attachment = new Attachment([
                                'item_id' => $news->id,
                                'item_type' => 'news',
                                'attachment_type' => 'wide',
                                'path' => $image_path,
                                'file_name' => $filename,
                                'extension' => $extension,
                                'title' => $wide['title'],
                                'caption' => $wide['caption'],
                                'cover' => false,
                                'publish' => true,
                                'order' => $key,
                                'status' => true,
                            ]);

                            $news->attachments()->save($attachment);
                        }
                    }
                }

                $news['cover'] = Attachment::where([['item_id', '=', $news->id], ['item_type', '=', 'news'], ['attachment_type', '=', 'cover']])->get();
                $news['photos'] = Attachment::where([['item_id', '=', $news->id], ['item_type', '=', 'news'], ['attachment_type', '=', 'photo']])->get();
                $news['wides'] = Attachment::where([['item_id', '=', $news->id], ['item_type', '=', 'news'], ['attachment_type', '=', 'wide']])->get();
                $news['accordions'] = Attachment::where([['item_id', '=', $news->id], ['item_type', '=', 'news'], ['attachment_type', '=', 'accordion']])->get();

                return response()->json([
                    'code' => 'OK_RESPONSE',
                    'data' =>   $news,
                    'message' => 'News Created'
                ], 201);
            } catch (Exception  $stock) {
                return response()->json($stock, 400);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id, $alias)
    {

        try {
            $news = News::findOrFail($id);
            // $news['cover'] = Attachment::where([['item_id', '=', $id], ['item_type', '=', 'news'], ['attachment_type', '=', 'cover']])->get();
            $news['cover'] =  $news->attachments()->where('attachment_type', '=', 'cover')->get();
            $news['photos'] =  $news->attachments()->where('attachment_type', '=', 'photo')->get();
            $news['wides'] =  $news->attachments()->where('attachment_type', '=', 'wide')->get();


            $news['accordions'] = Attachment::where([['item_id', '=', $id], ['item_type', '=', 'news'], ['attachment_type', '=', 'accordion']])->get();


            // $news = News::whereHas('attachments', function (Builder $query) {
            //     $query->where('atachment_type', '=', 'cover');
            // })->get();


            if ($news) {
                return response()->json([
                    'code' => 'Success',
                    'data' => $news,
                    'message' => 'News Found'
                ], 200);
            } else {
                return response()->json(null, 404);
            }
        } catch (Exception $news) {
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
    public function update(Request $request)
    {
        // return 'hafiz';
        return $request;

        // data from request
        $data = json_decode($request->getContent(), true);
        $attachments = array_merge($data['cover'],  $data['photos'], $data['wides'],  $data['accordions']);
        unset($data['cover'], $data['photos'], $data['wides'], $data['accordions']);

        //existing data
        $news = News::findOrFail($data['id']);


        $news = News::findOrFail($data['id']);
        $attachments_without_id = collect($attachments)->where('id', '');
        $attachments_with_id = (clone collect($attachments))->where('id', '!=', '');
        $attachments_ids = $attachments_with_id->pluck('id')->toArray();
        $old_attachments =  $news->attachments()->get();




        foreach ($attachments_with_id as $attachment) {
            Attachment::where('id', '=', $attachment['id'])->update($attachment);
        }



        // delete the removed ones
        foreach ($old_attachments as $attachment) {
            if (!in_array($attachment['id'], $attachments_ids)) {
                Storage::disk('public')->delete($attachment['path']);
                Attachment::destroy($attachment['id']);
            }
        }

        return false;

        // // new uploads
        // foreach ($attachments_without_id as $attachment) {
        //     return $attachment;
        // }



        // update news
        $news =  News::where('id', $data['id'])->update($data);

        return $news;

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

        // $db = DB::delete("DELETE FROM news WHERE id=?", [$id]);

        // if ($db) {
        //     return response()->json(null, 204);
        // } else {
        //     return response()->json([
        //         'code' => 'FAILURE',
        //         'data' => 'No data available',
        //         'message' => 'News not found'
        //     ], 404);
        // }
    }
}
