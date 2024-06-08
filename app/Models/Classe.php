<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    public function adherents()
    {
        return $this->hasMany(Adherent::class, 'id_classe');
    }

    public function coach()
    {
        return $this->hasOne(Coach::class, 'id_classe');
    }
}
