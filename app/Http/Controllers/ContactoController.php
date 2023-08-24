<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;
class ContactoController extends Controller
{
    public function show()
    {
        return view('Contacto');
    }


    public function store(Request $request ){
        $contacto = new Contacto();

        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->mensaje = $request->mensaje;

        $contacto->save();;
        
        return  redirect()->route('');
    }
}
