<?php
namespace App\Aslam\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService{

    public function getUserData()
    {

    }
    public function storeUserData($request)
    {
      $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->role_id),
                'uuid' => Str::uuid(),
                'device_token' => $data['device_token'] ?? null,
                'utype'=>'USR' // Store the device token as UUI
     ]);
      return $this;
    }
    public function editUserData($user)
    {

    }
}
