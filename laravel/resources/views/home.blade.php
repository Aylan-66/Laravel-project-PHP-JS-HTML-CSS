@extends('layouts.app')

@section('content')
	<link href="/css/style.css" rel="stylesheet">
	
	<div class="bodycenter" class="ecriture">
		<div class="row">
			@foreach ($produits as $produit)
    			<div class="col-md-3" class="tabcatalogue">
					
        			<div class="tabcatalogue" class="row no-gutters overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        				<a href="{{ route('produit', $produit->Titre) }}" class="buttoncata" class="ecriture">
						<h2 class="ecriture">{{ $produit->Titre }}</h2>
						<img src="/app/public/{{ $produit->id }}.png" class="imgh"></a>
												
						<form action="{{ route('panier.store', $produit->id) }}" >
						@csrf
         					<button class="butdetail" class="btn btn-primary" type="submit">Add to cart</button>
      					</form>
					</div>
    			</div>
			@endforeach
		</div>
	</div>
@endsection
		