<x-header>
    <div class="container">
    <h1 class="mt-5 mb-3">Registration</h1>
    <form method="post" action="/users">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id = "name" name = "name" required>
            @error('name')
                <p class="text-danger mt-1">{{$message}}</p>    
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" class = "form-control" id = "username" name = "username" required>
            @error('username')
                <p class="text-danger mt-1">{{$message}}</p>    
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input type="text" class = "form-control" id = "email" name = "email" required>
            @error('email')
                <p class="text-danger mt-1">{{$message}}</p>    
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password">Confirm Password</label>
            <input type="password" class = "form-control" id = "password" name = "password" required>
            @error('password')
                <p class="text-danger mt-1">{{$message}}</p>    
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class = "form-control" id = "password" name = "password_confirmation" required>
            @error('password_confirmation')
                <p class="text-danger mt-1">{{$message}}</p>    
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <div class="mt-4">
            <p>
                Already have an account?
                <a href="/login">Login</a>
            </p>
        </div>
    </form>
</div>
</x-header>