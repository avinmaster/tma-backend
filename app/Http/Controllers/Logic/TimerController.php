<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    public function all() {
        $timers = DB::table('timers')->get();

        return $timers;
    }

    public function new(Request $request) {
        $timers = DB::table('timers')->get();
    }
}
