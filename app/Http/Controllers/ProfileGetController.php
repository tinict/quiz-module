<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Profile;
use App\Services\ProfileService;

class ProfileGetController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService) {
        $this->profileService = $profileService;
    }

    public function store (Request $request) {
        $profile = $this->profileService->get();

        return response()->json($profile);
    }
}
