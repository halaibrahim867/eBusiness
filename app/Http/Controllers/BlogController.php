<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function readBlog($category = null, $tag = null)
    {
        $articlesQuery = Article::query();

        if ($category) {
            $articlesQuery->whereHas('category', function ($query) use ($category) {
                $query->where('name', $category);
            });
        }

        if ($tag) {
            $articlesQuery->whereHas('tags', function ($query) use ($tag) {
                $query->where('name', $tag);
            });
        }

        $articles = $articlesQuery->latest()->simplePaginate(5);
        $commentCount = $this->getCommentCount($articles);

        $categories = ArticleCategory::all();
        $tags = Tag::all();

        return view('blog', compact('articles', 'commentCount', 'categories', 'tags'));
    }

    private function getCommentCount($articles)
    {
        $comments = $articles->pluck('comments')->flatten();
        return $comments->count();
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::where('title', 'like', '%' . $query . '%')
            ->orWhere('partial', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->get();

        $commentCount = $this->getCommentCount($articles);
        $categories = ArticleCategory::all();
        $tags = Tag::all();

        return view('blog', compact('articles', 'commentCount', 'categories', 'tags'));
    }




}
