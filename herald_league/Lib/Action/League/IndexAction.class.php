<?php
class IndexAction extends Action{
	//private $leagueid;
	//public $leaguename;
	public function index(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getLeagueInfo();
		$this -> getLeagueActivityInfo();
		$this -> display();
	}
	public function leaguelist(){
		$this -> display();
	}
	public function album(){
		$this -> display();
	}
	private function getLeagueInfo(){
		$LeagueInfo = D('LeagueInfo');
		$leagueinfo = $LeagueInfo -> getLeagunInfoByid($this -> leagueid);
		$this -> leaguename = $leagueinfo['league_name'];
		$this -> introduce = $leagueinfo['introduce'];
		$this -> email = $leagueinfo['email'];
		$this -> phone = $leagueinfo['phone'];
		$this -> place = $leagueinfo['place'];
	}
	private function getLeagueActivityInfo(){
		$ActivityInfo = D('ActivityInfo');
		$activityinfo = $ActivityInfo -> getActivityInfoByLeagueId($this -> leagueid);
		$this -> assign('activityinfo',$activityinfo);
	}
}
