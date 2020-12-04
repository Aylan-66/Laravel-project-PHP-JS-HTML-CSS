<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\produit;
use App\Models\panier;
use App\Models\Order;


class produitController extends Controller
{
    public function index(Request $request)
    {
    /*    $produit = new produit;

        $ip = $produit->find(4);


        dd($ip->produit);*/
	
      
    	return view('admin.admin');
	}
	
	public function isadmin(Request $request) {
		$users = new users;

		$users->isadmin = 1;

		$users->save();
	}
	
	public function admin(Request $request) {
		$produit = new produit;
		
		$produit->Titre = $request->get('Titre');
		$produit->Prix = $request->get('Prix');
		$produit->Image = $request->get('Image');
		$produit->Categorie = $request->get('Categorie');
		$produit->Description = $request->get('Description');
		
		$produit->save();
		//return redirect()->action([App\Http\Controllers\produitController::class, 'admin']);
	
		$request->Image->storeAs('', $produit->id . '.png');
		return redirect()->route('home');
	}

	public function show($Titre) {

		$produit = produit::where('Titre', $Titre)->first();
		
		return view('produit.produit')->with('produit', $produit);
	}
	
	public function ajtpanier(Request $request, $id) {
		$produit = produit::find($id);
		$ancpanier = Session::has('panier') ? Session::get('panier') : null;
		$panier = new panier($ancpanier);
		$panier->add($produit, $produit->id);

		$request->session()->put('panier', $panier);

		return redirect()->route('home');
	}

	public function panier() {
		if (!Session::has('panier')) {
			return view('panier.panier');
		}
		$ancpanier = Session::get('panier');
		$panier = new panier($ancpanier);
		return view('panier.panier', ['produits' => $panier->items, 'totalPrix' => $panier->totalPrix]);
	}

	public function endorder(Request $request) {
		$orders = new order();

		$orders->amount = $request->get('amount');
		$orders->save();
		return redirect()->route('endorder');
	}

}


