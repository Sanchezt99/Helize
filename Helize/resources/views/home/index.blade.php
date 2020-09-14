@extends('layouts.master')

@section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    U commerce
                </div>
                <div class="card-body">
                    <button type="button" onclick="location='/wear/create'" value="Crear cuenta" >crear cuenta</button>
                    <button type="button" onclick="location='/showProduct/show'" value="Ingresar como admin">Ingresar como admin</button

                </div>
            </div>
        </div
    </div>
</div>
@endsection

