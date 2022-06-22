@extends('admin.layout.admin_dash_layout')
@section('content')
    <div class="card">
        <div class="card-head">
            <h1>Ajouter une categorie</h1>
        </div>
        <div class="card-body">
            <form action="/addCat" method="post">
                @csrf
                <table>
                    <tbody>
                        <tr >
                        <td class="col-md-12">
                            <label class="col-md-6">Nom de la categorie</label>
                            <input type="text" name="nomCat" class="col-md-5">
                        </td>
                        </tr>
                        <tr class="col-md-6">
                        <td>
                            <input class="mr-3 btn btn-success" type="submit" value="Ajouter"  style="width: fit-content;">
                            <input type="reset" value="Annuler" class="btn btn-danger" style="width: fit-content;">
                        </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection