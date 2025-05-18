<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\page;
use App\Models\comments;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('layouts.index');
    }

    public function articles() {

        $_GET = articles::get();

        $data = [
            'data' => $_GET
        ];

        return view('articles',$data);
    }

    public function pages() {
        $_GET = page::get();

        $data = [
            'data' => $_GET
        ];
        return view('pages',$data);
    }

    public function comments() {
        $_GET = comments::get();

        $data = [
            'data' => $_GET
        ];
        return view('comments',$data);
    }

    public function about() {
        return view('about');
    }
}