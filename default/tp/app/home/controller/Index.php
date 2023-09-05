<?php
namespace app\home\controller;
use app\BaseController;

use think\facade\Db;

class Index extends BaseController {
    public function index()
    {
        $banner_data = db::table("banner")->select();

        $activity_left_data = db::table("information")->order('time', 'desc')->limit(1)->find();
        $activity_right_data = db::table("information")->order('time', 'desc')->limit(1, 4)->select();
        $course_data = db::table("course")->field('id,title')->order('sorting', 'asc')->limit(0, 6)->select();
        $teacher_data = db::table("teacher")->select();
        $return_banner_data = [];
        foreach ($banner_data as $key => $value) {
            switch ($value["status"]) {
                case '1': # 学院介绍
                    $value["url"] = "introduced";
                    break;

                case '2': # 课程列表
                    $value["url"] = "course/list";
                    break;

                case '3': # 课程详情
                    $value["url"] = "course/detail/".$value["detail_id"];
                    break;

                case '4': # 老师
                    $value["url"] = "teacher/detail/".$value["detail_id"];
                    break;

                case '5': # 校区介绍
                    $value["url"] = "address/detail/".$value["detail_id"];
                    break;

                case '6': # 资讯
                    $value["url"] = "activity/detail/".$value["detail_id"];
                    break;
                default:
                    break;
            }
            $return_banner_data[$key] = $value;
        }
        $banner_data = $return_banner_data;
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();

        return view("", ["banner" => $banner_data, "activity_left" => $activity_left_data, "activity_right" => $activity_right_data, "course" => $course_data, "teacher" => $teacher_data, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }
}
?>