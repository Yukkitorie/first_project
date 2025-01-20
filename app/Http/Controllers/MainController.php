<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainController extends Controller
{
    public function index(){
    return view('main');
}
}