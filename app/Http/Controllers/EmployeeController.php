<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use App\Models\Export;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/users.index')->with('userdata',Employee::get());
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
            'role'=>'required',
            'email'=>'required',
            'password'=>'required',
            'name_departments'=>'required',
            ]);
            // dd($request);

            $employee=Employee::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'role'=>$request->input('role'),
                'password' => Hash::make($request->input('password')),
                'department_id'=>$request->input('name_department'),
            ]);
            // $isActive=$request->input('name_dep')=='تطوع'?2:1;
            // $department=Department::create([
            //     // 'id_dep'=>$isActive,
            //     'department_id'=>$request->input('name_department'),
            //     'user_id'=>$employee->id,
            // ]);
            // $export=Export::create([
            //     'total_salary'=>$request->input('total_salary'),
            //     'user_id'=>$user->id,
            // ]);
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
        //
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
            'userdata' => Employee::where('id', $id)->first(),
            'exportdata'=>Export::where('user_id',$id)->first(),
            'depdata'=>Department::where('id',$id)->first(),
        ];
        
        return view('dashboard/users.edit', $data);
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
            'total_salary'=>'required',
            ]);
            

            Employee::where('id',$id)->update([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'role'=>$request->input('role'),  
            ]);
            Export::where('user_id',$id)->update([
                'total_salary'=>$request->input('total_salary'),
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
        Department::where('user_id',$id)->delete();
        Export::where('user_id',$id)->delete();
        User::where('id',$id)->delete();
        return redirect('/dashboard/users')->with('message','تم الحذف بنجاح');
    }
}
