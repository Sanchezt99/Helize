@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3"> {{ trans('messages.wear') }} </h1>
            <div class="container">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <td> {{ trans('messages.id') }} </td>
                            <td> {{ trans('messages.gender') }} </td>
                            <td> {{ trans('messages.color') }} </td>
                            <td> {{ trans('messages.category') }} </td>
                            <td> {{ trans('messages.type') }} </td>
                            <td> {{ trans('messages.brand') }} </td>
                            <td colspan=2> {{ trans('messages.actions') }} </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wears as $wear)
                        <tr>
                            <td>{{$wear->getId()}}</td>
                            <td>{{$wear->getGender()}}</td>
                            <td>{{$wear->getColor()}}</td>
                            <td>{{$wear->getCategory()}}</td>
                            <td>{{$wear->getType()}}</td>
                            <td>{{$wear->getBrand()}}</td>
                            <td>
                                <a href="{{ route('wear.edit',$wear->getId())}}" class="btn btn-primary"> {{ trans('messages.edit') }} </a>
                            </td>
                            <td>
                                <form action="{{ route('wear.destroy', $wear->getId())}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"> {{ trans('messages.delete') }} </button>
                                </form>
                            </td>
                        </tr>
            </div>
        </div>
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <form method="get" action="{{ route('wear.create') }}">
            <button type="submit" class="btn btn-dark "> {{ trans('messages.newProduct') }} </button>
        </form>
    </div>
</div>
@endsection
