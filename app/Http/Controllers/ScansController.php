<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScansController extends Controller
{
    public function createScan() {
        return redirect()
        ->route('scan-detail',['id' => 1]);
    }
    public function viewScan() {
        return view('scan-detail');
    }
    public function viewAllScans() {
        return view('scan-history');
    }
}
