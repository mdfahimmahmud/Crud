<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function show_data()
    {

        $showdata=Crud::simplePaginate(5);


        return view('show_data',compact('showdata'));
    }

    public function add_data()
    {


        return view('add_data');
    }
    public function store_data(Request $request)
    {


        $rules = [
            'name' => 'required|max:10',
            'email' => 'required|email',
        ];
        $this->validate($request, $rules);


        $crud= new Crud();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->phone=$request->phone;
        $crud->address=$request->address;

        $crud->save();

        return redirect('/')->with('msg','Data Successfully Added');

    }

    public function editdata($id=null){

        $editdata= Crud::find($id);



        return view('edit_data',compact('editdata'));
    }



    public function updatedata(Request $request,$id)
    {


        $rules = [
            'name' => 'required|max:10',
            'email' => 'required|email',
        ];
        $this->validate($request, $rules);


        $crud= Crud::find();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->phone=$request->phone;
        $crud->address=$request->address;

        $crud->save();

        return redirect('/')->with('msg','Data Successfully Updateed');

    }

    public function deletedata(Request $request,$id){


        $deletedata=Crud::find($id);
        $deletedata->delete();

        return redirect('/')->with('msg','Data Successfully Deleted');


    }




    
}
