<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    function contact(Request $req){
        $req->validate([
            "text"=>"required|min:2|max:30",
        ]);
        return view("welcome");
    }
    function user(){
        $obj = (object) [
            'also' => 1,
            'felso' => 50,
            'name'=>""
          ];
        return view("user")->with("posted",$obj)->with("users",User::get());
    }
    function user2(Request $r){
        return view("user")->with("posted",$r)->with("users",User::where("id",">",$r->also-1)->where("id","<",$r->felso+1)->where("name","like","%".$r->name."%")->get());
    }
}
