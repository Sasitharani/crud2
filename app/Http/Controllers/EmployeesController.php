<?php

namespace App\Http\Controllers;

use App\Models\emp;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
  
    public function view()
    {
        $viewEmployee= emp::all();
        return view('add',compact('viewEmployee'));
    }
    public function view2()
    {
        $viewEmployee= emp::all();
        return view('add',compact('viewEmployee'));
    }

   
    public function add(Request $request)
    {
        $viewEmployee= emp::all();
        return view('add',compact('viewEmployee'));
        
    }

   
    public function addToDb(Request $request)
    {
        //return("Submited");
       
       
       
        $name= $request->input('name');
        $no=$request->input('no');
        echo $name;

        $employee = new emp;
        $employee->name= $request->input('name');
        $employee->eno=$request->input('no');
        $employee->save();

        $viewEmployee= emp::all();
        return view('add',compact('name','no','viewEmployee'));

    }

   
    public function update(Request $request,$id)
    {
        $employee= Emp::find($id);

        if($employee){

            $employee->name = $request->input('name');
            $employee->eno = $request->input('no');
            $employee->save();
            return redirect()->route('view');
        }
        else
        {
            return ('EMployee record not found');
        }

    }

  
    public function edit()
    {
      return ("we will edit later");
    }

    
   

    
    public function destroy($id)
    {
        $emp = Emp::find($id);
        if($emp){
            $emp->delete();
            return redirect()->route('view');
        }
        else
        {
            return ('Record not found');
        }
       
    }
}
