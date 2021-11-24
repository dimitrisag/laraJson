<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public static function toJson() {
        $users = Test::all();
        return $users->toJson();
    }
}
