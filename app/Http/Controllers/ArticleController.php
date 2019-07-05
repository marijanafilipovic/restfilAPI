<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    public function fetch(){

        $client = new \GuzzleHttp\Client();
        $request = $client->get('example.com');
        $response = $request->getBody();
        return $response;

    }
    public function index()
    {
        $articles =  Article::paginate(4);
        return view('articles.articles')->with('articles', $articles);
    }
    public function show($id)
    {
        return Article::find($id);
    }
    public function store(Request $request)
    {
        return Article::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Article::find($id);
        $article->delete();
return 204;
//        return view('articles');
    }
}
