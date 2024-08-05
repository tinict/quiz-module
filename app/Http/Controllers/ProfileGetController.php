<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Profile;

class ProfileGetController extends Controller
{
    public function store (Request $request) {
        $profile = Profile::where('lastname', 'Tin')
                    ->get();

        return response()->json($profile);
    }
}
