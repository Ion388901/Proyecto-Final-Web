<?php

namespace App\Http\Controllers\Npanel;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController {
    public function index(Request $req) {
        return view('npanel.dashboard.index');
    }
}