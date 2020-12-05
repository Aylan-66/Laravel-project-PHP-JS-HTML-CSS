@extends('layouts.app')

@section('content')

<table>
	<tr>
		<td class="produitopac" rowspan="5">
			<img src="/app/public/{{ $produit->id }}.png" class="imgprod">
		</td>
        <td class="produitopac">
			<h1 class="produittitle">{{ $produit->Titre }}</h1>
		</td>
	</tr>
    <tr>
    	<td class="produitopac">
			<h2 class="produittitle">{{ $produit->Prix }}€</h2>
            
			<form action="{{ route('panier.store', $produit->id) }}" >
						@csrf
         					<button class="butdetail" class="btn btn-primary" type="submit">Add to cart</button>
      		</form>
		</td>
	</tr>
    <tr>
    	<td class="produitopac"><p class="produittitle">{{ $produit->Description }}</p></td>
    </tr>
    <tr>
    	<td class="produitopac"><p class="produittitle">Categorie : {{ $produit->Categorie }}</p></td>
	</tr>
</table>

@endsection