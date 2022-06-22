@extends('admin.layout.admin_dash_layout')
@section('content')
    <div class="card">
        <div class="card-head">
            <h1>faire une entre</h1>
        </div>
        <div class="card-body" style="width: 100%;">
            <form action="addentre" method="POST">
                @csrf
                <table>
                <tbody>
                    
                        <div class="col-md-4 mb-3">
                            <select class="form-select" name="id">
                                <option value="" type="placeholder" >Selectionner le produit</option>
                                @foreach($data as $item)
                                <option value="{{ $item->id}}">{{ $item->NomProd }}</option>
                                @endforeach    
                            </select>
                        </div>
                    
                    <div >
                    <tr>
                        <td>
                            <input type="number" value="{{$item->id}}" hidden name="idProd">
                            <label style="width: 50%;" >quantite</label>
                            <input type="number" style="width: 50%  ;" name="quantite" >
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
                
                    <tr>
                        <td>
                            <input type="submit" style="width: fit-content;" class="btn btn-success " value="Envoyer">
                            <input type="reset" class="btn btn-danger" value="Annuler">
                        </td>
                    </tr>
                
                </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection