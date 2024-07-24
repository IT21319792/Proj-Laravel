
<x-layout>
    <h1 class="title">Register</h1>
    <div class="mx-auto max-w-screen-sm card">
        <form action="{{route('register')}}" method="post">
            @csrf
            {{-- username --}}
            <div class="mb-4">
                <label for="name">User Name</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="input  @error('name') ring-red-500 @enderror">
                     
                
                
                @error('name')
                    <div class="text-red-500 text-sm">{{$message}}</div>    
                @enderror
            </div>
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
                
                {{-- password confirmation --}}
            <div class="mb-4">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password"value="{{old('password')}}" name="password_confirmation" id="password_confirmation" class="input">
               
               @error('password') 
                   
               @enderror @error('password_confirmation')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
           
                <button class="btn">Register</button>
            




        </form>
    </div>
</x-layout>
    
