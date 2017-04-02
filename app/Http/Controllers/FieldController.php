<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\User;
use App\Field;


class FieldController extends Controller
{
    //
=======

use App\Http\Requests;
use App\Field;

class FieldController extends Controller
{
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
    public function index()
    {
        //
        $fields=Field::all();
        return view('fields.index',compact('fields'));
    }

    public function show($id)
    {
<<<<<<< HEAD

        $field = Field::findOrFail($id);

=======
        $field = Field::findOrFail($id);
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
        return view('fields.show',compact('field'));
    }


    public function create()
    {
<<<<<<< HEAD

        return view('fields.create', compact('fields'));
=======
        return view('fields.create');
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD

        $field= new Field($request->all());
        $field->save();

=======
        $field= new Field($request->all());
        $field->save();
>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
        return redirect('fields');
    }

    public function edit($id)
    {
        $field=Field::find($id);
        return view('fields.edit',compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $field= new Field($request->all());
        $field=Field::find($id);
        $field->update($request->all());
        return redirect('fields');
    }

    public function destroy($id)
    {
        Field::find($id)->delete();
        return redirect('fields');
    }

<<<<<<< HEAD
=======
    // public function stringify($id)
    // {
    //     // $field=Field::where('id', $id)->select('field_id','name','address','city','state','zip','home_phone','cell_phone')->first();
    //     $field = Field::where('id', $id)->select('id','s_number','s_name','s_street','s_city','s_state','s_zip','s_contact','s_email','s_phone')->first();

    //     $field = $field->toArray();
    //     return response()->json($field);
    // }

>>>>>>> 3f49b6cb264037b5f92dbd2c4b5570ec8903b148
}
