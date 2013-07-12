<?php
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
				echo "success";
				return;
			}else{
				echo "error";
				return;
			}
		}else{
			echo "非法请求";
		}
	}
}