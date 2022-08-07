<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\payment;
use Illuminate\Support\Facades\Auth;
use Redirect;

class PaymentController extends Controller
{
    public function BUY($id)
    {
        try {
            $buyer = Auth::id();
            $item = items::find($id); //getting item from db as object
            $costo = $item->cost;
            $made = $item->price;
            $profit = $item->price - $item->cost;
            $secret_key = bin2hex(random_bytes(32));
            if ($item->stock != 0) {
                payment::create([
                    'buyerid' => $buyer,
                    'itemid' => $item->id,
                    'profit' => $costo,
                    'made' => $made,
                    'costo' => $profit,
                    'secret_key' => $secret_key,
                ]);
                $item->update([
                    'stock' => $item->stock - 1,
                    'status'=> 'sold',
                ]);
                return redirect()->route('dashboard')->with('success', 'Item bought successfully');
            } else {
                return redirect()->back()->with('error', 'Item is out of stock');
            }
        } catch (\Exception$e) {
            dd($e);
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
