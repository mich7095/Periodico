<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $guarded = [];
//aqui
    public function user()
    {
      return $this->belongsTo(Admin::class);
    }
    public function admin()
    {
      return $this->belongsTo(Admin::class);
    }
    public function getImageAttribute($image)
    {
      if(!$image || starts_with($image, 'http')){
        return $image;
      }
      return \Storage::disk('public')->url($image);
    }
}
