@extends('layouts.app')

@section('content')
<div class="container">

    @isset($wears, $users, $orders)

    <div class="row justify-content-center">
        <div class="col-md-12 text-center">

            <div class="card col-3 d-inline-flex ml-4 mr-4 mb-4 p-0 text-left">
                <div class="card-header">Usuarios</div>

                <div class="card-body">

                    <p>Total Usuarios: {{ $users }}</p>                    
                    <a href={{ route('admin.user') }} class="btn btn-info"> Ver todos</a>

                </div>
            </div>
            <div class="card col-3 d-inline-flex ml-4 mr-4 mb-4 p-0 text-left">
                <div class="card-header">Ordenes</div>

                <div class="card-body">

                    <p>Total Ordenes: {{ $orders }}</p>
                    <a href={{ route('admin.orders') }} class="btn btn-info"> Ver todos</a>

                </div>
            </div>
            <div class="card col-3 d-inline-flex ml-4 mr-4 mb-4 p-0 text-left">
                <div class="card-header">Productos</div>

                <div class="card-body">

                    <p>Total productos: {{ $wears }}</p>
                    <a href={{ route('admin.wears') }} class="btn btn-info"> Ver todos</a>

                </div>
            </div>

        </div>
    </div>
    @endisset
</div>
@endsection
