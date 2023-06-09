<?php

namespace App\Http\Controllers\TeacherPOV;

use App\Models\Classe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Classes = Classe::all();
    return view('teacher.List.Classes', compact('Classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('teacher.Add.AddClass');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->input('name');
        Classe::create([
            'NameClass'=>$name
        ]);
            return redirect('/Classes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $class=Classe::find($id);
         if ($class) {
            $class->delete();
             return redirect('/Classes')->with('success', 'Class deleted successfully');
         }
        else {
            return redirect('/Classes')->with('error', 'Class not found');
        }
    }
    public function Manage()
    {
        return view('teacher.Manage.ManageClasses');
    }
}
