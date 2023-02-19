<?
namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface {
    public function getAll();
    public function show($id);
    public function edit($id);
}
?>
