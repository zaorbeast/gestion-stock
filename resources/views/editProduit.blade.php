@extends('admin.layout.admin_dash_layout')
@section('content')
    <div class="card">
        <div class="card-head">
            <h1>Modifier le produit</h1>
        </div>
        <div class="card-body">
            <form action="{{url('/updateProd/'.$produits->id)}}" method="post" enctype="multipart/form-data">
                
            @method('put')
            @csrf
            <table>
                <tbody>
                    <div class="col-md-8 mb-3">
                    <tr class="mb-3">
                        <label class="col-md-2"> Nom du produit</label>
                        <input type="text" class="col-md-5"  name="NomProd" value="{{$produits->NomProd}}">
                    </tr>
                    </div>
                    <div class="col-md-8 mb-3">
                    <tr>
                        <label class="col-md-2">Categorie</label>
                        <input type="text" class="col-md-5" name="Categorie" value="{{$produits->Categorie}}">
                    </tr>
                    </div>
                    <div class="col-md-8 mb-3">
                    <tr>
                        <label class="col-md-2">Prix</label>
                        <input type="number" name="Prix" class="col-md-5" value="{{$produits->Prix}}">
                    </tr>
                    </div>
                    <div class="col-md-8 mb-3">
                    <tr>
                        <label class="col-md-2">Quantite</label>
                        <input type="Number" class="col-md-5" name="Quantite" value="{{$produits->Quantite}}">
                    </tr>
                    </div>
                    <div class="mb-3">
                    <tr>
                    <input type="submit" value="Modifier" class="btn btn-success">
                    </tr>
                    </div>
                </tbody>
            </table>


            </form>
        </div>
    </div>
@endsection