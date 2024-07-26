
<x-layout>
    <h1 class="title">Login</h1>
    <div class="mx-auto max-w-screen-sm card">
        <form action="{{route('login')}}" method="post">
            @csrf
          
            {{-- email --}}
            <div class="mb-4">
                <label for="email">E-Mail</label>
                <input type="email" value="{{old('email')}}"name="email" id="email" class="input">
                @error('email')
                    <div class="text-red-500 text-sm">{{$message}}</div>
                @enderror
            </div>


            {{-- password --}}
            <div class="mb-4">
                <label for="password">E-Mail</label>
                <input type="password" value="{{old('password')}}" name="password" id="password" class="input">
                @error('password')
                    <div class="text-red-500 text-sm">{{$message}}</div>
                @enderror
            </div>
                
            <div class="mb-4">
                <label for="remember">Remember me</label>
                <input type="checkbox" name="remember" id="remember" class="input">
            </div>
           
                <button class="btn">Login</button>
            




        </form>
    </div>
</x-layout>
    
