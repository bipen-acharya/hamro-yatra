<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\Payment;
use App\Models\OrderAddress;
use App\Models\Quantity;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\user\ResponseOrderNotification;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        $data['notifications'] = Auth::user()->notifications->count();
        $collections = 0;

        $data['collections'] = $collections;
        return view('service_providers.home', $data);
    }

    public function profile(Request $request)
    {
        return view('service_providers.profile');
    }

    public function profileStore(Request $request)
    {
        $data = $request->all();
        $serviceProvider = User::findOrFail(auth()->user()->id);
        $serviceProvider->update($data);

        if ($request->profile_image) {
            $serviceProvider->clearMediaCollection();
            $serviceProvider->addMediaFromRequest('profile_image')
                ->toMediaCollection();
            $serviceProvider->save();
        }

        return redirect()->route('serviceProvider.profile')->with('success', 'Profile updated successfully.');
    }
}
