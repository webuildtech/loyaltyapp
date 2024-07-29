namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\GiftCard;
use App\Models\LoyaltyProgram;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard() {
        $totalRestaurants = Restaurant::count();
        $totalGiftCards = GiftCard::count();
        $totalLoyaltyPrograms = LoyaltyProgram::count();
        return view('dashboard.super_admin', compact('totalRestaurants', 'totalGiftCards', 'totalLoyaltyPrograms'));
    }
}
