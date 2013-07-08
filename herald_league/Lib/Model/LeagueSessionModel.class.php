<?php
class LeagueSessionModel extends Model{
	public function addSession($leagueid, $password){
		$data['league_id'] = $leagueid;
		$data['ip'] = $_SERVER['REMOTE_ADDR'];
		$data['session_id'] = $this -> createSessionId($leagueid, $password);
		$this -> add($data);
		cookie();
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
}