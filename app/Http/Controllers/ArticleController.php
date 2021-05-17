<?php

namespace App\Http\Controllers;

use App\Article;
use App\ResponseData;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ArticleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Application|Factory|Response|View
   */
  public function index()
  {
    $articles = DB::table('articles')
      ->where('status', '=', 1)
      ->orderBy('created_at', 'DESC')
      ->paginate(8);
    return view('blogs', compact('articles'));
  }

  /**
   * Display a detail of the resource.
   *
   * @param $slug
   * @return Application|Factory|Response|View
   */
  public function detail($slug)
  {
    $recent_articles = DB::table('articles')
      ->where('status', '=', 1)
      ->orderBy('created_at', 'DESC')
      ->take(3)
      ->get();

    $article = DB::table('articles')
      ->where('slug', '=', $slug)
      ->where('status', '=', 1)
      ->get();

    if (count($article) == 0) {
      return view('blog-detail')
        ->with('article', null)
        ->with('recent_articles', $recent_articles)
        ->with('previous_article', null)
        ->with('next_article', null);
    }

    $previous_article = DB::table('articles')
      ->where('id', '<', $article[0]->id)
      ->orderBy('id', 'desc')
      ->first();

    $next_article = DB::table('articles')
      ->where('id', '>', $article[0]->id)
      ->orderBy('id', 'asc')
      ->first();

    return view('blog-detail')
      ->with('article', $article[0])
      ->with('recent_articles', $recent_articles)
      ->with('previous_article', $previous_article)
      ->with('next_article', $next_article);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(Request $request)
  {
//        $article = new Article([
//            'title' => $request->get('title'),
//            'content' => $request->get('content')
//        ]);
//        $article->save();
//        $response_data = new ResponseData(200, "success", null);
//        $status_code = 200;
//        return response()->json($response_data, $status_code);
  }

  /**
   * Display the specified resource.
   *
   * @param \App\Article $article
   * @return Response
   */
  public function show(Article $article)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param \App\Article $article
   * @return Response
   */
  public function edit(Article $article)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\Article $article
   * @return Response
   */
  public function update(Request $request, Article $article)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Article $article
   * @return Response
   */
  public function destroy(Article $article)
  {
    //
  }

  ////////////////////////////////////////////////////////////////////////////////////////////////////
  /// API <-

  /**
   * Take list of the resource with pagination.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function apiTake(Request $request)
  {
    $page = $request->get('page');
    $size = $request->get('size');
    $orderBy = $request->get('order-by');
    $status = $request->get('status');

    if (!isset($page) || $page <= 0) {
      $page = 1;
    }
    if (!isset($size) || $size <= 0) {
      $size = 10;
    }
    if (!isset($orderBy) || (strtolower($orderBy) != 'asc' && strtolower($orderBy) != 'desc')) {
      $orderBy = 'desc';
    }
    if (!isset($status) || ($status != 0 && $status != 1)) {
      $status = 1;
    }
    $skip = $size * ($page - 1);

    $articles = Article::query();

    if (isset($status)) {
      $articles = $articles->where('status', '=', $status);
    }

    $articles = $articles->orderBy('created_at', $orderBy)->skip($skip)->take($size)->get();

    $response_data = new ResponseData(200, "success", $articles);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }

  /**
   * Take all of the resource.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function apiTakeAll(Request $request)
  {
    $orderBy = $request->get('order-by');
    $status = $request->get('status');

    if (!isset($orderBy) || (strtolower($orderBy) != 'asc' && strtolower($orderBy) != 'desc')) {
      $orderBy = 'desc';
    }
    if (!isset($status) || ($status != 0 && $status != 1)) {
      $status = 1;
    }

    $articles = Article::query();

    if (isset($status)) {
      $articles = $articles->where('status', '=', $status);
    }

    $articles = $articles->orderBy('created_at', $orderBy)->get();

    $response_data = new ResponseData(200, "success", $articles);
    $status_code = 200;
    return response()->json($response_data, $status_code);
  }
}
