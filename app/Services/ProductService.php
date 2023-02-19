<?php
namespace App\Services;

use App\Models\Product;

class ProductService
{

    public function store($request){

        $requestData = $request->all();

        if($request->hasFile('img'))
            $requestData['img'] = $this->upload_file();

        return Product::create($requestData);
    }

    public function update($request, $id){

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $this->unlink_file($id);
            $requestData['img'] = $this->upload_file();
        }

        return Product::find($id)->update($requestData);
    }

    public function upload_file(){
        $file = request()->file('img');
        $imageName = time().'-'.$file->getClientOriginalName();
        $file->move('images/', $imageName);
        return $imageName;
    }

    public function unlink_file($id){
        $product = Product::find($id);
        if(isset($product->img) && file_exists(public_path('/images/'.$product->img))){
            unlink(public_path('/images/'.$product->img));
        }
    }
}
