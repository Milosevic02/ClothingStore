<x-header>
    <div class="container">
        <h1 class="mt-5 mb-3">Add Product</h1>
        <form method="post" action="/">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id = "name" name = "name" value="{{old('name')}}" >
                @error('name')
                    <p class="text-danger mt-1">{{$message}}</p>    
                @enderror
            </div>
    
            <div class="form-group mb-3">
                <label for="tags">Tags (Comma Separated)</label>
                <input type="text" class = "form-control" id = "tags" name = "tags" value="{{old('tags')}}" >
                @error('tags')
                    <p class="text-danger mt-1">{{$message}}</p>    
                @enderror
            </div>
    
            <div class="form-group mb-3">
                <label for="Price">Price</label>
                <input type="Price" class = "form-control" id = "Price" name = "Price" value="{{old('password')}}">
                @error('Price')
                    <p class="text-danger mt-1">{{$message}}</p>    
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add product</button>
</x-header>