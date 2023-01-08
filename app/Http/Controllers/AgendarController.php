<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendar;

class AgendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $agendar = Agendar::paginate(3);
       return view ('agendar.index')->with('agendar', $agendar);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('agendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Agendar::create($input);
        return redirect('')->with('flash_message', 'Sessao marcada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    //     $agendar = Agendar::with('dash')->where('id', '=',$id)->first();
    //    return view (' agendar.show', compact('agendar'));

        $agendar = Agendar::find($id);
        return view (' agendar.show ')->with('agendar', $agendar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //   $agendar = Agendar::find($id);
    //   return view('agendar.edit')->with('agendar', $agendar);

      $agendar = Agendar::findOrFail($id);

      return view('agendar.edit', ['agendar' => $agendar]);
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
        $agendar = Agendar::find($id);
        $input = $request->all();
        $agendar->update($input);
        return redirect('agendar')->with('flash_message', 'Evento Confirmado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Agendar::destroy($id);
       return redirect('agendar')->with('flash_message', 'Evento Removido');
    }
}
