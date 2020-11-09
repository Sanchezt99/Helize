@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3"> {{ trans('messages.addANewButton') }} </h1>
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
                        <label for="color"> {{ trans('messages.color') }} :</label>
                        <input type="text" class="form-control" name="color" />
                    </div>
                    <div class="form-group">
                        <label for="category"> {{ trans('messages.category') }} :</label>
                        <input type="text" class="form-control" name="category" />
                    </div>
                    <div class="form-group">
                        <label for="brand"> {{ trans('messages.brand') }} :</label>
                        <input type="text" class="form-control" name="brand" />
                    </div>
                    <div class="form-group">
                        <label for="price"> {{ trans('messages.price') }} :</label>
                        <input type="number" class="form-control" name="price" min="1000" max="99999"/>
                    </div>

                    <label for="type" class="form-group"> {{ trans('messages.itemType') }} </label>
                    <div id="type" class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="option1" value="Shoe">
                            <label class="form-check-label" for="inlineRadio1"> {{ trans('messages.shoe') }} </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="option2" value="Jean">
                            <label class="form-check-label" for="inlineRadio2"> {{ trans('messages.jean') }} </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="option3" value="Shirt">
                            <label class="form-check-label" for="inlineRadio3"> {{ trans('messages.shirt') }} </label>
                        </div>
                    </div>

                    <label for="gender" class="form-group"> {{ trans('messages.gender') }} </label>
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

                    <button type="submit" class="btn btn-primary"> {{ trans('messages.addWear') }} </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
