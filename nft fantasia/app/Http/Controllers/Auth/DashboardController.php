<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Redirect;
use App\Models\items;
use App\Models\payment;


class DashboardController extends Controller
{
    public function index(){
        
        if(Auth::user()->hasRole('user')){

            $useid=auth::user()->id;                    //get user id

            $az = DB::table('payments')               //get all bought item id from user
                ->where('buyerid', $useid)
                ->pluck( 'itemid' );
 
          $datas=items::find($az);   
        return view('user/UserDashboard',compact('datas'));
            
            
        }
        elseif(Auth::user()->hasRole('admin')){

            $sum = payment::sum('profit');
            $count=payment::count('id');
            $costo=payment::sum('costo');
            $made=payment::sum('made');
            
            $mem=user::count('id');
            $members=$mem-1;

            $nft=items::count('id');
            return view('admin/Dashboard',compact('sum','count','made','members','nft'));
        }
    }  

    // public function index(){
     
    // } 
    //admin 
    public function Shop(){
        return view('shop/home');
    } 

    //users
    public function myprofile(){
        return view('user/myprofile');
    } 


  

    

}
