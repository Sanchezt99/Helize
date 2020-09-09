@extends('layouts.master')
@section('content')

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
        <form method="post" action="{{ route('wear.update', $wear->getId()) }}">
            @method('PATCH')
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
