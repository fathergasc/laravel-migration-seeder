<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::whereDate('departure_time', '>=', date('Y-m-d'))->get();

        return view('homepage', ['trains' => $trains]);
    }
}
