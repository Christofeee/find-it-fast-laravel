<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Validator;


class TestController extends Controller
{
    public function test()
    {
        return response()->json([
            'car'=>'car',
            'user'=>'user',
        ],201);
    }
}