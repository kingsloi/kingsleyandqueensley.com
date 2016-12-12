<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Rsvp;
use Validator;
use Illuminate\Http\Request;

class RsvpController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * RSVP (whether they're coming or not)
     * @param Request $request Form data
     */
    public function add(Request $request)
    {

        if(Carbon::now()->gte(Carbon::createFromFormat('d/m/Y H:i', config('wedding.rsvp_cutoff')))){
            return ['success' => false, 'errors' => 'RSVPs are now closed.'];
        }

        $v = Validator::make($request->all(), [
            "names" => "required",
            "email" => "required|email",
            "count" => "required|integer",
            "answer" => "required|boolean"
        ]);

        if ($v->fails()) {
            return ['success' => false, 'errors' => $v->errors()];
        }

        Rsvp::create($request->all());
        return ['success' => true];
    }

    /**
     * Who is/isn't coming
     * @return View
     */
    public function who()
    {
        if(!isset($_GET['password']) || $_GET['password'] !== config('wedding.password') ){
            abort(401);
        }

        $rsvps = Rsvp::get();
        $coming = Rsvp::coming()->get();
        return view('who', compact('rsvps', 'coming'));
    }
}
