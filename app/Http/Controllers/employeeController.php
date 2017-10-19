<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class employeeController extends Controller
{
    // function adddata ()
    // {
    //     // return view('page.createemployee');
    //     $listemployee= DB::select('select * from employee'); 
    //     return view('page.createemployee', ["data" => $listemployee]);

    // }

    // function gettdata ()
    // {
    //     $listemployee= DB::select('select * from employee'); 


    //     return view('page.employeelist', ["data" => $listemployee]);
    // }

    // // DB::insert('insert into todo (description) values (?)',[$mytodo]);
    // // return redirect('/ToDo');
    // function addemployee (Request $_request) 
    //     {   $myName = $_request->myName;
    //         $myAdress = $_request->myAdress;
    //         $myEmail = $_request->myEmail;
    //          DB::insert('insert into employee (Name,Adress,Email,Action) values (?,?,?)',[$myName,$myAdress,$myEmail,false]);
    //         return redirect('/employeelist');
    //     }
    function GetEmployee()
    {   $employeelist = DB::select('select * from employee  where Action = 0'); 
        return view('page.employeelist', ["employees" => $employeelist]);
    }
    function CreateEmployee()
    {
        return view('page.createemployee');
    }
    function SaveEmployee(Request $_request)
    {
        $myName = $_request->myName;
        $myAdress = $_request->myAdress;
        $myEmail = $_request->myEmail;
        DB::insert('insert into employee (Name,Adress,Email,Action) values (?,?,?,?)',[$myName,$myAdress,$myEmail,0]);

        return redirect('/');
    }
    
    function DeleteEmployee(Request $_request)
    {
        $id = $_request->id;
        DB::update('update employee set Action = 1 where id = ?', [$id]);
        return redirect ('/');
    }
}
