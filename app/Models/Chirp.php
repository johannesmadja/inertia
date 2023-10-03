<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;

    // Propriété spécifiant les champs modifiable 
    protected $fillable = [
        'message',
    ];

    // Méthode de relation : Un commentaire n'a qu'un auteur 
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
