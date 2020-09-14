@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a new wear</h1>
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <form method="post" action="{{ route('wear.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="gender">gender:</label>
                        <input type="text" class="form-control" name="gender"/>
                    </div>
                    <div class="form-group">
                        <label for="color">color:</label>
                        <input type="text" class="form-control" name="color"/>
                    </div>
                    <div class="form-group">
                        <label for="category">category:</label>
                        <input type="text" class="form-control" name="category"/>
                    </div>
                    <div class="form-group">
                        <label for="type">type:</label>
                        <input type="text" class="form-control" name="type"/>
                    </div>
                    <div class="form-group">
                        <label for="brand">brand:</label>
                        <input type="text" class="form-control" name="brand"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Add wear</button>
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
</div>
@endsection
