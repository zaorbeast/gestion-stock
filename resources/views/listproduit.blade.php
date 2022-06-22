@extends('layouts.user.userLayout')
@section('content')
    <div class="card">
        <div class="card-head">
            <h1>Liste de produit</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-primary table-striped">
                <thead>
                    <tr>
                        <th>Id produit</th>
                        <th>Nom Produit</th>
                        <th>Categorie</th>
                        <th>Quantite</th>
                        <th>Prix</th>    
                        <th>created_at</th>                    
                        <th>Total</th>
                    </tr>
                    @foreach ($produit as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->NomProd}}</td>
                        <td>{{$item->NomCat}}</td>
                        <td>{{$item->Quantite}}</td>
                        <td>{{$item->Prix}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->Quantite* $item->Prix}}</td>
                    </tr>
                        
                    @endforeach
                </thead>
            </table>
            <div class="input-group input-group-outline">
              <form action="{{url('/recherche')}}">
                <div class="col-md-8 mb-3">
                    <label for="debut">debut de periode</label>
                    <input type="date" name="debut">                   
                </div>
                <div class="col-md-8 mb-3">
                    <label for="fin">fin de la periode</label>
                    <input type="date" name="fin">
                </div>
                <input type="submit" value="rechercher" class="btn btn-primary">
              </form>
             
            </div>
        </div>
    </div>
@endsection