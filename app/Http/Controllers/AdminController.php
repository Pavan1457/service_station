<?php

namespace App\Http\Controllers;
use App\Models\Bookings;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use App\Models\User;



class AdminController extends Controller
{
    public function index()
    {
        $book = Bookings::all();
        $user = User::all();
        $plans = AdminModel::all();
        return view('Admin_Dash', compact('plans','user','book'));
    }


    
    public function edit($id)
    {
        $users = User::find($id);
        return view('edit',compact('users'));
    }



    public function update(Request $request,$id){

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->number = $request->input('number');
        $users->update();

        return redirect('Admin_Dash');
    }

    Public function remove($id){

        $users = User::find($id);
        $users->delete();

        return redirect('Admin_Dash ');
    }

    public function delete($id){

        $books = Bookings::find($id);
        $books->delete();

        return redirect('Admin_Dash');
    }
}
