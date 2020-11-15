<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home(){
        $customer = Todo::all();
       // dd($customer);
        
        return view('home',['todos'=>$customer]);

    }

    public function store(Request $request){

        $customer = new Todo();
        $customer->name = $request->post("name");
        $customer->email_id = $request->post("email_id");
        $customer->phone_no = $request->post("phone_no");
        $customer->save();
        return redirect('/');

    }

    public function edit($id){
    
        $customer = Todo::findOrFail($id);
       // if(!$customer) return abort(404);
        return view('update',compact('customer'));
    }

     public function update(Request $request,$id){

        $validateData = $request->validate([
            'name'=>'required',
            'email_id'=>'required',
            'phone_no' => 'required'
        ]);

       // dd($validateData);

       
        $customer = Todo::findOrFail($id);
        $customer->name = $validateData['name'];
        $customer->email_id = $validateData['email_id'];
        $customer->phone_no = $validateData['phone_no'];
        $customer->save();
        return redirect('/');

   
     
    }

    public function delete($todo){

        $customer = Todo::findOrFail($todo);
        $customer->delete();
        return redirect('/');

    }
    
}
