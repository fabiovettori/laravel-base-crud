@extends('layouts.app')

@section('content')
    <section class="py-5" id="products-table">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="pb-4">Create new product</h3>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control">

                            <label for="exampleFormControlInput1">Description</label>
                            <input type="text" class="form-control">

                            <label for="exampleFormControlInput1">Details</label>
                            <input type="email" class="form-control">

                            <label for="exampleFormControlInput1">Price</label>
                            <input type="text" class="form-control">

                            <label for="exampleFormControlInput1">Poster Image</label>
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection()
