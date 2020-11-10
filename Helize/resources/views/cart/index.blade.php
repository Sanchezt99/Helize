@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="display-3"> {{ trans('messages.products') }} </h3>
            <div class="container text-center">
                @isset($data)
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th> {{ trans('messages.gender') }} </th>
                            <th> {{ trans('messages.wear') }} </th>
                            <th> {{ trans('messages.brand') }} </th>
                            <th> {{ trans('messages.price') }} </th>
                            <th><i class="fas fa-cart-plus"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['wears'] as $wear)
                        <tr>
                            <td>{{ $wear->getGender() }}</td>
                            <td>{{ $wear->getType() }}</td>
                            <td>{{ $wear->getBrand() }}</td>
                            <td>{{ $wear->getPrice() }}$</td>
                            <td>
                                <form action={{ route('cart.removeOne',$wear->getId()) }} method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"> {{ trans('messages.remove') }} </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2"> {{ trans('messages.total') }} :</td>
                            <td colspan="2"><strong>{{ $data['total'] }}$</strong></td>
                            <td colspan="2">
                                <form action={{ route('cart.buy') }} method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success"> {{ trans('messages.buy') }} </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection
