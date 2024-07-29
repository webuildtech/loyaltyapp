namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftCard;
use Illuminate\Support\Facades\Auth;

class RestaurantWorkerController extends Controller
{
    public function scanQRCode(Request $request)
    {
        // Implement QR code scanning and processing
    }

    public function useGiftCardFull($Understood. Let's continue with the implementation of the restaurant worker functionalities and other remaining parts.

### 5. Restaurant Worker QR Code Scanning and Gift Card Usage

#### Controller
- **File Path:** `app/Http/Controllers/RestaurantWorkerController.php`
```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftCard;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RestaurantWorkerController extends Controller
{
    public function scanQRCode(Request $request)
    {
        // Implement QR code scanning and processing
    }

    public function useGiftCardFull($id)
    {
        $giftCard = GiftCard::findOrFail($id);
        $giftCard->remaining_value = 0;
        $giftCard->save();

        // Log the transaction
        Log::info('Gift Card used in full', [
            'worker_id' => Auth::id(),
            'customer_id' => $giftCard->user_id,
            'amount_used' => $giftCard->value,
            'remaining_value' => $giftCard->remaining_value,
        ]);

        return back()->with('success', 'Gift Card used in full.');
    }

    public function useGiftCardPart(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $giftCard = GiftCard::findOrFail($id);
        $amountUsed = $request->amount;

        if ($amountUsed > $giftCard->remaining_value) {
            return back()->withErrors(['amount' => 'Amount exceeds remaining value']);
        }

        $giftCard->remaining_value -= $amountUsed;
        $giftCard->save();

        // Log the transaction
        Log::info('Gift Card used in part', [
            'worker_id' => Auth::id(),
            'customer_id' => $giftCard->user_id,
            'amount_used' => $amountUsed,
            'remaining_value' => $giftCard->remaining_value,
        ]);

        return back()->with('success', 'Gift Card used in part.');
    }
}
