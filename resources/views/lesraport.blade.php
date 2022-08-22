@extends('admin.layout.admin_dash_layout')
@section('content')
<?php
$stocInitial=0;
$entree=0;
$Sortiee=0;
$PrixInitial=0;
$prixEntres=0;
$PrixSortie=0;

?>
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
                <td>{{$item->Quantite}} <?php $stocInitial=$stocInitial + $item->Quantite; ?></td>
                <td>{{$item->Prix}}<?php $PrixInitial=$PrixInitial + $item->Prix; ?></td>
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
                    <td>{{$sort->Quantite}}<?php $Sortiee=$Sortiee + $sort->Quantite;?></td>
                    <td>{{$sort->Prix}}<?php $PrixSortie=$PrixSortie + $sort->Prix;?></td>
                    <td>{{$sort->created_at}}</td>
                    <td>{{$sort->Quantite*$sort->Prix}} </td>
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
                @foreach ($entre as $entres)
                <tr>
                    <td>{{$entres->id}}</td>
                    <td>{{$entres->NomProd}}</td>
                    <td>{{$entres->Quantite}}<?php $entree=$entree + $entres->Quantite; ?></td>
                    <td>{{$entres->Prix}}<?php $prixEntres=$prixEntres + $entres->Prix; ?></td>
                    <td>{{$entres->created_at}}</td>
                    <td>{{$entres->Quantite*$entres->Prix}}  </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    <div class="card">
        <div class="car-head">
            <h1>Synthèse</h1>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-primary table-striped">
            <thead>
                <th>Id Produit</th>
                <th>Produit</th>
                <th>Stock initial</th>
                <th>Prix unitaire</th>
                <th>Prix Total</th>
                <th>Entre</th>
                <th>Prix unitaire</th>
                <th>Prix Total</th>
                <th>Sortie</th>
                <th>Prix unitaire</th>
                <th>Prix Total</th>
            </thead>
           @foreach ($prod as $produit )
           <tbody>
                <tr>
                    <td>{{$produit->id}}</td>
                    <td>{{$produit->NomProd}}</td>
                    <td><?php echo$stocInitial;  ?></td>
                    <td><?php echo$PrixInitial;?></td>
                    <td><?php echo $stocInitial*$PrixInitial;  ?></td>
                    <td><?php echo $entree;?></td>
                    <td><?php echo $prixEntres;?></td>
                    <td><?php echo $entree * $prixEntres;?></td>
                    <td><?php echo $Sortiee;?></td>
                    <td><?php echo $PrixSortie;?></td>
                    <td><?php echo $Sortiee * $PrixSortie;?></td>
                    </tr>
            </tbody>
           @endforeach
        </table>
        </div>
    </div>
@endsection
