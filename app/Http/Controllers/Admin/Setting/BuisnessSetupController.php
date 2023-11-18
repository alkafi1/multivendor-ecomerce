<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuisnessSetupController extends Controller
{
    public function buisness_setup()
    {
        return view('Admin.Setting.BuisnessSetup.index');
    }
}
