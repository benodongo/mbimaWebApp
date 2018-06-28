<?php

namespace App\Http\Controllers;

use App\Premiums;
use Illuminate\Http\Request;

class PremiumsController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $insurance_co = $request->input('insurance_company');
        $date = $request->input('date');
        $policy_number= $request->input('policy_number');
        $premium = $request->input('premium');
        $agent_id = $request->input('agent_id');
        $client_id = $request->input('client_id');
        $expiry_date1 = Carbon::parse($date);
        $expiry_date = $expiry_date1->addYear();
        $data = DB::table('premiums')
            ->insert([ 'insurance_company' =>$insurance_co,
                 'date'=>$date, 'policy_number'=>$policy_number,'premium'=>$premium,'expiry_date'=>$expiry_date,'agent_id'=>$agent_id,'client_id'=>$client_id]);
        if ($data) {

            return response(array(
                "Message" => " successful",
                "code" => 200,
                "status" => "success",
            ));
        } else {
            return response(array(
                "Message" => "Operation failed",
                "code" => 500,
                "status" => "fail",
            ));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Premiums  $premiums
     * @return \Illuminate\Http\Response
     */
    public function show(Premiums $premiums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Premiums  $premiums
     * @return \Illuminate\Http\Response
     */
    public function edit(Premiums $premiums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Premiums  $premiums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Premiums $premiums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Premiums  $premiums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Premiums $premiums)
    {
        //
    }
}
