<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodotto;
use App\Http\Requests\StoreProdottoRequest;

class ProdottoController extends Controller
{
    public function store(StoreProdottoRequest $request)
    {
        // I dati sono già validati
        $validated = $request->validated();

        // Salva il prodotto nel database
        $prodotto = Prodotto::create($validated);

        // Redirect con messaggio di successo
        return redirect()->back()->with('success', 'Prodotto creato con successo!');
    }

    public function index()
    {
        $prodotti = Prodotto::all();
        return view('prodotti_index', compact('prodotti'));
    }

    public function create()
    {
        return view('prodotto_create');
    }
} 