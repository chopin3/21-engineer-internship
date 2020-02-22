<?php


//このファイルの場所
namespace  App\Http\Controllers;

//使用するファイル
use App\Http\Controllers\Controller;
use App\Services\ExampleService;

//このファイルのクラス名と役割
class ExampleController extends Controller
{
    public function index(ExampleService $service) {  //ExampleServiceを$serviceに入れる
        $data['room_index'] = $service->getRoomIndex();   //ExampleServiceのgetRoomIndexを呼びだす
        preDump($data,1);

        return view('example')->with($data);          //example.blade.phpを呼び出す
    }
}