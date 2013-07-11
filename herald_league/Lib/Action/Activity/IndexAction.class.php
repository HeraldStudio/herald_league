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
		$this -> getLoginUserInfo();

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
	public function leagueLogin(){
		$leagueid = $this -> _param('leagueid');
		$password = $this ->_param('password');

		$LeagueInfo = D('LeagueInfo');
		$isUserExit = $LeagueInfo -> cheakLeague($leagueid, $password);
		if($isUserExit == "success"){
			$LeagueSession = D('LeagueSession');
			$result = $LeagueSession -> addSession($leagueid, $password);
			if($result == "success"){
				echo "登录成功";
			}elseif($result == "alreadylogin"){
				echo "已经登录";
			}
		}elseif($isUserExit == "error"){
			echo "用户名密码错误";
		}
	}
	private function getLoginUserInfo(){
		$UserSession = D('Session');
		$LeagueSession = D('LeagueSession');
		if($UserSession -> hasUserLogin()){
			$this -> loginuser = true;
			$this -> loginusertype = 2;
			$loginuserinfo = $UserSession -> hasUserLogin();
			$this -> loginusername = $loginuserinfo[1];
			$this -> loginuserid = $loginuserinfo[0];
		}elseif($LeagueSession -> hasLeagueLogin()){
			$this -> loginuser = true;
			$this -> loginusertype = 1;
			$loginuserinfo = $LeagueSession -> hasLeagueLogin();
			$this -> loginusername = $loginuserinfo[1];
			$this -> loginuserid = $loginuserinfo[0];
		}else{
			$this -> loginuser = false;
		}
	}
	public function getMoreActivity(){
		if($this -> isPost()){
			$ActivityInfo = D('ActivityInfo');
			$lastactivity = $ActivityInfo -> getMoreActivityInfo($this -> _param('lastactivityid'));
			echo json_encode($lastactivity);
		}else{
			echo "非法请求";
		}
	}
	public function getActivityAttention(){
		if($this -> isPost()){
			$result = array();
			$AttentionActivity = D('AttentionActivity');
			$result['attentioninfo'] = $AttentionActivity -> getAttentionActivityById($this -> _param('activityid'));
			$ActivityInfo = D('ActivityInfo');
			$result['activityinfo'] = $ActivityInfo -> getActivityInfoById($this -> _param('activityid'));
			echo json_encode($result);
		}else{
			echo "非法请求";
		}
	}
}
