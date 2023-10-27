<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Panier;
use Illuminate\Support\Facades\DB;
class checkout extends Controller
{
    //
    public function getDataFromPaniers  ($u){
        $sum=DB::table('produits')
            ->join('paniers', 'produits.id', '=', 'paniers.id_produit')
            ->where('paniers.id_user', '=', $u)
            ->select(DB::raw('FORMAT(SUM(prix), 2) as sum'))
            ->first()->sum;
        $produit1 = produit::latest()->take(4)->get();

        $produit2 = produit::take(5)->get();
        return view('checkout', ["produit1"=>$produit1,"produit2"=>$produit2,"sommeAchat"=>$sum]);

    }
    // place horder
    public function deleteAllPanier($u) {
        $panier = Panier::where('id_user', $u);
        
        if ($panier) {
            $panier->delete();
            return back()->with('success', 'All successfully paid .');
        } else {
            return back()->with('error', 'Cart was not found .');
        }
    }
}
