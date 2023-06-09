<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\User;
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

        return redirect()->back()->with('message', 'تم تحديث التبرع بنجاح.');
    }
    
}
