@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a new product</h1>
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
                        <label for="color">color:</label>
                        <input type="text" class="form-control" name="color" />
                    </div>
                    <div class="form-group">
                        <label for="category">category:</label>
                        <input type="text" class="form-control" name="category" />
                    </div>
                    <div class="form-group">
                        <label for="brand">brand:</label>
                        <input type="text" class="form-control" name="brand" />
                    </div>
                    <div class="form-group">
                        <label for="price">price:</label>
                        <input type="number" class="form-control" name="price" min="1000" max="99999"/>
                    </div>

                    <label for="type" class="form-group">Item type</label>
                    <div id="type" class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="option1" value="Shoe">
                            <label class="form-check-label" for="inlineRadio1">Shoe</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="option2" value="Jean">
                            <label class="form-check-label" for="inlineRadio2">Jean</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="option3" value="Shirt">
                            <label class="form-check-label" for="inlineRadio3">Shirt</label>
                        </div>
                    </div>

                    <label for="gender" class="form-group">Gender</label>
                    <div id="gender" class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="option1" value="M">
                            <label class="form-check-label" for="inlineRadio1">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="option2" value="X">
                            <label class="form-check-label" for="inlineRadio2">X</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="option3" value="F">
                            <label class="form-check-label" for="inlineRadio3">F</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add wear</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
