<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\page;
use App\Models\comments;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('layouts.index');
    }

    public function home() {
        return view('Homepage.home');
    }

    public function articles() {

        $_GET = articles::get();

        $data = [
            'data' => $_GET
        ];

        return view('articles',$data);
    }

    
    public function api() {
        $response = Http::get('https://api.escuelajs.co/api/v1/users');

        if ($response->successful()) {
            $data = $response->object();
        } else {
        $data = [ 'message' => 'Error fetching data from API'];
        };
        return view('api',compact('data'));
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