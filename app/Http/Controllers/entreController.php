<?php

namespace App\Http\Controllers;

use App\Models\entre;
use App\Models\produit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class entreController extends Controller
{
    public function index()
    {
        $data=DB::table('produits')
        ->select('NomProd','id')
        ->get();
    if (Auth::user()->role_as=='1') {
        return view('entreAdmin',compact('data'));
    } else {
        return view('entreUser',compact('data'));
    }

    }
  public function selection()
  {
      $entre=DB::table('entres')
      ->leftJoin('produits','produits.id',"=",'entres.idprod')
      ->select('entres.id','produits.NomProd','entres.Quantite','entres.Prix','entres.created_at')
      ->get();
      if (Auth::user()->role_as=='1') {
        return view('ListeEntree',compact('entre'));
      } else {
          return view('listEntreUser',compact('entre'));
      }


  }
    public function inserer(Request $request)
    {
        $rules=array('quantite'=>'required');
        $validator=Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json($validator,400);
        } else {
            try{
                $entre=new entre();
                $entre->Quantite=$request->input('quantite');
                $entre->Prix=$request->input('prix');
                $entre->idprod=$request->input('id');
                $entre->save();
                $id=$request->input('id');
                $prod=produit::find($id);
                $prod->Quantite=($prod->Quantite+$request->input('quantite'));
                $prod->newPrice=$request->input('prix');
                $prod->update();
                return redirect('/ListeEntre');
            }catch(Exception $es){
                return response()->json($es,400);
            }

        }


    }
    public function edit($id)
    {
        $data=DB::table('produits')
        ->select('NomProd','id')->get();
        $entre=entre::find($id);
        return view('editEntree',compact('entre','data'));

    }
    public function apdateEntre(Request $request,$id)
    {
        $entre=entre::find($id);
        $entre->Quantite=$request->input('Quantite');
        $entre->Prix=$request->input('Prix');
     //   $entre->idprod=$request->input('idprod');
        $entre->update();
        return redirect('/ListeEntre');


    }
    public function deletEntre($id)
    {
        $entre=entre::find($id);
        $entre->delete();
        return redirect('/ListeEntre');
    }
    public function research(Request $request)
    {
        $debut=$request->input('debut');
        $fin=$request->input('fin');
        $entre=DB::table('entres')
      ->leftJoin('produits','produits.id',"=",'entres.idprod')
      ->select('entres.id','produits.NomProd','entres.Quantite','entres.Prix','entres.created_at')
      ->where('entres.created_at',">=",$debut)
      ->where('entres.created_at',"<=",$fin)
      ->orderByDesc('entres.id')
      ->get();
      if (Auth::user()->role_as=='1') {
          return view('ListeEntree',compact('entre'));
      } else {
        return view('listEntreUser',compact('entre'));
      }


    }
}
