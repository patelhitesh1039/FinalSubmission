<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function employee_list(){
        return Employee::all();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function employee_add(Request $request)
    {
        $insert = [
            'name' => $request->name,
            'email'=> $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        $add_emp = Employee::create($insert);
        if($add_emp){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Record created succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record created failed!'
            ];
            return $response;
        }
         
    }

    /**
     * Display the specified resource.
     */
    function employee_view(Request $request){
        return Employee::find($request->id);
    } 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    function employee_edit(Request $request){
        $update = [
            'name' => $request->name,
            'email'=> $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        $edit = Employee::where('id', $request->employee_id)->update($update);
        if($edit){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Record updated succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record updated failed!'
            ];
            return $response;
        }
    } 

    /**
     * Remove the specified resource from storage.
     */
    function employee_delete(Request $request){
        $delete =  Employee::destroy($request->id);
        if($delete){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Record deleted succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record deleted failed!'
            ];
            return $response;
        }
    } 
}
