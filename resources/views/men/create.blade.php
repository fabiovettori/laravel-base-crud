@extends('layouts.app')

@section('title', 'Create new product')

@section('content')
    <section class="py-5" id="products-table">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="pb-4">Create new product</h3>
                    <form action="{{ route('men.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">

                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>

                            <label>Details</label>
                            <input type="txt" name="details" class="form-control">

                            <label>Price</label>
                            <input type="text" name="price" class="form-control">

                            <label>Poster Image</label>
                            <input type="file" name="poster_image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection()
