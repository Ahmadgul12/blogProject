<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Author;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Article;
use DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.pages.list-articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $tags = Tag::all();
        $categories = Category::all();

        return view('admin.pages.add-article', compact('authors', 'tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;

        $article->title = $request->title;
        $article->author_id = $request->author;
        $article->category_id = $request->category;
        $article->contents = $request->contents;
        $article->is_public  = $request->privacy;

        if ($request->file('post_image') == null) {
            $article->cover_image_path = 'default.jpg';
        } else {
            $ext = $request->file('post_image')->extension();
            $final_name = date('YmdHis') . '.' . $ext;
            $request->file('post_image')->move(public_path('article_cover/'), $final_name);
            $article->cover_image_path = $final_name;
        }

        // DB::insert('insert into article_tags (article_id, tag_id) values (?, ?)', [$req
        // ->1, $request->tags])
        $article->save();
        return redirect()->back();
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
    public function update(Request $request, $id)
    {
        //
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
    }
}
