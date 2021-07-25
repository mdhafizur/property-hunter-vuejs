<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Exception;

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
            // $news['cover'] = Attachment::where([['item_id', '=', $id], ['item_type', '=', 'news'], ['attachment_type', '=', 'cover']])->get();
            $article['cover'] =  $article->attachments()->where('attachment_type', '=', 'cover')->get();
            $article['photos'] =  $article->attachments()->where('attachment_type', '=', 'photo')->get();
            $article['wides'] =  $article->attachments()->where('attachment_type', '=', 'wide')->get();


            $article['accordions'] = Article::where([['item_id', '=', $alias], ['item_type', '=', 'news'], ['attachment_type', '=', 'accordion']])->get();



            if ($article) {
                return response()->json([
                    'code' => 'Success',
                    'data' => $article,
                    'message' => 'News Found'
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
