@extends('template')

@section('tittle','Crear categorias')

@push ('css')
<style>
    #descripcion{
        resize: none ;
</style>}
@endpush


@section('content')
  <div class="container-fluid px-4">
        <h1 class="mt-4 text-center" >crear categoría</h1>
        <ol class="breadcrumb mb-4"> 
            <li class="breadcrumb-item"><a href="{{route('panel')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('categorias.index')}}">categorias</a></li>
            <li class="breadcrumb-item active">crear categoria</li>
        </ol>

        <div class="container w-100 border border-3 border-primary rounded p-4 mt-3">
             <form action="{{route('categorias.store')}}" method="POST">
                @csrf
                <div class="row g-3">

                   <div class="col-md-6"
                   <label for="Nombre" class="form-label">Nombre:</label>
                   <input type="text" name="nombre" id="nombre">      
                  
                  
                 </div>
               
                <div class="col-md-12">
                    <label for="descripcion" class="form-label">descripcion</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </div>

            </div>
        </form>
    </div>
</div>    
@endsection
     
@push('js')

@endpush