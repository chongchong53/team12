<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('vendors.index')->with(['vendors'=>$vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor = $request ->input('vendor');
        $country = $request ->input('country');
        $founded_time = $request ->input('founded_time');
        Vendor ::create(
            [
                'vendor' => $vendor,
                'country' => $country,
                'founded_time' => $founded_time,
            ]
        );
        return redirect('vendors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor= Vendor::findOrFail($id);
        return view('vendors.show')->with(['vendor'=>$vendor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('vendors.edit')->with(['vendor'=>$vendor]);
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
        $vendor = Vendor::findOrFail($id);

        $vendor->vendor = $request->input('vendor');
        $vendor->country = $request->input('country');
        $vendor->founded_time = $request->input('founded_time');
        $vendor->save();

        return redirect('vendors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();
        return redirect('vendors');
    }
    public function italy()
    {
        $vendors = Vendor::country('?????????')->get();
        return view('vendors.index', ['vendors'=>$vendors]);
    }
    public function uk()
    {
        $vendors = Vendor::country('??????')->get();
        return view('vendors.index', ['vendors'=>$vendors]);
    }
    public function germany()
    {
        $vendors = Vendor::country('??????')->get();
        return view('vendors.index', ['vendors'=>$vendors]);
    }
    public function usa()
    {
        $vendors = Vendor::country('??????')->get();
        return view('vendors.index', ['vendors'=>$vendors]);
    }
    public function japan()
    {
        $vendors = Vendor::country('??????')->get();
        return view('vendors.index', ['vendors'=>$vendors]);
    }
    public function api_vendors()
    {
        return Vendor::all();
    }

    public function api_update(Request $request)
    {
        $vendor = Vendor::find($request->input('id'));
        if ($vendor == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $vendor->vendor = $request->input('vendor');
        $vendor->country = $request->input('country');
        $vendor->founded_time = $request->input('founded_time');
        if ($vendor->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $vendor = Vendor::find($request->input('id'));

        if ($vendor == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($vendor->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
}
