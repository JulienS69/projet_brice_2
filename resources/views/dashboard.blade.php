<x-app-layout>
    <div class="font-sans antialiased">
        <link rel="icon" href="{{asset('images/xefi.ico')}}">
        <x-slot name="header" class="">
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bienvenue {{Auth::user()->prenom}} !
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
