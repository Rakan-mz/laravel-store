@extends('layouts.app')

@section('content')

    <div class="container">

        <section>
            @if( session()->has('success'))
{{--                <successdiv class="alert alert-success">{{ session()->get('success') }}</successdiv>--}}
                <div id="alert" class="alert alert-dismissible alert-success fade show ">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session()->get('success') }}</strong>.
                </div>
            @endif
            <div class="row">
                @foreach($Products as $product)
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img src="{{ $product->image }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text">the card title and make up the bulk of the card's content.</p>
                                <h6> <b>$ {{$product->price}}</b></h6>
                                <a href="{{route('cart.add',$product->id)}}" class="btn btn-primary mt-2">Buy</a>                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </section>


    </div>

<script type="application/javascript >
    setTimeout(function(){
    $('#alert').alert('close');
    },4000);
</script>

@endsection
