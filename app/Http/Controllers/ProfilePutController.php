<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfilePutController extends Controller
{
    public function store (Request $req, $id) {
        $profile = Profile::find($id);

        $profile->firstname = "Le Hoang";
        $profile->lastname = "Kim";

        $profile->save();
        
        return response()->json($profile, 200);
    }
}
