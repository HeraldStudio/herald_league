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
		$this -> getLeagueAlbum();
		$this -> getLeagueAttention();

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
	private function getLeagueAlbum(){
		$LeagueAlbum = D('LeagueAlbum');
		$albuminfo = $LeagueAlbum -> getAlbumInfoByLeagueId($this -> leagueid);
		$this -> assign('albuminfo',$albuminfo);
	}
	private function getOtherLeagueName(){
		$LeagueInfo = D('LeagueInfo');
		$leaguecount = $LeagueInfo -> getLeagueCount();
		$RandLeague = array();
		$baseid = rand(0,$leaguecount/2);
		for($i = 0; $i < 5; $i++){
			$RandLeague[$baseid+$i] = $LeagueInfo -> getLeagueNameById($baseid+$i);
		}
		$this -> assign('randleaguename',$RandLeague);
	}
	private function getLeagueAttention(){
		$AttentionLeague = D('AttentionLeague');
		$leagueattentioninfo = $AttentionLeague -> getLeagueAttentionById($this -> leagueid);
		print_r($leagueattentioninfo);
		//$this -> assign('leagueattentioninfo',$leagueattentioninfo);
	}
}
