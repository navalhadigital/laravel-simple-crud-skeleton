<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\InscricoesExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function inscricoes()
    {
        return Excel::download(new InscricoesExport, 'inscricoes.xlsx');
    }
}
