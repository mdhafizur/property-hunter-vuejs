<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        try {


            if ($request->has('limit')) {
                $data = Article::with('attachments')->where('status', '!=', 'DELETED')->paginate($request->limit);
            } else {
                $data = Article::with('attachments')->where('status', '=', null)->paginate();
            }


            // $data = News::with('attachments')->get();

            return response()->json([
                'code' => 'OK_RESPONSE',
                'data' => $data,
                'message' => ''
            ], 200);
        } catch (Exception $exception) {
            return response()->json($exception, 400);
        }
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
        $validator = Validator::make(
            $request->all(),
            [
                // 'id' => 'required|unique:article|integer',
                // 'created_by' => 'required|string|max:255',
                'title' => 'required',
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
            try {
                $article = new Article();
                $article->alias = Str::slug($request->title);

                $article->title = $request->title;
                $article->content = $request->content;
                $article->category = $request->category;
                $article->written_by = $request->written_by;
                $article->article_source_from = $request->article_source_from;
                $article->photo_source_and_credit_to = $request->photo_source_and_credit_to;
                $article->featured_publish_date = $request->featured_publish_date;
                $article->featured_expiry_date = $request->featured_expiry_date;
                // $article->created_by = Auth::user();
                $article->id = 1;

                $article->save();
                $article->refresh();

                return response()->json([
                    'code' => 'OK_RESPONSE',
                    'data' =>   $article,
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
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($alias)
    {
        try {
            $article = Article::findOrFail($alias);
            // return $article;

            $article['cover'] =  $article->attachments()->where([['item_type', '=', $article['category']], ['attachment_type', '=', 'cover']])->get();
            $article['photos'] =  $article->attachments()->where([['item_type', '=', $article['category']], ['attachment_type', '=', 'photo']])->get();
            $article['wides'] =  $article->attachments()->where([['item_type', '=', $article['category']], ['attachment_type', '=', 'wide']])->get();
            $article['accordions'] =  $article->attachments()->where([['item_type', '=', $article['category']], ['attachment_type', '=', 'accordion']])->get();




            if ($article) {
                return response()->json([
                    'code' => 'Success',
                    'data' => $article,
                    'message' => 'Article Found'
                ], 200);
            } else {
                return response()->json(null, 404);
            }
        } catch (Exception $article) {
            return response()->json(null, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
