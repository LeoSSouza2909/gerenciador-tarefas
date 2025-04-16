<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarefa extends Model
{
    use HasFactory;


    protected $table = 'tarefas';

    protected $fillable = [
        'titulo',
        'descricao',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
