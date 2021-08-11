<x-app-layout>
    <x-slot name="header">
      

        <h2 class="font-semibold text-xl text-gray-800 leading-tight " >
            <a href="{{ URL::to('items') }}" > {{ __('Store') }}</a>
        </h2>
        </x-slot>

    <section class="text-gray-700 body-font overflow-hidden bg-white ">
        <div class="container px-5 py-24 mx-auto pt-1" >
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
          {{-- img --}}
            <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" 
            src="{{ asset('pic/'. $item->pic)}}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
              <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$item->author}}</h2>
              <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$item->genre}}</h2>
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$item->name}}</h1>
              <div class="flex mb-4">
              
                 
               
              </div>
              <p class="leading-relaxed">{{$item->synopsis}}</p>
            @if(Auth::user()->hasRole('admin'))
                    
              <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Stock: {{$item->stock}}</h1>
              </div>
            @endif
            
           @if(Auth::user()->hasRole('user'))
              <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Stock: {{$stock}}</h1>
              </div>
            @endif
            @if(Auth::user()->hasRole('admin'))
            <span class="title-font font-medium text-2xl text-gray-900 flex mt-6 items-center ">
              Cost: ${{$item->cost}}</span>
            @endif


              <div class="flex">
                <span class="title-font font-medium text-2xl text-gray-900">Price:${{$item->price}} </span>
      
                {{-- fore=user --}}
                @if (Auth::user()->hasRole('user'))
                
                <button id="payment-button"
                class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded btn-color-red">
                 BUY with khalti</button>
                 
                 <button 
                class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded btn-color-red">
                 <a href="{{ URL::to('buy/' . $item->id) }}">BUY proxy</a></button>
                @endif


                
                {{-- for admin --}}
                {{-- edit and delete --}}
                @if(Auth::user()->hasRole('admin'))
                <a href="{{ URL::to('items/' . $item->id . '/edit') }}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin  flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded mr-2">
                  <h4>Edit</h4></a>
                 
                 {{ Form::open(array('url' => 'items/' . $item->id, 'class' => 'pull-right')) }}
                 {{ Form::hidden('_method', 'DELETE') }}
                 {{ Form::submit('Delete this item', array('class' => 'flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded"')) }}
                 {{ Form::close() }}
               @endif

              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- khalti script --}}
      <script>
           let pid = {!! json_encode($item->id) !!};
           let pname = {!! json_encode($item->name) !!};
           let res = "127.0.0.1:8000/items/"+pid;
        
       var config = {
            // replace the publicKey with yours
            "publicKey": "live_public_key_4f87617dle3942209abcac1137f47b50",
            "productIdentity": pid,
            "productName": pname,
            "productUrl": res,
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
        
      
    </script>





</x-app-layout>