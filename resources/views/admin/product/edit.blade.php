@extends('layouts.app')

@section('content')
{{ $product->name }}

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $product->name }} bearbeiten</div>

                    <div class="panel-body">
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="/admin/product/{{ $product->id }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Produkt Name" value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Beschreibung</label>
                                <textarea class="form-control" rows="3" name="description" id="description" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Preis (in Cent)</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Produkt Preis in Cent" value="{{ $product->price }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Produkt aktualisieren</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection