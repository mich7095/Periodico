<?php

namespace App\Http\Controllers;
use App\Noticia;
use App\Http\Requests\CreateNoticiaRequest;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
  public function show(Noticia $noticia)
  {
    //$noticia = Noticia::find($id);
    return view('noticias.show', [
      'noticia'=> $noticia,
    ]);
  }

  Public function home(){
    return view('CreaNoticia');
  }

  /*public function index()
  {
    $noticias = Noticia::all();
    return view('noticias.index')->withNoticias($noticias);
  }*/

  public function create(CreateNoticiaRequest $request)
  {
    $admin = $request->user();
    $image = $request->file('image');
    $noticia = Noticia::create([
      'admin_id' => $admin->id, //aqui
      'created_at' => $request->input('fecha'),
      'updated_at' => $request->input('fecha'),
      'titulo' => $request->input('noticia'),
      'image' => $image->store('noticias', 'public'),
      'cuerpo' => $request->input('cuerpo')
    ]);
    return redirect('/noticias/'.$noticia->id);
  }
}
