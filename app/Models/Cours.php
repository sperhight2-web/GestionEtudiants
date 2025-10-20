<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $table = 'cours';

    protected $fillable = ['titre', 'description'];

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'cours_etudiant', 'cours_id', 'etudiant_id');
    }
}
