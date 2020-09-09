@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a wear</h1>
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
                    <label for="first_name">gender:</label>
                    <input type="text" class="form-control" name="gender"/>
                </div>

                <div class="form-group">
                    <label for="last_name">color:</label>
                    <input type="text" class="form-control" name="color"/>
                </div>

                <div class="form-group">
                    <label for="email">category:</label>
                    <input type="text" class="form-control" name="category"/>
                </div>
                <div class="form-group">
                    <label for="city">type:</label>
                    <input type="text" class="form-control" name="type"/>
                </div>
                <button type="submit" class="btn btn-primary-outline">Add wear</button>
            </form>
        </div>
    </div>
</div>
@endsection
