@extends('admin.layout.admin_dash_layout')
@section('content')
    <div class="card">
        <div class="card-head">
            <h1>Stock initiale</h1>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-primary table-striped">
        <thead>
            <th>Id </th>
            <th>Produit</th>
            <th>Categorie</th>
            <th>Quantite</th>
            <th>Prix</th>
            <th>Total</th>
        </thead>
        <tbody>
            @foreach ($prod as $item )
                <td>{{$item->id}}</td>
                <td>{{$item->NomProd}}</td>
                <td>{{$item->NomCat}}</td>
                <td>{{$item->Quantite}}</td>
                <td>{{$item->Prix}}</td>
                <td>{{$item->Prix*$item->Quantite}}</td>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>
    <br>
    <br>
    <div class="card">
        <div class="car-head">
            <h1>Rapport des sortie</h1>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-primary table-striped">
            <thead>
                <th>Id sortie</th>
                <th>Produit</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>Date</th>
                <th>Total</th>
            </thead>
            <tbody>
                @foreach ($sortie as $sort)
                <tr>
                    <td>{{$sort->id}}</td>
                    <td>{{$sort->NomProd}}</td>
                    <td>{{$sort->QuantiteS}}</td>
                    <td>{{$sort->PrixS}}</td>
                    <td>{{$sort->created_atS}}</td>
                    <td>{{$sort->QuantiteS*$sort->PrixS}}</td>   
                    </tr>                 
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    <br>
    <br>
    <div class="card">
        <div class="car-head">
            <h1>Rapport des Entres</h1>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-primary table-striped">
            <thead>
                <th>Id sortie</th>
                <th>Produit</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>Date</th>
                <th>Total</th>
            </thead>
            <tbody>
                @foreach ($entre as $sort)
                <tr>
                    <td>{{$sort->id}}</td>
                    <td>{{$sort->NomProd}}</td>
                    <td>{{$sort->QuantiteE}}</td>
                    <td>{{$sort->PrixE}}</td>
                    <td>{{$sort->created_atE}}</td>
                    <td>{{$sort->QuantiteE*$sort->PrixE}}</td>   
                    </tr>                 
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection