<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight style="background-color: #58535396"">
            {{ __('Store') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 
                    

                        <nav class="navbar navbar-inverse">
                         
                            <ul class="nav navbar-nav">
                                <li><a href="{{ URL::to('items') }}" class="p-2 bg-red-100 rounded">View All items</a></li>
                            </ul>
                        </nav>
                        

                        <div>
                            <div class="h-screen flex justify-center items-center">
                              <div class="p-5 bg-gray-400 w-3/4 rounded-lg">
                                
                                <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data" class="p-3 flex flex-col space-y-5" >
                             
                                    @csrf
                                    
                                <p class="text-x4">Create New</p>
                                  <input type="text"    name="name"     placeholder="Name" class="p-2 w-3/4bg-gray-100" />
                                  <input type="text"    name="author"   placeholder="Author" class="p-2 bg-gray-100" />
                                  <input type="text"    name="genre"    placeholder="Genre" class="p-2 bg-gray-100" />
                                  <input type="number"  name="cost"   placeholder="Cost" class="p-2 bg-gray-100" />
                                  <input type="number"  name="price"  placeholder="Price"  class="p-2 bg-gray-100" />
                                  <input type="number"  name="stock" placeholder="Stock" class="p-2 bg-gray-100" />
                                  <textarea name="synopsis" placeholder="Synopsis" class="resize-y border rounded-md"> </textarea>
                                  
                                  <input type="file" name="pic" class="p-2 bg-gray-100" />

                                  <button type="submit" class="p-2 bg-gray-100 rounded">submit</button>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>



    
</x-app-layout>