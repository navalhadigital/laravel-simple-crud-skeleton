<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $contatos = Contato::count();
        $contatosList = Contato::orderBy('created_at', 'DESC')->paginate();

        return view('dashboard', compact('contatos', 'contatosList'))->with('title', 'Dashboard');
    }
}
