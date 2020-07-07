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
        // $lasT = DB::table("category")->orderBy("name")->get();
        // 3category

        return response()->json([
            "status" => 200,
            "message" => "OK",
            "data" => [
                "last_news" => $lastNews,
                "all_category" => $allCategory,
            ]
        ]);
    }
}
