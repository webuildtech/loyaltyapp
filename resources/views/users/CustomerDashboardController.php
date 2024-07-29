<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\GiftCard;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $giftCards = GiftCard::where('user_id', $user->id)->get();

        return view('customer.home', compact('user', 'giftCards'));
    }
}
