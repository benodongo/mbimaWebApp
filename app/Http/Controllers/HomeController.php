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
        $may = 0;
        $june = 0;

        foreach ($clients as $client) {

            if (Carbon::parse($client->date)->month == 5  ) {
                ++$may;
            } else if (Carbon::parse($client->date)->month == 6) {
                ++$june;
            }
        }

        $vehicle  = 0; $personal = 0;

        foreach ($clients as $client) {

            if ($client->policy_type == 'Vehicle') {
                ++$vehicle;
            } else if ($client->policy_type  == 'Personal Accident') {
                ++$personal;
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

        $policies = ['vehicle' => $vehicle, 'personal' => $personal];

        $data = ['may' => $may, 'june' => $june];

        return view('chart')->with(['info' => ['clientMonthlyRecords' => $data, 'policyTypes' => $policies, 'categories'=>$categories]]);
    }

}
