<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ClientController extends Controller
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
    public function create(Request $request)
    {
        $fname = $request->input('first_name');
        $lname = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $insurance_co = $request->input('insurance_company');
        $policy_type = $request->input('policy_type');
        $date = $request->input('date');
        $duration = $request->input('duration');
        $policy_number= $request->input('policy_number');
        $premium = $request->input('premium');
        $sum_insured = $request->input('sum_insured');
        $agent_id = $request->input('agent_id');
        $expiry_date1 = Carbon::parse($date);
        $expiry_date = $expiry_date1->addYear();
        $data = DB::table('clients')
            ->insert(['first_name'=>$fname, 'last_name' =>$lname, 'email'=>$email, 'phone'=>$phone, 'insurance_company' =>$insurance_co,
                'policy_type'=>$policy_type, 'date'=>$date, 'duration'=>$duration,'policy_number'=>$policy_number,'premium'=>$premium,'sum_insured'=>$sum_insured,'expiry_date'=>$expiry_date,'agent_id'=>$agent_id]);
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
    public function getClients(Request $request)
    {
        $agent_id = $request->input('id');
        $clients = Client::all()->where('agent_id','LIKE', $agent_id);
        $data = array();
        if (count($clients)>0)
        {
            foreach ($clients as $client)
            {
                $results = array();
                $results['id']=$client->id;
                $results['fname'] = $client->first_name;
                $results['lname'] = $client->last_name;
                $results['email'] = $client->email;
                $results['phone'] = $client->phone;
                $results['insurance_company'] =$client->insurance_company;
                $results['policy_type'] = $client->policy_type;
                $results['date'] = $client->date;
                $results['duration'] = $client->duration;
                $results['policy_number'] = $client->policy_number;
                $results['premium'] = $client->premium;
                $results['sum_insured']=$client->sum_insured;
                $results['expiry_date']=Carbon::parse($client->expiry_date)->toFormattedDateString();
                $current = Carbon::now();
                $future = Carbon::parse($client->expiry_date);
                $due = $future->diffInMonths($current);
                $results['due'] = $due;

                array_push($data,$results);

            }
            /*
             * return response()->json(['response' => 'success', 'clients' => $clients]);
             */
            return response(array(
                'Message' => 'records retrieved successful',
                'status' => 'success',
                'clients' =>$data,
            ),200);
        }
        else{
            return response(array(
                "Message" => "No records found",
                'status' => 'fail'
            ));

        }
        
    }
    //get clients based on policy
    public function getSpecific(Request $request)
    {
        $agent_id = $request->input('id');
        $policy = $request->input('policy');
        $clients = Client::all()->where('agent_id','LIKE', $agent_id)->Where('policy_type','LIKE',$policy);
        $data = array();
        if (count($clients)>0)
        {
            foreach ($clients as $client)
            {
                $results = array();
                $results['id']=$client->id;
                $results['fname'] = $client->first_name;
                $results['lname'] = $client->last_name;
                $results['email'] = $client->email;
                $results['phone'] = $client->phone;
                $results['insurance_company'] =$client->insurance_company;
                $results['policy_type'] = $client->policy_type;
                $results['date'] = $client->date;
                $results['duration'] = $client->duration;
                $results['policy_number'] = $client->policy_number;
                $results['premium'] = $client->premium;
                $results['sum_insured']=$client->sum_insured;
                $results['expiry_date']=Carbon::parse($client->expiry_date)->toFormattedDateString();
                $current = Carbon::now();
                $future = Carbon::parse($client->expiry_date);
                $due = $future->diffInMonths($current);
                $results['due'] = $due;

                array_push($data,$results);

            }
            /*
             * return response()->json(['response' => 'success', 'clients' => $clients]);
             */
            return response(array(
                'message' => 'records retrieved successful',
                'status' => 'success',
                'clients' =>$data,
            ),200);
        }
        else{
            return response(array(
                "message" => "No records found",
                'status' => 'fail'
            ));

        }

    }
    public function chart(Request $request)
    {
        $agent_id = $request->input('id');
        $clients = Client::all()->where('agent_id','LIKE', $agent_id);
        $may = 0;
        $june = 0;
        $july = 0;

        foreach ($clients as $client) {

            if (Carbon::parse($client->date)->month == 5  ) {
                ++$may;
            } else if (Carbon::parse($client->date)->month == 6) {
                ++$june;
            }
        }
        $data = ['may' => $may, 'june' => $june];
        if (count($clients)>0)
        {
            return response(array(
                'Message' => 'records retrieved successful',
                'status' => 'success',
                'clients' =>$data,
            ),200);
        }
        else{
            return response(array(
                "Message" => "Authentication failed, details provided are invalid",
                'status' => 'fail'
            ));

        }
        //TODO#59B8E8
        //TODO#002F56
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
