<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employe = Employee::latest()->paginate(5);
        return view('employe.index', compact('employe'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Birthday' => 'required',
            'notelp' => 'required',
            'Kota' => 'required',
            'Umur' => 'required',
            'Gelar' => 'required',
            'Email' => 'required',
            'Profesi' => 'required',
            'Keterangan' => 'required',
        ]);
        Employee::create($request->all());

        return redirect()->route('employe.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employe)
    {
        return view('employe.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employe)
    {
        return view('employe.show', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employe)
    {
        $request->validate([
            'Nama' => 'required',
            'Birthday' => 'required',
            'notelp' => 'required',
            'Kota' => 'required',
            'Umur' => 'required',
            'Gelar' => 'required',
            'Email' => 'required',
            'Profesi' => 'required',
            'Keterangan' => 'required',
        ]);
        $employe::update($request->all());

        return redirect()->route('employe.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employe)
    {
        $employe->delete();

        return redirect()->route('employe.index')->with('succes', 'employee berhasil di input');
    }
}
