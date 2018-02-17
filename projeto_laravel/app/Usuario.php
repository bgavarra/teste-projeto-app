<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  //use softDeletes;
  // protected $dates = ['deleted_at'];
  protected $guarded = [
      'email','senha','cpf','nome','telefone','endereco','data_nascimento','categorias'
  ];
  protected $hidden = [
      'email','senha','cpf','remember_token',
  ];
  
}
