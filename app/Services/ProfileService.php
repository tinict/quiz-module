<?php

namespace App\Services;

use App\Models\Profile;

class ProfileService
{
    public function create () {

    }

    public function update() {

    }

    public function delete() {

    }

    public function get() {
        return $profile = Profile::where('lastname', 'D')
                    ->get();
    }
}
