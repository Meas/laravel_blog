<?php

namespace App\Http\Controllers;

/*use Request;*/
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Tag;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



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
        $tags = Tag::get();
    	return view('articles.create', compact('tags'));
    }
    public function store(ArticleRequest $request) 
    {	

        
        $article = Auth::user()->articles()->create($request->all());
        $article->tags()->attach($request->input('tags'));

        /*session()->flash('flash_message', 'Your article has been created!');*/

        flash()->success('Your article has been created!');
    	return redirect('articles');/*->with([
                'flash_message'=>'Your article has been created!',
            ]);*/
    }
    public function edit($id)
    {
        $tags = Tag::get();
        $article = Article::findOrFail($id);
        $user=Auth::user();
        if ($user->id == $article->user_id)
        {
            return view('articles.edit', compact('article', 'tags'));
        }
        else 
        {
            flash()->error('You do not have the permission to edit the article!'); 
            return redirect('articles/'.$id);
        }
    }
    public function update($id, ArticleRequest $request) 
    {   
        $article = Article::findOrFail($id);
        $article->update($request->all());
        $article->tags()->sync($request->input('tags')); /*attach dodaje, detach oduzima, sync synca*/
        flash()->success('Your article has been updated!');
        return redirect('articles');
    }

}
