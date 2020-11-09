@extends('layouts.app')
@section('content')

<link href="{{ asset('css/WearsIndex.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="col-md-12 text-center mb-3">
            <ul id="select-category">
                <li  {{ ($data['selected'] == null) ? 'class=active' : '' }}><a  href="{{route('wear.index')}}"><p>All</p> </a></li>
                <li  {{ ($data['selected'] == 'Shirt') ? 'class=active' : '' }}><a  href="{{route('wear.index',['category' =>  'Shirt', 'ItemsPerPage' => $data['ItemsPerPage']])}}"><p><i class="fas fa-tshirt"></i> Shirts </p> </li></a>
                <li  {{ ($data['selected'] == 'Jean') ? 'class=active' : '' }}><a  href="{{route('wear.index',['category' =>  'Jean', 'ItemsPerPage' => $data['ItemsPerPage']])}}"><p><i class="fas fa-socks"></i> Jeans </p> </a></li>
                <li  {{ ($data['selected'] == 'Shoes') ? 'class=active' : '' }}><a  href="{{route('wear.index',['category' =>  'Shoes', 'ItemsPerPage' => $data['ItemsPerPage']])}}"><p><i class="fas fa-shoe-prints"></i> Shoes </p> </a></li>
            </ul>
        </div>
            <h3 class="display-3">Products</h3>
                    <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Items per page: {{$data['ItemsPerPage']}}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('wear.index',['ItemsPerPage' =>  25, 'category' => $data['type']])}}">25</a>
                        <a class="dropdown-item" href="{{route('wear.index',['ItemsPerPage' =>  50, 'category' => $data['type']])}}">50</a>
                        <a class="dropdown-item" href="{{route('wear.index',['ItemsPerPage' =>  100, 'category' => $data['type']])}}">100</a>
                    </div>
                    </div>
            <div class="container text-center">
                <table class="table table-hover cinereousTable">
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
                        @foreach($data["wears"] as $wear)
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
                {{$data["wears"]->appends(['ItemsPerPage' => $data['ItemsPerPage']])->appends(['category' => $data["type"]]) ->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
