<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedSocialController extends Controller
{
    public function Register() {
        return view('Register');
    }
}
