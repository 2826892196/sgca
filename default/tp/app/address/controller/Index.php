<?php
namespace app\address\controller;
use app\BaseController;

use think\facade\Db;

class Index extends BaseController {
    public function list()
    {
        $address_list = db::table('address')->select();
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();
        return view("address_list", ["address_list" => $address_list, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }

    public function detail($id)
    {
        $address_detail = db::table('address')->where('id', $id)->find();
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();
        return view("address_detail", ["address_detail" => $address_detail, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }
}
?>