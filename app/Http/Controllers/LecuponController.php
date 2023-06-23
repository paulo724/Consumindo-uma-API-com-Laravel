<?php

namespace App\Http\Controllers;

use App\Facades\Lecupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LecuponController extends Controller
{

    public function getPost(Request $request)
    {
        $usuarios = Lecupon::get('/posts', [
            'userId' => $request->id,
        ])->json();

        return view(
            'users',
            ['Usuarios' => $usuarios]
        );
    }

    public function postNewUsuario()
    {
        $post = Lecupon::post('/post', ['1'])->json();
        return view(
            'users',
            ['Usuarios' => $post]
        );
    }
}
