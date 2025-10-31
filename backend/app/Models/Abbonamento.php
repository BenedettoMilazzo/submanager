<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abbonamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_utente',
        'id_piano',
        'id_pagamento',
        'data_attivazione',
        'data_scadenza',
        'stato',
    ];

    public function utente() {
        return $this->belongsTo(Utente::class, 'id_utente');
    }

    public function piano() {
        return $this->belongsTo(Piano::class, 'id_piano');
    }

    public function pagamento() {
        return $this->belongsTo(Pagamento::class, 'id_pagamento');
    }
}
