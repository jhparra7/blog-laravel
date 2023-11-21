<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactenos.index');

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        Mail::to('parra.jesus@gmail.com')->send(new ContactanosMailable($request->all()));

        //session()->flash('info','Mensaje enviado');

        return redirect()->route('contactanos.index')->with('info','Mensaje Enviado');

    }
}

