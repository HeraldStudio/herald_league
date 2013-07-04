<?php
/**
 *
 *@filename LeagueInfoModel.class.php
 *@author GuoGengrui
 *@version 1.0.0
 * 
 * */
class LeagueInfoModel extends Model{
	/**
	 *
	 *@return 按类别分类的社团的名称和id 供首页社团列表使用
	 *
	 *
	 * */
	public function getLeaguePartInfo(){
	 	return $this -> filed('id, league_name') -> group('class') -> select();
	}
	public function getLeagueNameById($leagueid){
		return $this -> where('uid='.$leagueid) -> getField('league_name');
	}
	public function getLeagunInfoByid($leagueid){
		return $this -> where('uid='.$leagueid) -> find();
	}
	public function getLeagueCount(){
		return $this -> count();
	}
}
