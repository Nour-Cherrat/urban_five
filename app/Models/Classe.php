<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    public function adherents()
    {
        return $this->hasMany(Adherent::class, 'id_classe', 'id');
    }

    public function coach()
    {
        return $this->hasOne(Coach::class, 'id_classe');
    }

    public function schedules()
    {
        return $this->hasMany(ClassSchedule::class, 'id_classe');
    }
}
