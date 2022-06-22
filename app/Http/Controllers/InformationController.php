<?php

namespace App\Http\Controllers;

use App\Exports\ExportInformation;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\InformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $information = Information::orderBy('id', 'DESC')->paginate(10);

        return view('contacto/information', [
            'information' => $information
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InformationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformationRequest $request)
    {
        Information::create([
            'name' => $request->name,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'descripcion' => $request->descripcion
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        return view('contacto/information_show', [
            'contacto' => $information
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        $information->delete();
        return back();
    }

    /**
     * Export Information.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function exportInformation(Request $request)
    {
        return Excel::download(new ExportInformation, 'information.xlsx');
    }
}
