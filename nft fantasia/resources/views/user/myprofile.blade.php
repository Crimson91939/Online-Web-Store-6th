<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="background-color: #58535396">
    
<div class="grid grid-cols-12 md:items-center w-full max-w-screen-sm md:max-w-screen-md mx-auto px-4">
    <div class="col-span-12 md:col-span-auto md:col-start-1 md:col-end-9 md:row-start-1 md:row-end-1 bg-red-500">
        <a class="" href="#" title="Image Link">
            <picture class="relative block w-full h-0 pb bg-gray-300 overflow-hidden shadow-lg" style="padding-top: 75%;">
                <img class="absolute inset-0 object-cover" 
                src="{{ asset('pro/user.svg')}}" alt="A random image from Unsplash">
            </picture>
        </a>
    </div>
    <div class="col-span-12 md:col-span-auto md:col-start-13 md:col-end-15 md:row-start-1 md:row-end-1 -mt-8 md:mt-0 relative z-10 px-4 md:px-0">
        <div class="p-4 md:p-8 bg-white shadow-lg" style="background-color: #f7adad96">
            <p class="mb-4 text-lg leading-none font-medium">
                   <h2>Profile</h2> 
            </p>
            <p class="text-xs text-gray-500">
                <h2>Name : {{Auth::user()->name}}</h2>
            </p>
            <p class="text-xs text-gray-500">
               <h2>Email :{{Auth::user()->email}} </h2>
            </p>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
