<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $table = 'noticias';
    protected $fillable = [
        'title',
        'slug',
        'short_text',
        'text',
        'image_path',
    ];
    public function setConteudoAttribute($value)
    {
        $this->attributes['text'] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    // Accessor para decodificar HTML especial ao recuperar
    public function getConteudoAttribute($value)
    {
        return htmlspecialchars_decode($value, ENT_QUOTES);
    }
}
