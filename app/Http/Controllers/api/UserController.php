<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRegisterApiRequest;
use App\Aslam\Services\UserService;
class UserController extends Controller
{

public function register(UserRegisterApiRequest $request,UserService $userService)
{
    try{
        $request->headers->set('Accept', 'application/json');
        $request->validated();
        $userService->storeUserData($request);
       return  response()->json(['message' => 'User registered successfully!'], 201);
    }catch (\Exception $e)
    {
        return response()->json($e->getMessage(),401);
    }
}
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
    $deviceToken = $request->input('device_token'); // Get the device token

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->device_token !== $deviceToken) { // Compare with device token
            return response()->json(['message' => 'Invalid device token'], 401);
        }
        $token = $user->createToken('MobileApp')->accessToken;
        return response()->json(['token' => $token], 200);
    } else {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
public function logout(Request $request)
{
    $user = Auth::guard('api')->user();

    if ($user) {
        $user->api_token = null;
        $user->save();
    }

    return response()->json(['message' => 'Successfully logged out']);
}

    public function destroy($id)
    {
        //
    }
}
