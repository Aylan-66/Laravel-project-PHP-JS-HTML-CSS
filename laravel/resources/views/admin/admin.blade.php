@extends('layouts.app')

@section('content')

        <div class="bodycenter">
            <form action="{{action([App\Http\Controllers\produitController::class, 'admin'])}}" method="POST" enctype="multipart/form-data">
                <fieldset class="admin1">
				
					@csrf
					
                    <h3>Ajouter un produit:</h3>
                    <h5 class="toplabel"><label>Nom du produit:</label></p>
                    <input type="text" class="form-control" name="Titre">
                    <h5 class="toplabel"><label>Prix:</label></p>
                    <input type="text" class="form-control" name="Prix">
                    <h5 class="toplabel"><label>Categorie:</label></p>
                    <input type="text" class="form-control" name="Categorie">
                    <h5 class="toplabel"><label>Description:</label></p>
                    <textarea name="Description" class="form-control"></textarea>
                   	<h5 class="toplabel"><label>Photo:</label></p>
                    <input type="file" name="Image" class="imageupload"></input>
                    <button class="butdetail2" class="btn btn-primary" type="submit">Submit</button> 
                    
                </fieldset>
            </form>
            <fieldset class="admin1">
                <h3>Orders finalised: <h3 id="ordernbr"></h3></h3>
                <h3 id="ordernbr"></h3>
            </fieldset>
        </div>

@endsection



