<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiddingController extends Controller
{
    public function bidding()
    {
    	return view('bidding_auction');
    }
}
