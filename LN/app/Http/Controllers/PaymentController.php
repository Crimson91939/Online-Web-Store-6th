<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Redirect;
use App\Models\items;
use App\Models\payment;


class PaymentController extends Controller
{
    public function BUY($id)
    {
        $buyer= auth::user()->id;       //getting user id of buyer
        $item = items::find($id);       //getting item from db as object
        $costo=$item->cost;
        $made=$item->price;
        $profit= $item->price -$item->cost;
        
        if ($item->stock != 0) {
            DB::insert('insert into payments (buyerid, itemid, profit,made,costo) values (?,?,?,?,?)', [$buyer, $id, $profit, $made,$costo ]); //data insert
            $cur_stock      =   $item->stock;
            $new_stock      =   $cur_stock - 1;
            $item->stock   =   $new_stock;
            $item->save();
    
            return Redirect::to('dashboard'); 
            
        } 
        else {
            return Redirect::back();
        }

 
    }

}
