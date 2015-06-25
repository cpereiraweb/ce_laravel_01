<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Campos acessíveis para atribuição
    protected $fillable = ['name', 'description'];
}
