<?php
class LeagueSessionModel extends Model{
	public function addSession($leagueid, $password){
		if(!$this -> isLeagueLogin($leagueid)){
			$data['league_id'] = $leagueid;
			$data['ip'] = $_SERVER['REMOTE_ADDR'];
			$data['session_id'] = $this -> createSessionId($leagueid, $password);
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
	private function isLeagueLogin($leagueid){
		if(!empty($_COOKIE['HERALD_LEAGUE_SESSION_ID'])){
			$result = $this -> where('league_id='.$leagueid.' AND expaired_time >'.time().' AND ip=\''.$_SERVER['REMOTE_ADDR'].'\' AND session_id=\''.$_COOKIE['HERALD_LEAGUE_SESSION_ID'].'\'') -> find();
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
			$result = $this -> where('expaired_time >'.time().' AND ip=\''.$_SERVER['REMOTE_ADDR'].'\' AND session_id=\''.$_COOKIE['HERALD_LEAGUE_SESSION_ID'].'\'') -> getField('league_id');
			if(!$result){
				return false;
			}else{
				$LeagueInfo = D('LeagueInfo');
				$leaguename = $LeagueInfo -> getLeagueNameById($result);
				return array($result,$leaguename);
			}
		}else{
			return false;
		}
	}	
}