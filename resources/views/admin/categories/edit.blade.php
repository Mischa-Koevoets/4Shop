@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Categorie aanpassen</h2>
            <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="categoryName" class="form-label">Naam</label>
                    <input type="text" name="category" id="categoryName" class="form-control" value="{{$category->name}}" />
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Aanpassen</button>
                </div>
            </form>
        </div>
    
        <div class="col">
            <h2>Producten</h2>
            <ul>
                @foreach($category->product as $product)
                <li>{{$product->title}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection



