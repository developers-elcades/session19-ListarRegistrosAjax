<table class="table table-bordered">
    <thead>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Marca</th>
    <th>Acción</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->product}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->mark}}</td>
            <td>
                <a href="{{route('product.edit',$product->id)}}">[Editar]</a>
                <a href="{{route('product.show',$product->id)}}">[Eliminar]</a></td>
        </tr>
    @endforeach
    </tbody>


</table>
<div class="text-center">
    {!!$products->links()!!}
</div>