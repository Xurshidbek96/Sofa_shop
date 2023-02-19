<?

namespace App\Repositories;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAll()
    {
        return Product::orderBy('id', 'desc')->paginate(10);
    }

    public function show($id){
        return Product::find($id);
    }
    
    public function edit($id){
        return Product::find($id);
    }
}

?>
