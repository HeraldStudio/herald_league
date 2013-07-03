<?php
/**
 *
 *@filename LeagueClassModel.class.php
 *@author GuoGengrui <tairyguo@gmail.com>
 *@version 1.0.0
 * 
 * */
class LeagueClassModel extends Model{
	/**
	 *
	 *@para int 社团类别的id
	 *@return array 类别的名称
	 *
	 * */
	public function getLeagueClassById($classid){
		return $this -> where('id='.$classid) -> find();
	}
}
