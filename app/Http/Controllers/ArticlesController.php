<?php

namespace App\Http\Controllers;

use Request;/*Illuminate\Http\Request;*/
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests\CreateArticleRequest;

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
    public function store(CreateArticleRequest $request) 
    {	
    	Article::create($request->all());
    	return redirect('articles');
    }

}
