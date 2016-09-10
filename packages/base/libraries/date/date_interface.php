<?php
namespace packages\base\date;
interface date_interface{
	public static function format($format ,$timestamp = null);
	public static function strtotime($time,$now = null);
	public static function mktime($hour = null, $minute = null, $second = null , $month = null, $day = null, $year = null, $is_dst = -1);
}