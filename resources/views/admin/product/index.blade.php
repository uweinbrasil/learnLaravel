@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Produkte</div>

                    <div class="panel-body">
                        @foreach($products as $product)
                            <h4>{{ $product->name }}</h4>
                            
                            <p><a href="{{ URL::route('product.edit', $product->id) }}">Edit</a></p>
                            <p><a href="{{ URL::route('product.show', $product->id) }}">Show</a></p>
                            <p>{{ $product->description }}</p>
                            <p><strong>{{ number_format(($product->price/100), 2) }}€</strong></p>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection