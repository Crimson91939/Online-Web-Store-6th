<?php

namespace App\Http\Controllers;

use App\Models\items;
use Redirect;
use Session;
use Illuminate\Http\Request ; 
use Illuminate\Support\Facades\Validator;
use App\Middleware\access;




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
                    'update'

                ]
            ]);
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {           
            $items = items::latest()->paginate(8);
            return view('shop.home',compact('items'));
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
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'author'       => 'required',
            'cost'       => 'required',
            'price'       => 'required',
            'stock'       => 'required',
            'genre'       => 'required',
            'synopsis'       => 'required',
            'pic'=>'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('items/create')
                        ->withErrors($validator);
        
         } else {

            $newImageName= time() . '-' . $request->name . '.' . $request->pic->extension();
            $request->pic->move(public_path('pic'),$newImageName);
            // store
            $items = new items;
            $items->name      = $request->get('name');
            $items->author    = $request->get('author');
            $items->cost      = $request->get('cost');
            $items->price     = $request->get('price');
            $items->stock     = $request->get('stock');
            $items->genre     = $request->get('genre');
            $items->synopsis  = $request->get('synopsis');
            $items->pic     = $newImageName;
            $items->save();

            // redirect
            Session::flash('message', 'Succesfully added item!');
            return Redirect::to('items');
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
      
        $item = items::find($id);
        if($item->stock<=0)
        {
            $stock="Unavailable currently";
        }
        elseif($item->stock > 0)
        {
            $stock="Available";   
        }
        
        // show the view and pass the item to it
        return View('shop.show')
            ->with('item', $item)
            ->with('stock', $stock);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= items::find($id);

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
    
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'author'       => 'required',
            'cost'       => 'required',
            'price'       => 'required',
            'stock'       => 'required',
            'genre'       => 'required',
            'synopsis'       => 'required',
            'pic'=>'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('items/edit',$items->id)
                        ->withErrors($validator);
        
         } else {

            $newImageName= time() . '-' . $request->name . '.' . $request->pic->extension();
            $request->pic->move(public_path('pic'),$newImageName);
            // store
            $items = items::find($id);
            $items->name      = $request->get('name');
            $items->author    = $request->get('author');
            $items->cost      = $request->get('cost');
            $items->price     = $request->get('price');
            $items->stock     = $request->get('stock');
            $items->genre     = $request->get('genre');
            $items->synopsis  = $request->get('synopsis');
            $items->pic     = $newImageName;
            $items->save();

            // redirect
            Session::flash('message', 'Succesfully added item!');
            return Redirect::to('items');
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
 
         // redirect
         Session::flash('message', 'Successfully deleted the item!');
         return Redirect::to('items');
    }
    


}
