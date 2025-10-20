<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiant';

    protected $fillable = ['nom', 'prenom', 'email', 'age'];

    public function cours()
    {
    return $this->belongsToMany(Cours::class, 'cours_etudiant', 'etudiant_id', 'cours_id');
    }

}
