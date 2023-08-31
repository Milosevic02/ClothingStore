<x-header>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope = "col">Name </th>
            <th scope = "col">Image</th>
            <th scope = "col">Price</th>
            <th scope = "col">Size</th>
            <th scope = "col">Created At</th>
            <th scope = "col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td class="align-middle">{{ $product['name'] }}</td>
                <td class="align-middle">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) 
                        : asset('images/no-image.png') }}" class="image-fluid" style="height: 70px; object-fit: cover; width: 100px" />
                </td>
                <td class="align-middle">{{ $product['price'] }}</td>
                <td class="align-middle">{{ $product['size'] }}</td>
                <td class="align-middle">{{ $product['created_at'] }}</td>
                <td class="align-middle">
                    <div class="d-flex mt-3">
                        <a href="/products/{{$product->id}}/edit" class="btn btn-warning " style="margin-right: 10px">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form method="POST" action="/products/{{$product->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>     
                    </div> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-header>