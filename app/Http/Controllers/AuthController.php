<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
  public function register(Request $request)
  {
    $user = new User([
      'username' => $request->username,
      'password' => bcrypt($request->password)
    ]);

    $user->save();

    return response()->json([
      'status' => 'success',
    ]);
  }

  public function login(Request $request)
  {
    $credentials = request(['username', 'password']);

    if (!Auth::attempt($credentials)) {
      return response()->json([
        'success' => false,
        'message' => 'Unauthorized'
      ], 401);
    }

    $user = $request->user();
    $tokenResult = $user->createToken('Personal Access Token');
    $token = $tokenResult->token;

    $token->save();

    return response()->json([
      'success' => true,
      'token_type' => 'Bearer',
      'token' => $tokenResult->accessToken,
      'expires_at' => Carbon::parse(
        $tokenResult->token->expires_at
      )->toDateTimeString()

    ]);
  }

  public function logout(Request $request)
  {
    $request->user()->token()->revoke();
    return response()->json([
      'success' => true,
    ]);
  }
}
