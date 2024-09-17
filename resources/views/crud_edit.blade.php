@extends('layout')

@section('task')

<div class="row m-5">
    <div class="col-8 mx-auto">
        <div class="card">
            <h3 class="card-title text-center">ACTUALIZAR</h3>
            <div class="card-body">
                <form action="{{ route('task_update', $data->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="doc"></label>
                        <input required type="text" id="doc" name="title" placeholder="Titulo" class="form-control" value="{{ $data->title}}">

                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="fnom" name="description" placeholder="Descripcipn" class="form-control" value="{{ $data->description}}">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="date" id="date_final" name="date_final" placeholder="Fecha Fin" class="form-control" value="{{ $data->date_final}}">
                    </div>
                
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success btn-block">GUARDAR</button>
                        <a class="btn btn-danger btn-block" href="{{ route('cancel')}}">CANCELAR</a>  
                              
                    </div>
                </form>
            </div>
        </div>        
    </div>
</div>

@endsection