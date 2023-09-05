<?php
namespace app\introduced\controller;
use app\BaseController;

use think\facade\Db;

class Index extends BaseController {
    public function index()
    {
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();
        return view("", ["bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }
}
?>