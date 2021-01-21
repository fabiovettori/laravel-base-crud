@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <section id="men_products" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src=" {{ asset('images/' . $product->poster_image) }}" alt=" {{ $product->name }}">
                </div>

                <div class="col-lg-8">
                    <p>Polo Ralph Lauren</p>
                    <p> {{ $product->name }} </p>
                    <p> {{ number_format($product->price, 2, '.', '') }} </p>
                </div>
            </div>
        </div>
    </section>
@endsection
