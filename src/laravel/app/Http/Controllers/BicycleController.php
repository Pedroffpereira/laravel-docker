<?php

namespace App\Http\Controllers;

use App\Bicycle;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bicycles = Bicycle::with('user')->get();
        return view('bicycle.list', ['bicycles' => $bicycles]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('bicycle.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            Bicycle::$validate
        );
        Bicycle::create($request->all());
        return redirect('bicycles')->with('status', 'Item added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bicycle  $Bicycle
     * @return \Illuminate\Http\Response
     */
    public function show(Bicycle $bicycle)
    {

        return view('bicycle.show', ['bicycle' => $bicycle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bicycle  $Bicycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Bicycle $bicycle)
    {

        return view('bicycle.edit', ['bicycle' => $bicycle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bicycle  $Bicycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bicycle $Bicycle)
    {
        $this->validate(
            $request,
            Bicycle::$validate
        );
        $Bicycle->update($request->all());
        return redirect('bicycles')->with('status', 'Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bicycle  $Bicycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bicycle $bicycle)
    {

        $bicycle->delete($bicycle);
        return redirect('bicycles')->with('status', 'Item deleted successfully!');
    }
}
