<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bookings;

class Dashboard_Controller extends Controller
{
   public function index()
   {
      return view('dashboard');
   }

   public function process_index(){
      return view('sucesspage');
   }

   public function store(Request $request)
   {
      $request->validate(
         [
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'model' => 'required',
            'regno' => 'required',
            'description' => 'required',
         ]
      );

      $book = new Bookings;
      $book->name = $request->input('name');
      $book->number = $request->input('number');
      $book->email = $request->input('email');
      $book->model = $request->input('model');
      $book->regno = $request->input('regno');
      $book->description = $request->input('description');
      $book->save();

      return redirect('sucesspage');
   }
}
