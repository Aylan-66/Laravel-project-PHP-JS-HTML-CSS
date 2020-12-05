@extends('layouts.app')

@section('content')

<div class="bodycenter">
    <table id="paniertable">
        <tr class="panier5">
            <td class="paniertab">Produit:</td>
            <td class="paniertab">Prix:</td>
            <td class="paniertab">Quantité:</td>
        </tr>
    

        @if(Session::has('panier'))

            @foreach ($produits as $produit)
        
            <tr>
                <td class="paniertab" >{{ $produit['item']['Titre'] }}</td>
                <td class="paniertab">{{ $produit['Prix'] }}€</td>
                <td class="paniertab"><label for="tentacles">{{ $produit['qty'] }}</label>
                
            </tr>
        
            @endforeach


        <tr>
            <td class="paniertab" >Résumé de la commande:</td>
            <td class="paniertab">{{ $totalPrix }}€</td>
            <td class="paniertab"><label for="tentacles">
            <form action="{{action([App\Http\Controllers\produitController::class, 'endorder'])}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <input hidden type="number" id="amount" name="amount" value="{{ $totalPrix }}">
            <button class="butdetail3" class="btn btn-primary" type="submit" onclick="countorder()">Valider le panier</button>
            
            </form>
            </label>
        </tr>
        <p id="testorder"></p>
        @else

@endif

    </table>
</div>

@endsection

                
                
  