<?php
class SessionModel extends Model{
	protected $dbName = "herald_user_account";
	protected $tablePrefix = "herald_";
	public function hasUserLogin(){
		if(!empty($_COOKIE['HERALD_USER_SESSION_ID'])){
			$result = $this -> where('expired_time >'.time().' AND ip=\''.$_SERVER['REMOTE_ADDR'].'\' AND session_id=\''.$_COOKIE['HERALD_USER_SESSION_ID'].'\'') -> getField('user_id');
			if(!$result){
				return false;
			}else{
				$User = D('User');
				$username = $User -> getUserNameById($result);
				return array($result, $username);
			}
		}else{
			return false;
		}
	}
}