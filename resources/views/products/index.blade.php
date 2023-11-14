@extends('layouts.app')

@section('content')
	<?php
	$categories = DB::table('categories')->get();
	?>
	<div class="productbar">
	</div>
	<div class="products">
		@foreach($products as $product)
			<a class="product-row no-link" href="{{ route('products.show', $product) }}">
				<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
				<div class="product-body">
					<div>
						<h5 class="product-title"><span>{{ $product->title }}</span><em>&euro;{{ $product->price }}</em></h5>
						@unless(empty($product->description))
							<p>{{ $product->description }}</p>
						@endunless

						@if ($product->discount > 0)
							<span style="color:red;">Nu <strong>{{ $product->discount }}</strong>% Korting!</span>
							<div>Orginele prijs: €{{$product->getRawOriginal('price')}}</div>
							</br>
						@endif
					</div>
					<button class="btn btn-primary">Meer info &amp; bestellen</button>
				</div>
			</a>
		@endforeach
	</div>

@endsection