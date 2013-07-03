<?php
/**
 *@copyright HeraldStudio SEU
 *@author GuoGengrui <tairyguo@gmail.com>
 *@version 1.0.0
 *
 * */
class IndexAction extends Action {
	public function index(){
		$this -> display();
	}
	public function activityClass(){
		$ActivityClass = M('ActivityClass');
		return $ActivityClass -> getClassList();
	}
	public function activityInfo(){
		$ActivityInfo = M('ActivityInfo');
		return $ActivityInfo -> getAllActivityInfo();
	}
	public function leagueList(){
		$LeagueInfo = M('LeagueInfo');
		return $LeagueInfo -> getLeaguePartInfo();
	}

}
