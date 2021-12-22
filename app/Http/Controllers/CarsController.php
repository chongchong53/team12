<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all()->sortBy('vid',SORT_REGULAR,false);
        return view('cars.index')->with(['cars'=>$cars ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $car = $request ->input('car');
      $vid = $request ->input('vid');
      $selling_price = $request ->input('selling_price');
      $displacement = $request ->input('displacement');
      $energy_consumption = $request ->input('energy_consumption');
      Car ::create(
          [
              'car' => $car,
              'vid' => $vid,
              'selling_price' => $selling_price,
              'displacement' => $displacement,
              'energy_consumption' => $energy_consumption
          ]
      );
      return redirect('cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show')->with(['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit')->with(['car'=>$car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $car->car = $request->input('car');
        $car->vid = $request->input('vid');
        $car->selling_price = $request->input('selling_price');
        $car->displacement = $request->input('displacement');
        $car->energy_consumption = $request->input('energy_consumption');
        $car->save();

        return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect('cars');
    }
    public function senior()
    {
        $cars = Car::senior()->get();
        return view('cars.index', ['cars' => $cars]);
    }
}
