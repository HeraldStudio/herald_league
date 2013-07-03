<?php
/**
 *
 *@filename ActivityInfoModel.class.php
 *@author GuoGengrui <tairyguo@gmail.com>
 *@verson 1.0.0
 * 
 * */
define("ACTIVITY_NUM",10);
class ActivityInfoModel extends Model{
	/**
	 *
	 *@return 10条活动信息
	 *
	 *
	 * */
	public function getAllActivityInfo(){
		$activityinfo = $this -> limit(ACTIVITY_NUM) -> select();
		$leagueinfo = D('LeagueInfo');
		foreach($activityinfo as $key => $activityinfos){
			$activityinfo[$key]['league_name'] = $leagueinfo -> getLeagueNameById($activityinfos['league_id']);
		}
		return $activityinfo;
	}
}
