<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){


        $categories = Category::all();

        foreach ($categories as $category) {
            echo $category->label . '<br>';
        }

        // Retrieve a model by its primary key...
        //$category = Category::find(1);

        // Retrieve the first model matching the query constraints...


        //select * from `categories` where `idcategories` = ? or `label` = ? order by `label` asc limit 2
        $categories = Category::where('idcategories', 1)
            ->orWhere('label', "essai")
            ->limit(2)
            ->orderBy('label');


        var_dump($categories->toSql());

        //$categories = Category::find([1, 2, 3]);

        $categories = Category::query('SELECT * FROM `categories`;');


    }
}
