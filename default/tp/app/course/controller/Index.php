<?php
namespace app\course\controller;
use app\BaseController;

use think\facade\Db;

class Index extends BaseController {
    public function detail($course_id)
    {
        $course_detail_data = db::table("course")->where('id', $course_id)->find();
        $teacher_id = explode(',', $course_detail_data["about_instructor"]);
        $teacher_data = [];
        foreach ($teacher_id as $key => $value) {
            $teacher_data[$key] = db::table("teacher")->where('id', $value)->field('teacher_name, teacher_title, teacher_avatar')->find();
        }
        $syllabus_array = [];
        $syllabus_array = explode("|", $course_detail_data["syllabus"]);
        $syllabus_pc_data = "";
        foreach ($syllabus_array as $key => $value) {
            $day = str_pad($key + 1, 2, 0, STR_PAD_LEFT);
            $syllabus_pc_data = $syllabus_pc_data."<tr><td class='outline_item_day'>Day".$day."</td><td class='outline_item_detail'>".$value."</td></tr>";
        }
        $syllabus_pc_data = "<table><tbody>".$syllabus_pc_data."</tbody></table>";
        
        $syllabus_phone_data = "";
        foreach ($syllabus_array as $key => $value) {
            $day = str_pad($key + 1, 2, 0, STR_PAD_LEFT);
            $syllabus_phone_data = $syllabus_phone_data."<tr><td class='outline_item_day'>Day".$day."</td></tr><tr><td class='outline_item_detail'>".$value."</td></tr>";
        }
        $syllabus_phone_data = "<table><tbody>".$syllabus_phone_data."</tbody></table>";
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();

        return view("course_detail", ["data" => $course_detail_data, "teacher_data" => $teacher_data, "syllabus_pc" => $syllabus_pc_data, "syllabus_phone" => $syllabus_phone_data, "course_id" => $course_id, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }

    public function list()
    {
        $course_time_data = db::table("course")->where('is_time', 1)->field('id, title, price, days, time')->order('sorting', 'asc')->select();
        $time = [];
        $phone = "";
        $pc = "";
        foreach ($course_time_data as $key => $value) {
            $time_array = explode("|", $value['time']);
            foreach ($time_array as $key => $time_value) {
                $key += 1;
                // phone
                if ($key % 4 == 0) {
                    $phone = $phone.$time_value."</p>";
                } else if ($key % 4 == 1) {
                    if (strlen($phone) == 0) {
                        $phone = "<p>".$time_value."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;";
                    } else {
                        $phone = $phone."<p>".$time_value."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;";
                    }
                } else {
                    $phone = $phone.$time_value."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;";
                }
                // pc
                if ($key % 3 == 0) {
                    $pc = $pc.$time_value."</p>";
                } else if ($key % 3 == 1) {
                    if (strlen($phone) == 0) {
                        if (count($time_array) == $key) {
                            $pc = "<p>".$time_value;
                        } else {
                            $pc = "<p>".$time_value."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;";
                        }
                    } else {
                        if (count($time_array) == $key) {
                            $pc = $pc."<p>".$time_value;
                        } else {
                            $pc = $pc."<p>".$time_value."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;";
                        }
                    }
                } else {
                    if (count($time_array) == $key) {
                        $pc = $pc.$time_value;
                    } else {
                        $pc = $pc.$time_value."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;";
                    }
                    
                }
            }
            $time[$value['id']] = ['pc_time' => $pc, "phone_time" => $phone];
            $phone = "";
            $pc = "";
        }
        $course_skills_data = db::table("course")->where('status', 1)->field('id, title')->select();
        $course_business_data = db::table("course")->where('status', 2)->field('id, title')->select();
        $bj_address = db::table("address")->where('id', '1')->find();
        $sh_address = db::table("address")->where('id', '2')->find();

        return view("course_list", ["time" => $course_time_data, "skills" => $course_skills_data, "business" => $course_business_data, "schedule" => $time, "bottom_phone" => $bj_address["phone"], "bottom_bj" => $bj_address["address"], "bottom_sh" => $sh_address["address"]]);
    }
}
?>