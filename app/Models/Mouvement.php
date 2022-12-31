<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvement extends Model
{
    use HasFactory;
    protected $fillable = [
    
        'categorie_id',
        'description',
        'quantite',
        'user_id',
        
        
       
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function mouvement_lieux() 
    {
        return $this->hasMany(Mouvement_lieu::class);
    }

}
