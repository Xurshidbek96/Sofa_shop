<?
namespace App\Repositories;

use App\Repositories\Interfaces\MessageRepositoryInterface;

class MessageRepository implements MessageRepositoryInterface
{

    public function getAll(){
        return \App\Models\Message::orderBy('id', 'desc')->paginate(10);
    }
    
}
?>
