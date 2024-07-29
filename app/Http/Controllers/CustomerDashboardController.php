<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $giftCards = $user->giftCards;
        $loyaltyPoints = $user->loyaltyPoints;

        return view('customer.dashboard', compact('giftCards', 'loyaltyPoints'));
    }
}
