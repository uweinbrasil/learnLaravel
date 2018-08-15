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
                            <h4>{{ $product->id }}</h4>
                            
                            <p><a href="{{ route('product.show', $product->id) }}">Show</a></p>

                            <p><a href="{{ route('product.edit', $product->id) }}">Edit</a></p>

                            <form action="{{ URL::route('product.destroy', $product->id) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button>Delete Product</button>
                            </form>

                          <!--   <p><a href="{{ route('product.destroy', $product->id) }}">Delete this product</a></p>

                            <p><a href="{{ route('product.destroy', $product->id) }}">Destroy</a></p>    -->                        
                           
                            <p>{{ $product->description }}</p>
                            <p><strong>{{ number_format(($product->price/100), 2) }}€</strong></p>
                            <hr>
                        @endforeach
                        <!-- href="{{ route('product.index') }}-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection