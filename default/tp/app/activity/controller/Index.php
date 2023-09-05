<?php
namespace app\activity\controller;
use app\BaseController;

use think\facade\Db;

class Index extends BaseController {
    public function list($topic_id = 1)
    {
        $new_activity = db::table("information")->order('time', 'desc')->find();
        $time = date('Y.m.d', (int)$new_activity['time']);
        $new_activity['time'] = $time;

        $topic_data = db::table("topic")->select();

        if ($topic_id <= 1) {
            $activity_list = db::table("information")->order('time', 'desc')->select();
        } else {
            $activity_list = db::table('information')->where('topic_id', $topic_id)->select();
        }
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();

        return view("activity_list", ["topic" => $topic_data, "new_activity" => $new_activity, "activity_list" => $activity_list, "topic_id" => $topic_id, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }

    public function detail($topic_id = 1)
    {
        $activity_list = db::table('information')->where('id', $topic_id)->find();
        $time = date('Y.m.d', (int)$activity_list['time']);
        $activity_list['time'] = $time;
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();
        
        return view("activity_detail", ["detail" => $activity_list, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
        // return view("test");
    }
}
?>
