@extends('layouts.app')

@section('title', 'Men')

@section('content')
    <section id="men_products" class="py-5">
        <div class="container-lg">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Details</th>
                            <th scope="col">Price</th>
                            <th scope="col">Preview</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($men_products as $product)
                            <tr>
                                <th scope="row"> {{ $product->id }} </th>
                                <td> {{ $product->name }} </td>
                                <td> {{ $product->description }} </td>
                                <td> {{ $product->details }} </td>
                                <td> {{ number_format($product->price, 2, '.', '') }}€ </td>
                                <td>
                                    <a href=" {{ route('men.show', ['man'=> $product->id]) }} ">
                                        <img src=" {{ asset('images/' . $product->poster_image) }}" alt=" {{ $product->name }}">
                                    </a>
                                 </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-12 text-right">
                    <a class="btn btn-success" href="{{ route('men.create') }}">Add product</a>
                </div>
            </div>
        </div>
    </section>
@endsection
