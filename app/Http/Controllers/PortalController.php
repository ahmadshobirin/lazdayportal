<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function home()
    {
        $lastNews = DB::table("news")
                        ->select("id","title","creator","created_at")
                        ->orderBy("id","desc")
                        ->limit(5)
                        ->get();

        $allCategory = DB::table("category")->orderBy("name")->get();

        $lastCategoryNews = DB::table("tag_category_news")
                            ->select("tag_category_news.id","tag_category_news.category","news.title", "news.image")
                            ->join("news", "news.id", "tag_category_news.news_id")
                            ->orderBy("tag_category_news.id", "desc")
                            ->first();

        $lastCategory = DB::table("category")
                        ->where("id","<>", $lastCategoryNews->id)
                        ->orderBy("name")
                        ->limit(3)
                        ->get();

        return response()->json([
            "status" => 200,
            "message" => "OK",
            "data" => [
                "last_news" => $lastNews,
                "all_category" => $allCategory,
                "last_category_news" => $lastCategoryNews,
                "last_category" => $lastCategory
            ]
        ]);
    }

    public function search(Request $request)
    {
        $allCategory = DB::table("category")->orderBy("name")->get();

        if(isset($request->category)){

        }

        return response()->json([
            "status" => 200,
            "message" => "OK",
            "data" => [
                "category" => $allCategory
            ]
        ]);
    }
}
