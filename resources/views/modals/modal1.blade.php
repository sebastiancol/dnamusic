@extends('layout')
@section('modal')
    <!-- Modal -->

    <div class="modal fade" data-animation="slideInOutLeft" tabindex="-1" aria-labelledby="modal-title" id="deleteTask">
                                    
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-body">
                    <p>¿DESEA ELIMINAR EL REGISTRO?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                    <button type="button" class="btn btn-primary">
                        <a class="" href="{{ route('crud_delete', $item->id) }}">CONFIRMAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    </button>
                </div>
            </div>
        </div>
        
    </div>

@endsection

