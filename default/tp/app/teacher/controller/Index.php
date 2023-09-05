<?php
namespace app\teacher\controller;

use app\BaseController;
use think\facade\Db;

class Index extends BaseController {
    public function list() {
        $teacher_data = db::table("teacher")->field('id, teacher_name, teacher_avatar, Introduction')->select();
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();

        return view('teachers_list', ['data' => $teacher_data, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }

    public function detail($id) {
        $teacher_data = db::table("teacher")->where('id', $id)->field('teacher_name, teacher_title, teacher_avatar, detail')->find();
        
        $course_data = db::table("course")->where('about_instructor', 'like', '%'.$id.'%')->select();
        $return_data = ['name' => $teacher_data['teacher_name'], 'title' => $teacher_data['teacher_title'], 'avatar' => $teacher_data['teacher_avatar'], 'detail' => $teacher_data['detail']];

        // return view("", ["banner" => $banner_data, "activity_left" => $activity_left_data, "activity_right" => $activity_right_data, "course" => $course_data, "teacher" => $teacher_data]);
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();

        return view('teacher_detail', ['teacher_data' => $return_data, 'course_data' => $course_data, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }
}
?>