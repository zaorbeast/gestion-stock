@extends('layouts.user.userLayout')
@section('content')
<div class="card">
        <div class="card-head">
            <h1>faire une entre</h1>
        </div>
        <div class="card-body">
            <form action="addentre" method="POST">
                @csrf
                <table>
                <tbody>

                        <div class="col-md-4 mb-3">
                            <select class="form-select" name="id">
                                <option value="" type="placeholder" >Selectionner un produit</option>
                                @foreach($data as $item)
                                <option value="{{ $item->id}}">{{ $item->NomProd}}:{{$item->Quantite}}</option>
                                @endforeach
                            </select>
                        </div>

                    <div class="col-md-8">
                    <tr>
                        <td>

                            <label class="col-md-4">quantite</label>
                            <input type="number" name="quantite" class="col-md-5">
                        </td>
                    </tr>
                </div>
                <div class="col-md-8">
                    <tr>
                        <td>
                            <label class="col-md-4">Prix</label>
                            <input type="number" name="prix" class="col-md-5">
                        </td>
                    </tr>
                </div>
                <div class="col-md-8">
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-success" value="Envoyer">
                            <input type="reset" class="btn btn-danger" value="Annuler">
                        </td>
                    </tr>
                </div>
                </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
