<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviados()
    {
        //
        $msg = Auth::user()->mensajesEnviados()->get();
        
        return view('enviados',['mensajes' => $msg]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recibidos()
    {
        //
        $msg = Auth::user()->mensajesRecibidos()->get();
        return view('recibidos',['mensajes' => $msg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        $receptores = User::where('id','!=', Auth::user()->id)->get();
        return view('redactar',[ 'receptores' =>$receptores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msg = new Message();
        $msg->receptor_id = $request->get('receptor_id');
        $msg->emisor_id = Auth::user()->id;
        $msg->asunto = $request->get('asunto');
        $msg->mensaje = $request->get('mensaje');
        $msg->save();

        $receptores = User::where('id','!=', Auth::user()->id)->get();

        return view('redactar',[ 'receptores' =>$receptores]);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mensaje = Message::find($id);
        return view('ver-mensaje', ['mensaje'=>$mensaje]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
