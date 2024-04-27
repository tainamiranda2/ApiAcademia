<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academia extends Model
{
    use HasFactory;
    protected $fillable=['user_id','dono', 'investimento', 'nome', 'endereco','data_cadastro'];

}
