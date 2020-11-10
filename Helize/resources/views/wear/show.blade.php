@extends('layouts.app')

@section('content')
<div class="container">

    @isset($wear)

    <div class="row justify-content-center">
        <div class="col-md-12 text-center">

            <div class="card col-3 d-inline-flex ml-1 mr-1 mb-1 p-0 text-left">
                <div class="card-header">{{ trans('messages.ProductDescription') }}</div>

                <div class="card-body">

                    <ul>
                        <li> {{ trans('messages.brand') }} : <strong>{{ $wear->getBrand() }}</strong></li>
                        <li> {{ trans('messages.color') }} : <strong>{{ $wear->getColor() }}</strong></li>
                        <li> {{ trans('messages.gender') }} : <strong>{{ $wear->getGender() }}</strong></li>
                        <li> {{ trans('messages.wear') }} : <strong>{{ $wear->getType() }}</strong></li>
                        <li> {{ trans('messages.price') }} : <strong>{{ $wear->getPrice() }}</strong></li>
                    </ul>
                    <a href={{ route('wear.show', ['id' => $wear->getId()]) }} class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
    @endisset
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <a href={{ route('wear.index') }} class="btn btn-success"> {{ trans('messages.showMoreProducts') }} </a>
        </div>
    </div>
</div>
@endsection
