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
<<<<<<< HEAD
		$this -> getActivityNum();
=======
		//$activityinfo = $this -> activityInfo();
>>>>>>> e173a13eeff7bb7c7cacb83dca64fdb149d82bee
		$this -> getLoginUserInfo();
        $this -> getActivityNum();
		$this -> assign('activityclass', $activityclass);
		$this -> assign('activityinfo', $activityinfo);
		$this -> display('index');
	}
	public function activityClass(){
		$ActivityClass = D('ActivityClass');
		return $ActivityClass -> getClassList();
	}
<<<<<<< HEAD
=======
	// public function activityInfo(){
		// $ActivityInfo = D('ActivityInfo');
		// return $ActivityInfo -> getAllActivityInfo();
	// }
>>>>>>> e173a13eeff7bb7c7cacb83dca64fdb149d82bee
	public function getActivityNum(){
		$ActivityInfo = D('ActivityInfo');
		$this -> activitynum = $ActivityInfo -> getAllActivityInfoNum();
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
		$classid = $this -> _param('claid');
    // echo $classid;	
		if($this -> isPost()){
			if($classid == 0){
				$ActivityInfo = D('ActivityInfo');
				$lastactivity = $ActivityInfo -> getMoreActivityInfo($this -> _param('lastactivityid'));
				echo json_encode($lastactivity);
			}else{
				$ActivityInfo = D('ActivityInfo');
				$lastactivity = $ActivityInfo -> getMoreActivityByClass($this -> _param('lastactivityid'),$classid);
				echo json_encode($lastactivity);
			}
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
	public function attentionactivity(){
		if($this -> isPost()){
			$UserSession = D('Session');
			if($UserSession -> hasUserLogin()){
				$userinfo = $UserSession -> hasUserLogin();	
				$data['user_id'] = $userinfo[0];
 			}
			if(!empty($data)){
				$data['activity_id'] = $this -> _param('activityid');
				$AttentionActivity  = D('AttentionActivity');
				echo $AttentionActivity -> addattentionactivity($data);
			}else{
				echo "Please Login as nomal user";
			}
		}else{
			echo "非法请求";
		}
	}
	public function attentionleague(){
		if($this -> isPost()){
			$UserSession = D('Session');
			if($UserSession -> hasUserLogin()){
				$userinfo = $UserSession -> hasUserLogin();	
				$data['user_id'] = $userinfo[0];
 			}
			if(!empty($data)){
				$data['league_id'] = $this -> _param('leagueid');
				$AttentionLeague  = D('AttentionLeague');
				echo $AttentionLeague -> addAttentionLeague($data);
			}else{
				echo "Please Login as nomal user";
			}
		}else{
			echo "非法请求";
		}
	}
	
	public function getClassActivity(){
		if($this -> isPost()){
			$ActivityInfo = D('ActivityInfo');
			$activityinfo = $ActivityInfo -> getSortActivity($this -> _param('classid'));
			echo json_encode($activityinfo);
		}else{
		echo "非法请求";
		}
	}
}
