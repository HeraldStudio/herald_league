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
	public function getAllActivityInfoNum(){
		$activitynum = $this -> count();
		return $activitynum;
	}
	public function getActivityInfoById($activityid){
		return $this -> where('id='.$activityid) -> find();
	}
	public function getMoreActivityInfo($lastactivityid){
		$activityinfo = $this -> order('id desc') -> limit(ACTIVITY_NUM) -> where('id<'.$lastactivityid)-> select();
		return $activityinfo = $this -> getActivityLeague($activityinfo);
	}
	public function getActivityInfoByLeagueId($leagueid){

		$activityinfo = $this -> where('league_id='.$leagueid) -> select();
		return $this -> getActivityLeague($activityinfo);
	}
	private function getActivityLeague($activityinfo){
		$leagueinfo = D('LeagueInfo');
		foreach($activityinfo as $key => $activityinfos){
			$activityinfo[$key]['league_name'] = $leagueinfo -> getLeagueNameById($activityinfos['league_id']);
		}
		return $activityinfo;
	}
	public function addActivityInfo($data){
		return $this -> add($data);
	}
	public function getSortActivity($classid){
		$activityinfo = $this -> where('class='.$classid) -> select(); 
	    return $activityinfo;
	}
	public function getMoreActivityByClass($lastactivityid,$classid){
		$activityinfo = $this -> order('id desc') -> limit(ACTIVITY_NUM) -> where('id<'.$lastactivityid.' AND class='.$classid)-> select();
		return $activityinfo = $this -> getActivityLeague($activityinfo);
	}
}
