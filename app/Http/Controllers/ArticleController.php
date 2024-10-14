<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $articles = [
        ["name"=>"Carlo","surname"=>"Cracco","id"=>1],
        ["name"=>"Federica","surname"=>"Mudu","id"=>2],
        ["name"=>"Matteo","surname"=>"Sartori","id"=>3],
        ["name"=>"Matteo","surname"=>"Sisto","id"=>4],
        ["name"=>"Matteo","surname"=>"Lucarelli","id"=>5],
        ["name"=>"Mirco","surname"=>"Suriano","id"=>6],
    ];
    public function articlesPage(){
        return view('articles',["article" => $this->articles]);
    }
    public function articleDetail($id){
        foreach($this->articles as $article){

            if ($article['id'] == $id) {
               
                return view("articleDetail",["article"=>$article]);

            }
        }
        
    }

}
