<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['bank_id', 'cnpj', 'nome', 'agencia', 'conta', 'op', 'whatsapp', 'email'];

    public function banks()
    {
        return $this->belongsTo('App\Models\Bank');
    }

}
