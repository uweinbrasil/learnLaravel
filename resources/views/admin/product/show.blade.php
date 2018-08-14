@extends('layouts.app')

@section('content')
X{{ $product->name }}X
    <div class="container">
    
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="panel-heading">{{ $product->name }} anzeigen</div>
                    <div class="panel-heading">X{{ $product->name }} {{ $product->price }}</div>

                    <div class="panel-body">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection