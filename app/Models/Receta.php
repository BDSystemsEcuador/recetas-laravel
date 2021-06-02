<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'titulo',
        'categoria_id',
        'ingredientes',
        'preparacion',
        'imagen',
    ];
    use HasFactory;
    public function categoria(){
        return $this->belongsTo(CategoriaReceta::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
