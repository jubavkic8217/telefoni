<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefon extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['model', 'procesor', 'slika', 'cena','ram','memorija', 'baterija','kamera','kategorija_id'];
}
