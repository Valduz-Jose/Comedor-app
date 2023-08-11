<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class vivere extends Model
{
    use HasFactory;
    protected function name(): Attribute
    {
        return new Attribute(
            //Accesor->Transforma la representacion del registro
            get: fn ($value) => ucwords($value),

            //Mutador
            set: fn ($value) => strtolower($value)
        );
    }
}
