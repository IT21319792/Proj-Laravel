
<x-layout>
   @auth
       <h1 class="title">Welcome back, {{auth()->user()->name}}</h1>
   @endauth
   @guest
   <h1 class="title">Welcome to my Blog</h1>
       
   @endguest
</x-layout>
    
