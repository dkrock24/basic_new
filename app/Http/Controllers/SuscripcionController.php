<?php

namespace App\Http\Controllers;

use App\Exports\ExportSuscripcion;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Suscripcion;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $suscripcion = Suscripcion::orderBy('id', 'DESC')->paginate(10);

        return view('contacto/suscripcion', [
            'suscripcion' => $suscripcion
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InformationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Suscripcion::create([
            'email' => $request->email
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suscripcion  $suscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suscripcion $suscripcion)
    {
        $suscripcion->delete();
        return back();
    }

    /**
     * Export Suscripcion.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function exportSuscripcion(Request $request)
    {
        return Excel::download(new ExportSuscripcion, 'suscripcion.xlsx');
    }
}
