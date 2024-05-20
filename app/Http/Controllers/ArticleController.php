<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;


class ArticleController extends Controller
{
    use ValidatesRequests;

    /* View Home */
    public function index()
    {
        $article = new Article();
        $articlesBusiness = $article->getByCategory('negocios');
        $articlesHealth = $article->getByCategory('salud');
        $articlesCurrents = $article->getByCategory('actual');
        $articlesScience = $article->getByCategory('ciencia');
        $articlesSports = $article->getByCategory('deportes');
        $articlesAdvertisements = $article->getByCategory('anuncios');
        $articlesEntertainment = $article->getByCategory('entretenimiento');
        return view('index')
            ->with('articlesBusiness', $articlesBusiness)
            ->with('articlesHealth', $articlesHealth)
            ->with('articlesCurrents', $articlesCurrents)
            ->with('articlesScience', $articlesScience)
            ->with('articlesSports', $articlesSports)
            ->with('articlesAdvertisements', $articlesAdvertisements)
            ->with('articlesEntertainment', $articlesEntertainment);
    }
    /* View Article */
    public function viewArticles()
    {
        $articles = Article::all();
        return view('articlesDashboard')->with('articles', $articles);
    }

    /* Store Article */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'url' => 'required|string',
            'urlToImage' => 'required|string',
            'category' => 'required|string',
        ]);
        Article::create([
            'title' => $request->title,
            'url' => $request->url,
            'urlToImage' => $request->urlToImage,
            'category' => $request->category
        ]);
        return redirect()->route('articles');
    }

    /* Delete Article */
    public function deleteArticle(Request $request)
    {
        $article = Article::find($request->article_id);

        if (!$article) {
            return redirect()->back()->with('error', 'Artículo no encontrado');
        }

        $article->delete();
        return redirect()->back()->with('success', 'Artículo eliminado correctamente');
    }

    /* Update Article */
    public function updateArticle(Request $request)
    {
        $articleId = $request->input('article_id');
        $article = Article::find($articleId);

        if (!$article) {
            return redirect()->back()->with('error', 'Artículo no encontrado');
        }

        $article->title = $request->input('title');
        $article->url = $request->input('url');
        $article->urlToImage = $request->input('urlToImage');
        $article->category = $request->input('category');

        $article->save();
        return redirect()->back()->with('success', 'Artículo actualizado correctamente');
    }

    public function articlesByCategory($category)
    {
        $article = new Article();
        $articles = $article->getByCategory($category);

        return view('sectionArticles')->with('articles', $articles)->with('category', $category);
    }
}
