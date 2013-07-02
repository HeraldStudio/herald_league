<?php
/**
 *
 *@filename ActivityClassModel.class.php
 *@author GuoGengrui <tairyguo@gmail.com>
 *@version 1.0.0
 * 
 * */
class ActivityClassModel extends Model{
	public function getActivityClassById($classid){
		$classname = $this -> where('id='.$classid) -> find();
		return $classname;
	}
	public function getClassList(){
		$activityclass = $this -> field('class') -> select();
		return $activityclass;
	}
}

