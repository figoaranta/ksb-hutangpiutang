<?php

namespace App\Http\Controllers;
use App\Hutang;
use Illuminate\Http\Request;

class HutangController extends Controller
{
    public function index()
    {
    	return Hutang::all();
    }
    public function show(Hutang $hutang)
    {
    	return $hutang;
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'pembeli'=>'required',
    		'alamat'=>'required',
    		'total'=>'required'
    	]);

    	$hutang = Hutang::create($request->all());
    	return $hutang;
    }
    public function update(Request $request, Hutang $hutang)
    {
    	$hutang->update($request->all());
    	return $hutang;
    }
    public function destroy(Hutang $hutang)
    {
    	$hutang->delete();
    	return response()->json(["Data has been deleted."]);
    }
}
