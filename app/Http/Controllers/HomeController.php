<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Suscripcion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contactList = Information::All()->count();
        $suscriptionList = Suscripcion::All()->count();

        
        $contactsTotal = Information::select('*')->whereMonth('created_at', Carbon::now()->month)->count();
        $suscriptorTotal = Suscripcion::select('*')->whereMonth('created_at', Carbon::now()->month)->count();
        //        

        return view('home', [
            'contacts' => $contactList,
            'suscriptions' => $suscriptionList,
            'contactsTotal' => $contactsTotal,
            'suscriptionsTotal' => $suscriptorTotal,
        ]);
    }
}
