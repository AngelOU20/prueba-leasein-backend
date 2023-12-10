<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function equiposAlquilados($nombre)
    {
        $nombre = str_replace('_', ' ', $nombre);
        $cliente = DB::table('Vista_Reporte')->where('Nombre_Cliente', $nombre)->get();

        if ($cliente->isEmpty()) {
            return response()->json(['error' => 'Cliente no encontrado'], 404);
        } else {
            return response()->json($cliente);
        }
    }
}
