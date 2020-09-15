@extends('layouts.app')

@section('content')
<div class="container">

    @isset($wears)

    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            @foreach ($wears as $wear)


            <div class="card col-3 d-inline-flex ml-4 mr-4 mb-4 p-0 text-left">
                <div class="card-header">{{ $wear->getBrand() }}</div>

                <div class="card-body">

                    <ul>
                        <li>Color: <strong>{{ $wear->getColor() }}</strong></li>
                        <li>Gender: <strong>{{ $wear->getGender() }}</strong></li>
                        <li>Wear: <strong>{{ $wear->getType() }}</strong></li>
                    </ul>
                    <a href={{ route('wear.show', ['id' => $wear->getId()]) }} class="stretched-link"></a>



                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endisset
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <a href={{ route('wear.index') }} class="btn btn-success">Show all products</a>
        </div>
    </div>
</div>
@endsection
