<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use App\Models\Export;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard/users.index')->with('userdata',User::get())->with('emp',Employee::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/users.create')->with('departments',Department::get());
        
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
            // 'role'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
            'name_department'=>'required',
            ]);
            // dd($request);
            $user=User::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password' => Hash::make($request->input('password')),           
            ]);            
            $emp=Employee::create([
                'department_id'=>$request->input('name_department'),
                'user_id'=>$user->id,
                'salary'=>$request->input('total_salary'),
                'password' => Hash::make($request->input('password')),           
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
        $data = [
            'userdata' => User::where('id', $id)->first(),
            'employeedata'=>Employee::where('user_id',$id)->first(),
        ];
        
        return view('dashboard/users.edit', $data)->with('departments',Department::all());
        // return view('dashboard/users.edit')->with('userdata',User::where('id',$id)->first());
        // return view('dashboard/users.edit')->with('exportdata',Export::where('id',$id)->first());
        // return view('dashboard/users.edit')->with('depdata',Department::where('id',$id)->first());
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
            'email'=>'required',
            'total_salary'=>'required',
            ]);
            // dd($request);
            User::where('id',$id)->update([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'), 
            ]);
            // $isActive=$request->input('name_dep')=='تطوع'?2:1;
            // Department::where('id',$id)->update([
            //     'id_dep'=>$isActive,
            //     'name_dep'=>$request->input('name_dep'),
            // ]);
            Employee::where('user_id',$id)->update([
                'salary'=>$request->input('total_salary'),
                'department_id'=>$request->input('name_department'),
                
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
        
        Employee::where('user_id',$id)->delete();
        User::where('id',$id)->delete();
        return redirect('/dashboard/users')->with('message','تم الحذف بنجاح');
        //
    }
}
