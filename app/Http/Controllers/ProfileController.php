<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        return view('pages.profile');
    }
    
    public function editProfile() {
        return view('pages.edit_profile');
    }

    public function gantiPassword() {
        return view('pages.ganti_password');
    }
}
