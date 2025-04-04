<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Parsedown;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        $parsedArticles = $articles->map(function ($article) {
            $article->content = Parsedown::instance()->text($article->content);
            return $article;
        });

        return view('articles', compact('parsedArticles'));
    }

    public function overons()
    {
        return view('over-ons');
    }

    public function create()
    {
        return view('create');
    }

    public function store(ArticleRequest $request)
    {
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('articles')->with('success', 'Article created successfully.');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('edit', compact('article'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = Parsedown::instance()->text($request->content);
        $article->save();

        return redirect()->route('articles')->with('status', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles')->with('status', 'Article deleted successfully.');
    }
}
