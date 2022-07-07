<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alluser;

class UserController extends Controller
{
    public function UserView(){
       
        // $allData = User::all();
    
        $data['allData']= Alluser::all();
        return view('backend.user.view_user', $data);
    }


    public function UserAdd(){   

        return view('backend.user.add_user');    
    }

    public function UserStore(Request $request){

            $validateData = $request->validate([
                'empid'=> 'required|unique:allusers',
                'name'=> 'required',
            ]);

            $data = new Alluser();
            $data->empid = $request->emp_id ;
            $data->username = $request->fname;
            $data->password = $request->password;
            $data->usertype = $request->usertype;
            $data->status = $request->status;
            $data->place = $request->place;
            $data->save();

            return redirect()-> route('user.view'); 

    }
}

