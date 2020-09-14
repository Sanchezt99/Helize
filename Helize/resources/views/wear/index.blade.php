@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Wears</h1>
            <div class="container">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>gender</td>
                            <td>color</td>
                            <td>category</td>
                            <td>type</td>
                            <td>brand</td>
                            <td colspan=2>Actions</td>
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
                                <a href="{{ route('wear.edit',$wear->getId())}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('wear.destroy', $wear->getId())}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
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
            <button type="submit" class="btn btn-dark ">Create</button>
        </form>
    </div>
</div>
@endsection
