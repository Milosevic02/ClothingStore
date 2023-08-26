@foreach ($products as $product)

    <h1>
        <a href="/products/{{$product->id}}">{{$product->name}}</h1>

    
@endforeach