@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="section">

            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger
                    container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{route('product.index')}}" role="button">Learn more</a>
                </p>
            </div>
        </div>


        <section>
            <div class="row">
                @forelse ($latestProducts as $product)
                    <div class="col-md-3">
                        <div class="card mb-2" style="min-height: 440px;">
                            <img src="{{ $product->image }}" class="card-img-top" style="max-width: 253px; max-height: 190px;">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text">the card title and make up the bulk of the card's content.</p>
                                <h6><b>$ {{$product->price}}</b></h6>
                                <a href="{{route('cart.add',$product->id)}}" class="btn btn-primary mt-2">Buy</a>
                            </div>
                        </div>
                    </div>

                @empty
                    <h3>No product</h3>
                @endforelse
            </div>
        </section>


    </div>



@endsection
