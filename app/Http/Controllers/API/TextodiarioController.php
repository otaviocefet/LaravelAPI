<?php

namespace App\Http\Controllers\API;

use app\Models\Textodiario;
use App\Http\Controllers\Controller;
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
        $textodiario = Textodiario::all();
        return $this->success($textodiario);
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
            'user_id' => 'required|integer|exists:App\Models\User,id',
            'texto' => 'required|max:255|unique:textodiario',
        ]);
        if ($validated) {
            $textodiario = new Textodiario();
            $textodiario->user_id = $request->get('user_id');
            $textodiario->texto = $request->get('texto');
        }
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
