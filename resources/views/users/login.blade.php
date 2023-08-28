<x-header>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h3 class="text-center py-5">Login</h3>
            <form action="/users/login" method= "POST">
                <div class="form-group mb-3">
                    <label for="email">Email address</label>
                    <input type="text" class = "form-control" id = "email" name = "email" value="{{old('email')}}" >
                    @error('email')
                        <p class="text-danger mt-1">{{$message}}</p>    
                    @enderror
                </div>
        
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class = "form-control" id = "password" name = "password" value="{{old('password')}}">
                    @error('password')
                        <p class="text-danger mt-1">{{$message}}</p>    
                    @enderror
                </div>
                <button type = "submit" class="btn btn-primary">Login</button>
            </form>
    
            <div class="mt-4">
                <p>
                    Dont have an account yet?
                    <a href="/register">Register</a>
                </p>
            </div>        
        </div>
    
    </div>
</x-header>