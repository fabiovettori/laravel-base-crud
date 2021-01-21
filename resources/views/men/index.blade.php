@extends('layouts.app')

@section('title', 'Men')

@section('content')
    <section id="men_products" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 d-flex flex-wrap">
                    @foreach ($men_products as $product)
                        <div class="tile">
                            <a href=" {{ route('men.show', ['man'=> $product->id]) }} ">
                                <img src=" {{ asset('images/' . $product->poster_image) }}" alt=" {{ $product->name }}">
                            </a>
                            <p>Polo Ralph Lauren</p>
                            <p> {{ $product->name }} </p>
                            <p> {{ number_format($product->price, 2, '.', '') }} </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
