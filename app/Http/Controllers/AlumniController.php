<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\alumni;

class AlumniController extends Controller
{
    public function administrator() {
    
    $alumni_list = alumni::orderBy('tahun', 'desc')->paginate(10);
    $jumlah_alumni = alumni::count();
    return view('administrator.index', compact('alumni_list', 'jumlah_alumni'));
	}
}
