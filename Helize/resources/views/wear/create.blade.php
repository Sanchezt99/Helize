@extends('layouts.master')
@section('content')
@include('util.message')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create wear</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form method="POST" action="{{ route('wear.save') }}">
                        @csrf
                        <p></p>
                        <input type="text" placeholder="Enter gender" name="gender" value="{{ old('gender') }}" />
                        <p></p>
                        <input type="text" placeholder="Enter color" name="color" value="{{ old('color') }}" />
                        <p></p>
                        <input type="text" placeholder="Enter category" name="category" value="{{ old('category') }}" />
                        <p></p>
                        <input type="text" placeholder="Enter type" name="type" value="{{ old('type') }}" />
                        <p></p>
                        <input type="submit" value="Send" />
                        <p></p>
                    </form>
                    <input type="submit" onclick="location='/index'" value="Return" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

