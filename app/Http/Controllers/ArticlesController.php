<?php

namespace App\Http\Controllers;

/*use Request;*/
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use Auth;

class ArticlesController extends Controller
{
    public function index()
    {   
    	$articles= Article::latest('published_at')->published()->get();

    	return view('articles.index',compact('articles'));
    }
    public function show($id) 
    {
    	$article = Article::findorfail($id);

    	return view('articles.show',compact('article'));
    }
    public function create() 
    {
    	return view('articles.create');
    }
    public function store(ArticleRequest $request) 
    {	
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
    	Article::create($request->all());
    	return redirect('articles');
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    public function update($id, ArticleRequest $request) 
    {   
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('articles');
    }

}
