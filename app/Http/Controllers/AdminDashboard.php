<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\donation;
use App\Models\User;
use App\Models\Payment;


class AdminDashboard extends Controller
{
        public  function index () {

            return view('dashboard.index')->with('campaigns',Campaign::all());
        }   
        public  function dd () {

            return view('dashboard.showCampaign')->with('campaigns',Campaign::all())->with('user',User::all()
            );
        }
        public  function campaign_create () {

            return view('dashboard.create')->with('campaigns',Campaign::all());
        }
        public  function edit ($slug) {
            
            return view('dashboard.edit')->with('campaigns',Campaign::where('slug',$slug)->first());
        
        }

        public function __construct()
        {
            $this->middleware('auth')->only('storeDonation');
        }


        public function storeDonation(Request $request, $slug)
    {

        
        $request->validate([
            'donation' => 'required|numeric',
        ]);

        $campaign = Campaign::where('slug', $slug)->firstOrFail();


        $campaign->donation += $request->input('donation');
        $campaign->save();
        // update donation in DB

        $payment = Payment::where('campaign_id', $campaign->id)->first();
        if ($campaign->donation >= $campaign->goalAmount&&!$payment) {
            $campaign->status = 'مكتمل';
            $campaign->save();
            Payment::create([
                'campaign_id' => $campaign->id,
                'amount' =>$campaign->donation,
                'status' => 'مكتمل'
            ]);
            
        }elseif ($campaign->donation >= $campaign->goalAmount) {
           $pay = Payment::where('campaign_id', $campaign->id)->firstOrFail();
            $pay->amount= $campaign->donation ;
            $pay->save();
        }
        
        
        // add evry donation to DB
        Donation::create([
            'amount' => $request->input('donation'),
            'user_id' => Auth::id(), // Logged in user
            'campaign_id' => $campaign->id



            
        ]);
        return redirect()->back()->with('message', 'شكرا على التبرع');
    }
    
}
