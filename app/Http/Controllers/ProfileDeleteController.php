<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileDeleteController extends Controller
{
    public function store ($id) {
        Profile::find($id)
            ->delete();

        return response()->json('Sucess', 200);
    }
}
