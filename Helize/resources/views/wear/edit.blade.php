@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a wear</h1>
    
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br />
            @endif
            <form method="POST" action="{{ route('wear.update', ['id' => $wear->getId()]) }}">
                @csrf
                <div class="form-group">
                    <label for="gender">gender:</label>
                    <input type="text" class="form-control" name="gender" value={{ $wear->getGender() }} />
                </div>
    
                <div class="form-group">
                    <label for="color">color:</label>
                    <input type="text" class="form-control" name="color" value={{ $wear->getColor() }} />
                </div>
    
                <div class="form-group">
                    <label for="category">category:</label>
                    <input type="text" class="form-control" name="category" value={{ $wear->getCategory() }} />
                </div>
                <div class="form-group">
                    <label for="type">type:</label>
                    <input type="text" class="form-control" name="type" value={{ $wear->getType() }} />
                </div>
                <div class="form-group">
                    <label for="brand">brand:</label>
                    <input type="text" class="form-control" name="brand" value={{ $wear->getBrand() }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <ul></ul>
            <div>
                <form method="get" action="{{ route('wear.index') }}">
                    <button type="submit" class="btn btn-dark ">Back</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
