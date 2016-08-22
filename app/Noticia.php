<?php

namespace ProyectoV1;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = ['volanta','titulo', 'copete', 'cuerpo', 'fecha', 'imagen', 'video', 'descripcion', ' usuario','estado'];


    public function setImagenAttribute($imagen){
        $name = Carbon::now()->second.$imagen->getClientOriginalName();
        $this->attributes['imagen'] = $name;
        \Storage::disk('local')->put($name, \File::get($imagen));
    }
}
