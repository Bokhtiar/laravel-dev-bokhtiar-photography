<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use Illuminate\Http\Request;

class HireController extends Controller
{
    public function store($property_id, $user_id, $photographer_id){
        Hire::create([
        'price_id' => $property_id,
        'photographer_id' => $photographer_id,
        'user_id' => $user_id,
        ]);
        return redirect()->route('home');
    }
}