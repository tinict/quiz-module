<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Respone;
use App\Models\Profile;

class ProfileCreateController extends Controller
{
    public function create (Request $req) {

        $profile = Profile::create(['firstname'=>'Nguyen Van', 'lastname'=>'Tin']);

        return response()->json($req ->firstName);
    }
}
