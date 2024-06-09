<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSchedule extends Model
{
    use HasFactory;

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }
}
