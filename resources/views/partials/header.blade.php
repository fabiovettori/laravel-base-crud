<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src=" {{ asset('images/logo.svg') }}" alt="logo ralph lauren">
            </div>

            <ul class="col-lg-9 d-flex list-unstyled justify-content-center m-0">
                <li class="text-uppercase"><a href=" {{ route('home') }} ">home</a></li>
                <li class="text-uppercase ml-5"><a href=" {{ route('men.index') }} ">men</a></li>
            </ul>
        </div>
    </div>
</header>
