<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @include('pages.layouts.head')

    @include('pages.layouts.header')
    <div id="layoutSidenav_content">
       
        <main>
            
            @yield('pages.content')

        </main>
      @include('pages.layouts.footer') 

      
</div>
</div>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>


<!DOCTYPE html>
<html lang="en">


<body>

    
    

</body>

</html>
