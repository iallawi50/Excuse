<?php

namespace App\Http\Controllers;

use App\Models\Excuse;
use Illuminate\Http\Request;

class ExcuseController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $excuses = Excuse::all();
        return view("excuse.index", compact('excuses'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view("excuse.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'stdID' => 'required',
            'date' => 'required',
            'details' => 'required'
        ]);
        $data['by'] = auth()->user()->name;
        Excuse::create($data);
        return redirect("/excuse");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Excuse  $excuse
     * @return \Illuminate\Http\Response
     */
    public function show(Excuse $excuse)
    {
        return view("excuse.show", compact("excuse"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Excuse  $excuse
     * @return \Illuminate\Http\Response
     */
    public function edit(Excuse $excuse)
    {
        return view("excuse.edit", compact("excuse"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Excuse  $excuse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Excuse $excuse)
    {
        $data = request()->validate([
            'name' => 'required',
            'stdID' => 'required',
            'date' => 'required',
            'details' => 'required'
        ]);
        $data['by'] = auth()->user()->name;
        $excuse->update($data);
        return redirect('../excuse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Excuse  $excuse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Excuse $excuse)
    {
        $excuse->delete();
        return redirect("/excuse");
    }
}
