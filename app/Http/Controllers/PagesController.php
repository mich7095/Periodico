<?php

namespace App\Http\Controllers;
use App\Noticia;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function home()
    {
      $noticias= Noticia::latest()->paginate(6);
      return view('welcome', [
      'noticias' => $noticias,
    ]);
    }

}
