<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alluser;
use App\Models\Attendence;
use Illuminate\Support\Facades\DB;


class AttendanceController extends Controller
{
    public function AttendanceView(){

        $attendance = Attendence::with('employees')->get();
       // dd($attendance);

           $data['allData']= Attendence::orderBy('id','DESC')->get(); 
           return view('backend.user.employee.attendance.attendance_view', $data);

    }

    public function search(Request $request){

        $attendance = Attendence::with('employees')->get();
        $output='';

        $employee= Attendence::where('fname','Like','%' .'$request->search'. '%')->orWhere('emp_id','Like','%' .'$request->search'. '%')->orWhere('status','Like','%' .'$request->search'. '%')->get();
       
        foreach($employee as $employee) {

            $output.=
            '<tr class="intro-x">
                <td class="text-center">' . $employee->emp_id . '</td>

            </tr>';
        }
           
        return response($output);
    }
            
         
    

}
