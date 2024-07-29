<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\GiftCard;
use App\Models\Restaurant;

class QrCodeController extends Controller
{
    public function create()
    {
        $users = User::all();
        $restaurants = Restaurant::all();
        return view('qrcode.create', compact('users', 'restaurants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'restaurant_id' => 'required|exists:restaurants,id',
            'balance' => 'required|numeric|min:0',
            'expiry_date' => 'required|date'
        ]);

        GiftCard::create([
            'user_id' => $request->user_id,
            'restaurant_id' => $request->restaurant_id,
            'balance' => $request->balance,
            'expiry_date' => $request->expiry_date,
        ]);

        return redirect()->route('qrcode.index')->with('success', 'Gift card created successfully.');
    }

    public function index()
    {
        $giftCards = GiftCard::all();
        return view('qrcode.index', compact('giftCards'));
    }
}
