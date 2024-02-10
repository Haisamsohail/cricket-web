<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\HttpClientCommunication;
use Session;

class Product extends Model
{
    use HasFactory;
    const END_POINT_USER = '/';
    public function __construct()
    {
            parent::__construct();
    }

    public static function productActiveList() {
        $object = app(HttpClientCommunication::class);
        $data = array();
        // $data = array('id' => Session::get('user')->id);
        $response = $object->storeData(self::END_POINT_USER."/productActiveList", $data, true);
        // dd('$response', $response->body());
        return $response->body();
    }

    public static function productSearchbyId($id) {
        // dd('ID',$id);
        $object = app(HttpClientCommunication::class);
        $data = array();
        $data = array('id' => $id);
        $response = $object->storeData(self::END_POINT_USER."/productSearchbyId", $data, true);
        return $response->body();
      }
}