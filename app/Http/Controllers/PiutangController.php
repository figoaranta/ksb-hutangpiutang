<?php

namespace App\Http\Controllers;
use App\Piutang;
use Illuminate\Http\Request;

class PiutangController extends Controller
{
    public function index()
    {
    	return Piutang::all();
    }
    public function show(Piutang $piutang)
    {
    	return $piutang;
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'pembeli'=>'required',
    		'alamat'=>'required',
    		'total'=>'required'
    	]);

    	$piutang = Piutang::create($request->all());
    	return $piutang
    }
    public function update(Request $request, Piutang $piutang)
    {
    	$piutang->update($request->all());
    	return $piutang;
    }
    public function destroy(Piutang $piutang)
    {
    	$piutang->delete();
    	return response()->json(["Data has been deleted."])
    }
}
