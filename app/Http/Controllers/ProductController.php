<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {

        $products = Product::all();
        return view('product', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        return view('productDetail', compact('product'));
    }

    public function store(Request $request)
    {
        // Valider les données d'entrée
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string|max:1000', // Valider la description
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Valider l'image
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Créer un nom unique pour l'image
            $image->move(public_path('images/product'), $imageName); // Enregistrer l'image dans le répertoire public
        }

        // Enregistrer le produit avec la description et l'image dans la base de données
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description, // Enregistrer la description
            'image' => $imageName, // Stocker le chemin relatif de l'image
        ]);

        return redirect()->route('products.index')->with('success', 'Produit ajouté avec succès.');
    }
}
