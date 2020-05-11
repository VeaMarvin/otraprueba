<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //Insert de datos
    public function store(Request $request, Product $product)
    {
        $rules = [
            'photo'=>'required|file'
        ];

        $messages = [
            'photo.required' => 'La imagen del producto es obligatoria.',
            'photo.file'  => 'La imagen del producto debe de ser imagen.'
        ];

        $this->validate($request, $rules, $messages);

        if(!empty($request->photo))
        {
            $img_data = file_get_contents($request->file('photo'));
            $base64 = base64_encode($img_data);
        }

        $imagen = new Image();
        $imagen->photo = $base64;
        $imagen->product_id = $product->id;
        $imagen->save();

        toastr()->success("La imagen fue agregada al producto {$product->title}.");
        return redirect()->route('product.show', $product);
    }

    //Delete de datos
    public function delete(Image $image)
    {
        $product = Product::find($image->product_id);
        $image->delete();
        toastr()->success("La imagen fue eliminada del producto {$product->title}");
        return redirect()->route('product.show', $product);
    }
}
