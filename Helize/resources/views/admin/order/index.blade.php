@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3"> {{ trans('messages.order') }} </h1>
            <div class="container">
                @isset($data)

                <table class="table table-striped">

                    <thead>
                        <tr>
                            <td> {{ trans('messages.user') }} </td>
                            <td> {{ trans('messages.total') }} </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['orders'] as $order)
                        <tr>
                            <td>{{$order->getUserId()}}</td>
                            <td>{{$order->getTotal()}}</td>
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
