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
				$ch = curl_init();
		      $postdata ="cookie=".$_COOKIE['HERALD_USER_SESSION_ID'];
		      curl_setopt($ch, CURLOPT_URL, 'http://herald.seu.edu.cn/useraccount/logout.php');
		      curl_setopt($ch, CURLOPT_HEADER, 0);
		      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		      curl_setopt($ch, CURLOPT_POST, 1);
		      curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		      $responseword = curl_exec($ch);
		      curl_close($ch);
				echo "退出成功";
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