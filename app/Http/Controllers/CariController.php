<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\cari;

class CariController extends Controller
{
    public function search(Request $request) {
    	$query = $request->get('q');
    	$hasil = cari::where('nama', 'LIKE', '%' . $query . '%')->get();
    	return view('pages.result', compact('hasil', 'query'));
    }
}
