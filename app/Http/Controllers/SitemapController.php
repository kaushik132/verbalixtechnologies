<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\BlogCategory;

class SitemapController extends Controller
{
    public function index(){
$blogs = Blog::all();
$services = Service::all();
$servicesfiltter = ServiceCategory::all();
$blogsfiltter = BlogCategory::all();

        return response()->view('sitemap',['blogs'=> $blogs,'services'=>$services,'servicesfiltter'=>$servicesfiltter,'blogsfiltter'=>$blogsfiltter ])->header('Content-Type','text/xml');
    }
}
