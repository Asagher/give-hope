<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\donation;
use App\Models\User;
use App\Models\Department;
use App\Models\Export;
use App\Models\Employee;
use App\Models\Payment;

use Barryvdh\DomPDF\Facade as PDF;

class AdminDashboard extends Controller
{
        public  function index () {

            return view('dashboard.index')->with('campaigns',Campaign::all());
        }  
        public  function department () {
            return view('dashboard.department.index')->with('departments',Department::all());
        }

        public  function payment() {
            return view('dashboard.payments')->with('pay',Payment::all())->with('campaign',Campaign::all());
        }
        //export 
        public function exportPdf() {
    
            $payments = Payment::all();
            view()->share('pay',$payments);
            $pdf = \Barryvdh\DomPDF\Facade\PDF::loadView('dashboard/paymentExport')->setOption('isHtml5ParserEnabled', true)
            ->setOption('isRemoteEnabled',true);
            
            return $pdf->download('payments.pdf');
        }
        // destroy department
        public function destroy($id)
    {
        Employee::where('department_id',$id)->delete();
        Department::where('id',$id)->delete();
        
        return redirect('/dashboard/department')->with('message','تم الحذف بنجاح');
        //
    }
    // create department

       public function create_department()
    {
        return view('dashboard/department.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_department(Request $request)
    {
        $request->validate([
            'name' => 'required',
            ]);
            // dd($request);

            $dep=Department::create([
                'name_department'=>$request->input('name'),
                         
            ]);

            
            // dd($department);
            return redirect('/dashboard/department')->with('message2','تمت الاضافة بنجاح');
        
    }



        public  function dd () {

            return view('dashboard.showCampaign')->with('campaigns',Campaign::all())->with('user',User::all());
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
