@extends('layouts.base')
@section('content')
<h1>Show</h1>

<div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <caption>LISTA DE</caption>
                <tr>
                    <th class="col-2">#</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                {{-- @foreach ( $centroCustos as $centro ) --}}
                <tr>
                    <td scope="row">
                        <div class="flex-column">
                            {{-- ver --}}
                            <a class="btn btn-success" href="#">
                                <i class="bi bi-eye"></i>
                            </a>
                            {{-- editar --}}
                            <a class="btn btn-dark" href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            {{-- excluir --}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalExcluir" data-identificacao="#">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>

                </tr>

                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
@parent

@endsection
