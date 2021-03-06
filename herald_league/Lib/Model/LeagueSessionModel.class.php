<?php
class LeagueSessionModel extends Model{
	public function addSession($email, $password){
		if(!$this -> isLeagueLogin($email)){
			$data['email'] = $email;
			$data['ip'] = $_SERVER['REMOTE_ADDR'];
			$data['session_id'] = $this -> createSessionId($email, $password);
			$data['expaired_time'] = time() + 3600;
			$this -> add($data);
			cookie('HERALD_LEAGUE_SESSION_ID', $data['session_id'], 3600);
			return "success";
		}else{
			return "alreadylogin";
		}
 	}
	private function createSessionId( $username, $password ){
		$session_id = $this -> phphash($username) + $this -> phphash($password) + rand() + time();
		return md5($session_id);
	}
	private function phphash($str){		
		$seed=31;
		$hash=0;
		for ($i = 0; $i < strlen($str); $i++){
			$hash = $hash * $seed + ord($str[$i]);
		}
		return $hash & 0x7fffffff;

	}
	private function isLeagueLogin($email){
		if(!empty($_COOKIE['HERALD_LEAGUE_SESSION_ID'])){
			$result = $this -> where('email='.$email.' AND expaired_time >'.time().' AND ip=\''.$_SERVER['REMOTE_ADDR'].'\' AND session_id=\''.$_COOKIE['HERALD_LEAGUE_SESSION_ID'].'\'') -> find();
			if($result){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	public function hasLeagueLogin(){
		if(!empty($_COOKIE['HERALD_LEAGUE_SESSION_ID'])){
			$result = $this -> where('expaired_time >'.time().' AND ip=\''.$_SERVER['REMOTE_ADDR'].'\' AND session_id=\''.$_COOKIE['HERALD_LEAGUE_SESSION_ID'].'\'') -> getField('email');
			if(!$result){
				return false;
			}else{
				$LeagueInfo = D('LeagueInfo');
				$leaguename = $LeagueInfo -> getLeagueNameByEmail($result);
				$leagueid = $LeagueInfo -> getLeagueIdByEmail($result);
				return array($leagueid,$leaguename);
			}
		}else{
			return false;
		}
	}	
}