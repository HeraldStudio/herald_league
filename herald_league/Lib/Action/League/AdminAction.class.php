<?php
class AdminAction extends Action{
	public function changeinfo(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0){
			echo "<script>history.go(-1)</script>";
			return;
		}

		$this -> getLeagueInfo();
		$this -> getLeagueClassList();
		if(!empty($_POST)){
			$this -> updateLeagueInfo();
		}

		$this -> display();
	}
	public function addalbum(){
		$this -> display();
	}
	public function addactivity(){
		$this -> display();
	}
	private function getLeagueInfo(){
		$LeagueInfo = D('LeagueInfo');
		$leagueinfo = $LeagueInfo -> getLeagueInfoById($this -> leagueid);
		$this -> leaguename = $leagueinfo['league_name'];
		$this -> leagueintro = $leagueinfo['introduce'];
		$this -> member = $leagueinfo['member'];
		$this -> phone = $leagueinfo['phone'];
		$this -> place = $leagueinfo['place'];
		$this -> email = $leagueinfo['email'];
		$this -> avatr = $leagueinfo['avatar_address'];
		//$this -> assign('leagueinfo', $leagueinfo);
	}
	private function getLeagueClassList(){
		$LeagueClass = D('LeagueClass');
		$leagueclasslist = $LeagueClass -> getLeagueClassInfo();
		$this -> assign('leagueclasslist', $leagueclasslist);
	}
	private function updateLeagueInfo(){
		$LeagueClass = D('LeagueClass');
		$LeagueInfo = D('LeagueInfo');

		$adddata['league_name'] = $this -> _param('leaguename'); 
		$adddata['introduce'] = $this -> _param('introduce');
		$adddata['member'] = $this -> _param('member');
		$adddata['phone'] = $this -> _param('phone');
		$adddata['email'] = $this -> _param('email');
		$adddata['place'] = $this -> _param('place');
		$adddata['class'] = $LeagueClass -> getClassId($this -> _param('leagueclass'));
		$LeagueInfo -> updateLeagueInfo($adddata,$this -> _param('leagueid'));
	}
}