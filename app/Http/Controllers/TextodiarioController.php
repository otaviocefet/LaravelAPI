<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Textodiario;
use Illuminate\Http\Request;

class TextodiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textodiarios = Textodiario::all();
        return view ("adm/textodiario", compact('textodiarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view("adm/textodiario/create", compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'texto' => 'required|max:1000',
        ]);
        if ($validated) {
            $textodiario = new Textodiario();
            $textodiario->user_id = $request->get('user_id');
            $textodiario->texto = $request->get('texto');
            $textodiario->save();
      return redirect("textodiario");
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Textodiario  $textodiario
     * @return \Illuminate\Http\Response
     */
    public function show(Textodiario $textodiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Textodiario  $textodiario
     * @return \Illuminate\Http\Response
     */
    public function edit(Textodiario $textodiario)
    {
        $users=User::all();
        return view("adm/textodiario/edit", compact('users', 'textodiario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Textodiario  $textodiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Textodiario $textodiario)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'texto' => 'required|max:255',
        ]);
        if ($validated) {
            $textodiario->user_id = $request->get('user_id');
            $textodiario->texto = $request->get('texto');
            $textodiario->save();
      return redirect("textodiario");
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Textodiario  $textodiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Textodiario $textodiario)
    {
        //
    }
}
