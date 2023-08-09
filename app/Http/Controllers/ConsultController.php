<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultController extends Controller
{
    public function hi() {
        echo "Hola ";
    }

    public function consult() {
        $users = DB::table('urban_shipments')
            ->distinct('client_code')
            ->orderBy('client_code');
        $ids = $users
            ->chunk(400, function ($ids){
                foreach ($ids as $id) {
                    DB::table('urban_shipments')->where('id', $id->id )
                    ->update(['id_unique' => "$id->client_code-1"]);
                };
            });

        return view('/index', [
            'users' => $ids
        ]);

    }

    // public function recibir (Request $request) {
    //     $nombre = $request->input('nombre');
    //     $email = $request->input('email');
    // }
}
