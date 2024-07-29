<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\GiftCard;
use App\Models\LoyaltyProgram;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRestaurants = Restaurant::count();
        $totalGiftCards = GiftCard::count();
        $totalLoyaltyPrograms = LoyaltyProgram::count();

        return view('dashboard.index', compact('totalRestaurants', 'totalGiftCards', 'totalLoyaltyPrograms'));
    }
}
