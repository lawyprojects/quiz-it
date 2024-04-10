<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtilsController extends Controller
{
    /**
     * Generate Session Id
     */
    public static function generateSessionId($table,$prefix = ""){
        $uuid =  bcrypt(uniqid($prefix));
        if(DB::table($table)->where('session_id',$uuid)->exists()){
            return self::generateSessionId($table,$prefix);
        }

        return $uuid;
    }
}
