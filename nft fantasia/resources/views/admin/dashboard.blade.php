<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for admin') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 
                   
                  
                   
                    @if(empty($count))
                        <p>Data does not exist</p>
                    @else
                        <div>
                            
                       
                        
                        
                        </div>

                        {{-- gfffffffffffffffffffffffffffffffff --}}

                        <div class="flex flex-wrap mb-2">
                            <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2">
                                <div class="bg-green-600 border rounded shadow p-2">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pl-1 pr-4"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-1 text-right">
                                            <h5 class="text-white">Total Revenue</h5>
                                            <h3 class="text-white text-3xl">{{$made}}&euro;<span class="text-green-400"><i class="fas fa-caret-down"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pl-2">
                                <div class="bg-blue-600 border rounded shadow p-2">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pl-1 pr-4"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-1 text-right">
                                            <h5 class="text-white">Total Cost</h5>
                                            <h3 class="text-white text-3xl">{{$costo}} <span class="text-blue-400"><i class="fas fa-caret-up"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                          

                            <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pl-2 xl:pl-3 xl:pr-2">
                                <div class="bg-purple-600 border rounded shadow p-2">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pl-1 pr-4"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-1 text-right">
                                            <h5 class="text-white">No of NFTs sold</h5>
                                            <h3 class="text-white text-3xl">{{$count}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2 xl:pl-2 xl:pr-3">
                                <div class="bg-red-600 border rounded shadow p-2">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pl-1 pr-4"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-1 text-right">
                                            <h5 class="text-white">Total Profits</h5>
                                            <h3 class="text-white text-3xl">{{$sum}}<span class="text-orange-400"><i class="fas fa-caret-up"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pl-2 xl:pl-1">
                                <div class="bg-pink-600 border rounded shadow p-2">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pl-1 pr-4"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-1 text-right">
                                            <h5 class="text-white">No of members</h5>
                                            <h3 class="text-white text-3xl">{{$members}}<span class="text-pink-400"><i class="fas fa-caret-up"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pl-2 xl:pl-1">
                                <div class="bg-pink-600 border rounded shadow p-2">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pl-1 pr-4"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-1 text-right">
                                            <h5 class="text-white">Total no of NFTs</h5>
                                            <h3 class="text-white text-3xl">{{$nft}}<span class="text-pink-400"><i class="fas fa-caret-up"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
















               
                </div>
            </div>
        </div>
    </div>
    



</x-app-layout>
