<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all()->where('agent_id','LIKE', Auth::User()->id);
        return view('welcome',compact('clients',$clients));
    }
    public function clients()
    {
        $clients = Client::all()->where('agent_id','LIKE', Auth::User()->id);
        return view('clients',compact('clients',$clients));
    }
    public function chart()
    {
        $clients = Client::all()->where('agent_id','LIKE', Auth::User()->id);
        $may = 0;$jan=0;$feb=0;$mar=0;$april=0;
        $june = 0;$july=0;$aug=0;$sept=0;$oct=0;$nov=0;$dec=0;

        foreach ($clients as $client) {


            if (Carbon::parse($client->date)->month == 1  ) {
                ++$jan;
            }  else if (Carbon::parse($client->date)->month == 2) {
                ++$feb;
            }
            else if (Carbon::parse($client->date)->month == 3) {
                ++$mar;
            }
            else if (Carbon::parse($client->date)->month == 4) {
                ++$april;
            }
            else if (Carbon::parse($client->date)->month == 5) {
                ++$may;
            }
            else if (Carbon::parse($client->date)->month == 6) {
                ++$june;
            }
            else if (Carbon::parse($client->date)->month == 7) {
                ++$july;
            }
            else if (Carbon::parse($client->date)->month == 8) {
                ++$aug;
            }
            else if (Carbon::parse($client->date)->month == 9) {
                ++$sept;
            }
            else if (Carbon::parse($client->date)->month == 10) {
                ++$oct;
            }
            else if (Carbon::parse($client->date)->month == 11) {
                ++$nov;
            }
            else if (Carbon::parse($client->date)->month == 12) {
                ++$dec;
            }
        }

        $vehicle  = 0; $personal = 0;$general=0; $health=0;

        foreach ($clients as $client) {

            if ($client->policy_type == 'Vehicle') {
                ++$vehicle;
            } else if ($client->policy_type  == 'Personal Accident') {
                ++$personal;
            }
            else if ($client->policy_type  == 'General') {
                ++$general;
            }
            else if ($client->policy_type  == 'Health Insurance') {
                ++$health;
            }
        }
        //categorize policies per month
        $month1 = 0;
        $month2 = 0;
        $month5 = 0;
        $month6 = 0;
        $v5 = 0;
        $p5 = 0;
        $v6 = 0;
        $p6 = 0;
        $categories = array();
        foreach ($clients as $client) {

            if (Carbon::parse($client->date)->month == 5  ) {


                    if ($client->policy_type == 'Vehicle') {
                        ++$v5;
                    } else if ($client->policy_type  == 'Personal Accident') {
                        ++$p5;

                }

            } else if (Carbon::parse($client->date)->month == 6) {


                    if ($client->policy_type == 'Vehicle') {
                        ++$v6;
                    } else if ($client->policy_type  == 'Personal Accident') {
                        ++$p6;

                }

            }
        }
        $categories = ["may"=>['may'=>$month5,'vehicle' =>$v5, 'personal' =>$p5],"june"=>['june'=>$month6, 'vehicle' =>$v6, 'personal' =>$p6]];

        $policies = ['vehicle' => $vehicle, 'personal' => $personal,'health'=>$health,'general'=>$general];

        $data = ['jan'=>$jan,'feb'=>$feb,'mar'=>$mar,'april'=>$april,'may' => $may, 'june' => $june,
            'july'=>$july,'aug'=>$aug,'sept'=>$sept,'oct'=>$oct,'nov'=>$nov,'dec'=>$dec];

        return view('chart')->with(['info' => ['clientMonthlyRecords' => $data, 'policyTypes' => $policies, 'categories'=>$categories]]);
    }

}
