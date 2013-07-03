<?php
/**
 *@copyright HeraldStudio SEU
 *@author GuoGengrui <tairyguo@gmail.com>
 *@version 1.0.0
 *
 * */
class IndexAction extends Action {
	public function index(){
		$activityclass = $this -> activityClass();
		$activityinfo = $this -> activityInfo();

		$this -> assign('activityclass', $activityclass);
		$this -> assign('activityinfo', $activityinfo);
		$this -> display();
	}
	public function activityClass(){
		$ActivityClass = D('ActivityClass');
		return $ActivityClass -> getClassList();
	}
	public function activityInfo(){
		$ActivityInfo = D('ActivityInfo');
		return $ActivityInfo -> getAllActivityInfo();
	}
	public function leagueList(){
		$LeagueInfo = D('LeagueInfo');
		return $LeagueInfo -> getLeaguePartInfo();
	}

}
