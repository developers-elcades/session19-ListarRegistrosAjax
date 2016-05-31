@extends('layouts.master')

@section('title','Editar Producto')

@section('content')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('product')}}"> Productos</a></li>
     <li class="active">Editar Producto</li>
   </ol>
 

   <div class="row">
     <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading">
            Eliminar 
          </div>
         <div class="panel-body">

            {!!Form::open(['route'=>['product.destroy',$products->id],'method'=>'DELETE'])!!}
            
             <div class="form-group">
               <label for="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO:</label>                
             </div>
             <div class="form-group">
              {!!form::label('Producto')!!} 
               {!!$products->name !!}
             </div>
             <div class="form-group">
               {!!form::label('Precio')!!} 
               {!!$products->price !!}
             </div>

                 {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}

                <button type="button" id= 'cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10" >Cancelar</button>

          {!!Form::close()!!}

          



         </div>
       </div>

     </div>
   </div>

<script>
  $("#cancelar").click(function(event)
  {
      document.location.href = "{{ route('product.index')}}";
  });

</script>
  

@endsection




