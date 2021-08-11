<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit items') }}
            <a href="{{ URL::to('items') }}" ><h3>View All Items</h3></a>
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               
                        
                        <form action="{!! route('items.update', $item->id) !!}" method="POST" 
                          enctype="multipart/form-data" class="p-3 flex flex-col space-y-5" >

                            @csrf
                            @method('PUT')
                            <h5>{{$item->name}}</h5>
                             
                          <input type="text"    name="name"     value="{{ old('name',$item->name) }}"     class="p-2 w-3/4bg-gray-100" />
                          <input type="text"    name="author"   value="{{ old('author',$item->author) }}"   class="p-2 bg-gray-100" />
                          <input type="text"    name="genre"    value="{{ old('genre',$item->genre )}}"    class="p-2 bg-gray-100" />
                          <input type="number"  name="cost"     value="{{ old('cost',$item->cost) }}"    class="p-2 bg-gray-100" />
                          <input type="number"  name="price"    value="{{ old('price',$item->price )}}"    class="p-2 bg-gray-100" />
                          <input type="number"  name="stock"    value="{{ old('stock',$item->stock)}}"     class="p-2 bg-gray-100" />
                          <textarea             name="synopsis" value="{{ old('synopsis',$item->synopsis)}}" class="resize-y border rounded-md"> 
                        </textarea>
                          
                          <img class=" md:object-scale-down object-scale-down h-48 w-full " 
                            src="{{ asset('pic/'. $item->pic)}}" />
                          <input type="file" name="pic" class="p-2 bg-gray-100" />

                          <button type="submit" class="p-2 bg-gray-100 rounded">Update</button>

                        </form>
                      </div>
                    </div>
                </div> 
                </div>
            </div>
        </div>
    </div>



    
</x-app-layout>