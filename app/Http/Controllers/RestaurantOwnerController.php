namespace App\Http\Controllers;

use App\Models\GiftCard;
use App\Models\LoyaltyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantOwnerController extends Controller
{
    public function dashboard() {
        $restaurantId = Auth::user()->restaurant_id;
        $totalGiftCards = GiftCard::where('restaurant_id', $restaurantId)->count();
        $totalLoyaltyPrograms = LoyaltyProgram::where('restaurant_id', $restaurantId)->count();
        return view('dashboard.restaurant_owner', compact('totalGiftCards', 'totalLoyaltyPrograms'));
    }
}
