<?php

namespace App\Exports;

use App\Models\entre;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class reportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array
    {
        return[
            'id',
            'Nom Produit',
            'Quantite',
            'Prix',
        ];
    }

    public function collection()
    {
        $entre=DB::table('entres')
        ->leftJoin('produits','produits.id',"=",'entres.idprod')
        ->select('entres.id','produits.NomProd','entres.QuantiteE','entres.PrixE','entres.created_at')
        ->get();

        return $entre;
    }
}
