@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3"> {{ trans('messages.user') }} </h1>
            <div class="container">
                @isset($data)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td> {{ trans('messages.username') }} </td>
                            <td> {{ trans('messages.email') }} </td>
                            <td> {{ trans('messages.role') }} </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['users'] as $user)
                        <tr>
                            <td> {{$user->getUsername()}} </td>
                            <td> {{$user->getEmail()}} </td>
                            <td> {{$user->getRole()}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection
