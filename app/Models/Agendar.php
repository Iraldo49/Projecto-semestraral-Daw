<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendar extends Model
{
    use HasFactory;
    protected $table = 'agendar';
    protected $primarykey ='id';
    protected $fillable = ['nome','apelido','email','evento','pacote','data','estado'];
}
