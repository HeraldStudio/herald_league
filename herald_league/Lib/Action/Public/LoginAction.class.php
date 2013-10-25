<?php
/**
 *@copyright HeraldStudio SEU
 *@author GuoGengrui <tairyguo@gmail.com>
 *@version 1.0.0
 *
 * */
class LoginAction extends Action{
	public function logout(){
		if($this -> isPost()){
			if(!empty($_COOKIE['HERALD_USER_SESSION_ID'])){
				$Usersession = D('Session');
				$Usersession -> where('session_id='.$_COOKIE['HERALD_USER_SESSION_ID']) -> delete();
				cookie('HERALD_USER_SESSION_ID',null);
				echo "success";
				return;
			}elseif(!empty($_COOKIE['HERALD_LEAGUE_SESSION_ID'])){
				$LeagueSession = D('LeagueSession');
				$LeagueSession -> where('session_id='.$_COOKIE['HERALD_LEAGUE_SESSION_ID']) -> delete();
				cookie('HERALD_LEAGUE_SESSION_ID',null);
				echo "退出成功";
				return;
			}else{
				echo "未知错误";
				return;
			}
		}else{
			echo "非法请求";
		}
	}
}