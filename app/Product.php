<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Campos acessíveis para atribuição
    protected $fillable = ['name', 'description', 'price'];

}
