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
	public function leagueLogin(){
		$leagueid = $this -> _param('leagueid');
		$password = $this ->_param('password');

		$LeagueInfo = D('LeagueInfo');
		$isUserExit = $LeagueInfo -> cheakLeague($leagueid, $password);
		if($isUserExit == "success"){
			$LeagueSession = D('LeagueSession');
			$LeagueSession -> addSesssion($leagueid, $password);
			echo "登录成功";
		}elseif($isUserExit == "error"){
			echo "用户名密码错误";
		}
	}

}
