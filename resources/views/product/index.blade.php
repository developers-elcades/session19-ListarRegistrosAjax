@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   
  <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li class="active">Productos</li>
   </ol>
 

   <div class="page-header">
     <h1>Productos <small>Actualizados hasta hoy</small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

       @include('partials.messages') 
        <div class="panel panel-default">
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
             </p>
           </div>
          <div class="panel-body">
               <div id="list-product"></div>


          </div>
        </div>


     </div>
   </div>

<script>


    $(document).ready(function(){
        listProduct();
    });


    $("#nuevo").click(function(event)
  {
      document.location.href = "{{ route('product.create')}}";
  });

  var listProduct = function()
  {
      $.ajax({
          type:'get',
          url:'{{ url('listall')}}',
          success: function(data){
              $('#list-product').empty().html(data);
          }
      });
  }


</script>
  
@endsection
