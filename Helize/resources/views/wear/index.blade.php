@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="display-3">Products</h3>
            <div class="container text-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>gender</th>
                            <th>Wear</th>
                            <th>brand</th>
                            <th>price</th>
                            <th><i class="fas fa-cart-plus"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wears as $wear)
                        <tr>
                            <td>{{ $wear->getGender() }}</td>
                            <td>{{ $wear->getType() }}</td>
                            <td>{{ $wear->getBrand() }}</td>
                            <td>{{ $wear->getPrice() }}$</td>
                            <td>
                                <form action={{ route('cart.add',$wear->getId()) }} method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Add to cart</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
