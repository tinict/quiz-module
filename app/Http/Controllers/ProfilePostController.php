<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfilePostController extends Controller
{
    public function store (Request $req) {
        $profile = Profile::Create([
            'firstname' => $req->firstname,
            'lastname' => $req->lastname
        ]);

        return response()->json($profile);
    }
}
