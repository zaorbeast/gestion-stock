@extends('admin.layout.admin_dash_layout')
@section('content')
<div class="module">
    <div class="hejuru">
        <div class="popup-content">
            <form action="{{url('/rapports')}}">
                <select class="options" name="id">
                    <option value="" type="placeholder">Selectionner le produit</option>
                    @foreach($produit as $item)
                    <option value="{{ $item->id}}">
                        {{ $item->NomProd }}
                    </option>
                    @endforeach
                </select>
                <input type="submit" value="Rapport" class="button">
            </form>
        </div>
    </div>
</div>
@endsection
