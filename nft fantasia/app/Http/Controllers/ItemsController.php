<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;

class ItemsController extends Controller
{

    public function __construct()
    {
        // Middleware only applied to these methods
        $this->middleware('access', [
            'only' => [
                'create',
                'store', // Could add bunch of more methods too
                'destroy',
                'edit',
                'update',

            ],
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = items::where('status','available')->latest()->paginate(8);
        return view('shop.home', compact('items'));
    }

    public function billboard()
    {
        $items = items::where('status','sold')->latest()->paginate(8);
        return view('shop.home', compact('items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return View('shop.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'author' => 'required',
                'cost' => 'required',
                'price' => 'required',
                'genre' => 'required',
                'synopsis' => 'required',
                'pic' => 'required|image|mimes:jpeg,png,jpg',
            ]);
    
            if ($validator->fails()) {
                return redirect('items/create')
                    ->withErrors($validator);
    
            } else {
    
                $newImageName = time() . '-' . $request->name . '.' . $request->pic->extension();
                $request->pic->move(public_path('pic'), $newImageName);
                // store
                items::create(
                    [
                        'name' => $request->name,
                        'author' => $request->author,
                        'cost' => $request->cost,
                        'price' => $request->price,
                        'stock' => 10,
                        'genre' => $request->genre,
                        'synopsis' => $request->synopsis,
                        'pic' => $newImageName,
                    ]
                );  
                // redirect
                return redirect()->route('items.index')->with('success', 'Item added successfully.');
            }
        } catch (\Exception $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = items::findorfail($id);
        if ($item->stock == 0) {
            return redirect()->back()->with('error', 'Item is out of stock');
        } else {
            //check if user is owner of the item
            $user = Auth::id();
            $owner = $item->buyerid;
            $is_owner = false;
            if ($user == $owner) {
                $is_owner = true;
            }
            $stock = $item->stock;
            $order = payment::where('itemid', $id)->first();
            return view('shop.show', compact('item', 'is_owner', 'stock','order'));
        }

        // $item = items::find($id);
        // if($item->stock<=0)
        // {
        //     $stock="Unavailable currently";
        // }
        // elseif($item->stock > 0)
        // {
        //     $stock="Available";
        // }

        // // show the view and pass the item to it
        // return View('shop.show')
        //     ->with('item', $item)
        //     ->with('stock', $stock);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = items::find($id);

        // show the edit form and pass the shark
        return View('shop.edit')
            ->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'author' => 'required',
                'cost' => 'required',
                'price' => 'required',
                'genre' => 'required',
                'synopsis' => 'required',
                'pic' => 'image|mimes:jpeg,png,jpg',
            ]);
    
            $item = items::findorfail($id);
            $newImageName = time() . '-' . $request->name . '.' . $request->pic->extension();
            $request->pic->move(public_path('pic'), $newImageName);
            $item->update([
                'name' => $request->name,
                'author' => $request->author,
                'cost' => $request->cost,
                'price' => $request->price,
                'stock' => 10,
                'genre' => $request->genre,
                'synopsis' => $request->synopsis,
                'pic' => $newImageName
            ]);
            return redirect()->route('items.index')->with('success', 'Item updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Item already exists');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // delete
        $item = items::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
        // redirect
    }
    
    public function verify(Request $request){
        try {
            $payment = payment::where('secret_key', $request->key)->first();
            if($payment){
                $item = items::findorfail($payment->itemid);
                if($item){
                    return redirect()->back()->with('success','Congratulations this Item('.$item->name.') is blockChain verified');
                }
                else{
                    return redirect()->back()->with('error','Item not found');
                }
            }
            else{
                return redirect()->back()->with('error','Invalid secret key');
            }
        } catch (\Exception $e) {
            return $e;
        }
    }

}
