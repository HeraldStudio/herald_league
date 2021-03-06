<?php
/**
 *
 *@filename LeagueInfoModel.class.php
 *@author GuoGengrui
 *@version 1.0.0
 * 
 * */
class LeagueInfoModel extends Model{
	/**
	 *
	 *@return 按类别分类的社团的名称和id 供首页社团列表使用
	 *
	 *
	 * */
	public function getLeagueList(){
	 	$leagueinfo = $this -> field('uid, league_name, class') -> select();
	 	$LeagueClass = D('LeagueClass');
	 	$leagueclass = $LeagueClass -> getLeagueClassInfo();
	 	foreach ($leagueclass as $key => $leagueclasses) {
	 		$leagueclass[$key]['leagueinfo'] = $this -> getLeagueInfoByClass($leagueclasses['id']);
	 		$leagueclass[$key]['leagueaccount'] = count($leagueclass[$key]['leagueinfo']);
	 	}
	 	return $leagueclass;
	}
	private function getLeagueInfoByClass($classid){
		return $this -> where('class='.$classid) -> field('league_name,uid, avatar_address') -> select();
	}
	public function getLeagueNameById($leagueid){
		return $this -> where('uid='.$leagueid) -> getField('league_name');
	}
	public function getLeagueNameByEmail($email){
		return $this -> where("email='".$email."'") -> getField('league_name');
	}
	public function getLeagueIdByEmail($email){
		return $this -> where("email='".$email."'") -> getField('uid');
	}
	public function getLeagueInfoById($leagueid){
		return $this -> where('uid='.$leagueid) -> find();
	}
	public function getLeagueCount(){
		return $this -> count();
	}
	public function getTenGoodLeague(){
		return $this -> where('isten=1') -> select();
	}
	public function getAttentionLeagueRankInfo(){
		$AttentionLeague = D('AttentionLeague');
		$attentionRank = $AttentionLeague -> getAttentionRank();
		foreach ($attentionRank as $key => $attentionRanks) {
			$attentionRank[$key]['leaguename'] = $this -> getLeagueNameById($attentionRanks['league_id']);
		}
		return $attentionRank;
	}
	public function updateLeagueInfo($data,$leagueid){
		$this -> where('uid='.$leagueid) -> save($data);
	}

	public function checkLeague($email, $password){
		$result = $this -> where("email='".$email."' AND password='".md5($password)."'") -> find();
		if(!$result){
			return "error";
		}else{
			return "success";
		}
	}
	public function updateLeagueAvatar($leagueid, $avatarname){
		$data['avatar_address'] = $avatarname;
		$this -> where('uid='.$leagueid) -> save($data);
	}

	public function addLeague($email, $password, $leaguename){
		$data['email'] = $email; 
		$data['password'] = md5($password);
		$data['league_name'] = $leaguename;
		$addresult = $this -> add($data);
		if($addresult){
			return $addresult;
		}else{
			return "ear";
		}
	}
	public function getSameClassLeague($leagueclass){
		return $this -> where('class='.$leagueclass) -> select();
	}
}
