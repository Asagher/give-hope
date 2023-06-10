<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard/users.index')->with('userdata',User::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role'=>'required',
            'email'=>'required',
            'password'=>'required',
            'name_dep'=>'required',
            ]);
            // dd($request);

            $user=User::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'role'=>$request->input('role'),
                'password' => Hash::make($request->input('password')),

                
            ]);
            $isActive=$request->input('name_dep')=='تطوع'?2:1;
            $department=Department::create([
                'id_dep'=>$isActive,
                'name_dep'=>$request->input('name_dep'),
                'user_id'=>$user->id,
            ]);
            // dd($department);
            return redirect('/dashboard/users')->with('message2','تمت الاضافة بنجاح');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard/users.edit')->with('userdata',User::where('id',$id)->first());
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required',
            'role'=>'required',
            'email'=>'required',
            
            ]);
            

            User::where('id',$id)->update([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'role'=>$request->input('role'),
                
            ]);
            return redirect('/dashboard/users')->with('message1','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect('/dashboard/users')->with('message','تم الحذف بنجاح');
        //
    }
}
