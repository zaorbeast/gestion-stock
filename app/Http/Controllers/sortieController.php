<?php

namespace App\Http\Controllers;

use App\Models\entre;
use App\Models\produit;
use App\Models\sortie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class sortieController extends Controller
{
    public function indexSortie()
    {
        $data = DB::table('produits')
            ->select('NomProd', 'id', 'Prix', 'Quantite')
            ->get();
        if (Auth::user()->role_as == '1') {
            return view('SortieAdmin', compact('data'));
        } else {
            return view('SortieUser', compact('data'));
        }
    }
    public function selectionSortie()
    {
        $entre = DB::table('sorties')
            ->leftJoin('produits', 'produits.id', "=", 'sorties.idprod')
            ->select('sorties.id', 'produits.NomProd', 'sorties.Quantite', 'sorties.Prix', 'sorties.created_at')
            ->get();
        if (Auth::user()->role_as == '1') {
            return view('ListeSortiesAdmin', compact('entre'));
        } else {
            return view('ListeSortieUser', compact('entre'));
        }
    }
    public function insererSortie(Request $request)
    {

        $entre = new sortie();
        $entre->Quantite = $request->input('quantite');
        $entre->Prix = $request->input('prix');
        $entre->idprod = $request->input('id');
        $entre->creation = $request->input('creation');
        $entre->save();
        $id = $request->input('id');
        $prod = produit::find($id);
        $prod->Quantite = ($prod->Quantite-$request->input('quantite'));
        $prod->update();
        return redirect('/ListeSortie');


        return view('message', compact('message'));
    }
    public function editSortie($id)
    {
        $data = DB::table('produits')
            ->select('NomProd', 'id')->get();
        $entre = sortie::find($id);
        return view('editSortie', compact('entre', 'data'));
    }
    public function apdateSortie(Request $request, $id)
    {
        $entre = sortie::find($id);
        $entre->Quantite = $request->input('Quantite');
        $entre->Prix = $request->input('Prix');
        //   $entre->idprod=$request->input('idprod');
        $entre->update();
        return redirect('/ListeSortie');
    }
    public function deletSortie($id)
    {
        $entre = sortie::find($id);
        $entre->delete();
        return redirect('/ListeSortie');
    }
    public function research(Request $request)
    {
        $debut = $request->input('debut');
        $fin = $request->input('fin');
        $entre = DB::table('sorties')
            ->leftJoin('produits', 'produits.id', "=", 'sorties.idprod')
            ->select('sorties.id', 'produits.NomProd', 'sorties.Quantite', 'sorties.Prix', 'sorties.created_at')
            ->where('sorties.created_at', ">=", $debut)
            ->where('sorties.created_at', "<=", $fin)
            ->orderByDesc('sorties.id')
            ->get();
        if (Auth::user()->role_as == '1') {
            return view('ListeSortiesAdmin', compact('entre'));
        } else {
            return view('ListeSortieUser', compact('entre'));
        }
    }
}
