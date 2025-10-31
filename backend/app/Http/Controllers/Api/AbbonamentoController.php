<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Abbonamento;
use Illuminate\Http\Request;

class AbbonamentoController extends Controller
{
    public function index()
    {
        return response()->json(Abbonamento::with(['utente', 'piano', 'pagamento'])->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_utente' => 'required|exists:utenti,id',
            'id_piano' => 'required|exists:piani,id',
            'data_attivazione' => 'required|date',
            'data_scadenza' => 'required|date',
            'stato' => 'required|string'
        ]);

        $abbonamento = Abbonamento::create($data);
        return response()->json($abbonamento, 201);
    }
}
