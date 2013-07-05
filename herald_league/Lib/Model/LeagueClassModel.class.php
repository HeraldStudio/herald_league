<?php
class LeagueClassModel extends Model{
	public function getLeagueClassName($classid){
		return $this -> where('id='.$classid) -> getField('class_name');
	}
	public function getLeagueClassColor($classid){
		return $this -> where('id='.$classid) -> getField('color');
	}
	public function getLeagueClassInfo(){
		return $this -> select();
	}
	public function getClassId($classname){
		return $this -> where('class_name=\''.$classname.'\'') -> getField('id');
	}
}