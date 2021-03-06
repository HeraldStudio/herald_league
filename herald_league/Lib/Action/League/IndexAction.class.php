<?php
/*
 this class is league zone pages, there are four pages.
 each public function control one page
 */
class IndexAction extends Action{
	/*league zone page*/
	public function index(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getLeagueInfo();
		$this -> getLeagueActivityInfo();
		$this -> getLeagueAlbum();
		$this -> getLeagueAttention();
		$this -> getCommentInfo();
		$this -> getLoginUserInfo();
		$this -> getSameClassLeague();

		$this -> display();
	}
	/*leaguelist page*/
	public function leaguelist(){
		$this -> getLeagueList();
		$this -> getTenGoodLeague();
		$this -> getAttentionLeagueRank();
		$this -> getLoginUserInfo();
		$this -> currentpage = 2;
		
		$this -> display();
	}
	/*league album page*/
	public function album(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getAlbumInfo();
		$this -> getLoginUserInfo();

		$this -> display();
	}
	/*each page activity information in league zone*/
	public function getEachPageActivity(){
		$currentpage = $this -> _param('page');
		$leagueid = $this -> _param('leagueid');
		$ActivityInfo = D("ActivityInfo");
		$activityinfo = $ActivityInfo -> getThreePageInfo($currentpage, $leagueid);
		echo json_encode($activityinfo);
	}
	/*league regester page*/
	public function leagueregester(){
		$this -> display();
	}

	public function addleague(){
		$email = $this -> _post('email');
		$password = $this -> _post('password');
		$leaguename = $this -> _post('leaguename');
		if(!empty($email ) && !empty($password) && !empty($leaguename)){
			$LeagueInfo = D('LeagueInfo');
			$regesterresult = $LeagueInfo -> addLeague($email, $password, $leaguename);
			if($regesterresult == "ear"){
			   $data['code'] = 404;
			   echo json_encode($data);
			}else{
				$LeagueSession = D('LeagueSession');
			   $LeagueSession -> addSession($email, $password);
			   $data['url'] = '/herald_league/index.php/League/Admin/changeinfo/leagueid/'.$regesterresult;
			   $data['code'] = 200;
			   echo json_encode($data);
			}
		}
	}

	public function getSameClassLeague(){
		$LeagueInfo = D('LeagueInfo');
		$info = $LeagueInfo ->  getSameClassLeague($this -> leagueclass);
		$this -> assign('sameclassleague',$info);
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
	
	public function comment(){
		if(!empty($_POST['content'])){
			if(empty($_POST['comment_id'])){
				$_POST['comment_id'] = 0;
			}
			$CommentInfo = D("CommentInfo");
			$UserSession = D('Session');
			$LeagueSession = D('LeagueSession');
			if($UserSession -> hasUserLogin()){
				$loginUserInfo = $UserSession -> hasUserLogin();
				$CommentInfo -> addNewComment($loginUserInfo[0]['user_id'],1,0,$_POST['leagueid'],1,$_POST['content']);
				header("Location: /herald_league/index.php/League/Index/index/leagueid/".$_POST['leagueid']."#liuyanban");
			}elseif ($LeagueSession -> hasLeagueLogin()) {
				$loginLeagueInfo = $LeagueSession -> hasLeagueLogin();
				$CommentInfo -> addNewComment($loginLeagueInfo[0]['league_id'],1,$_POST['comment_id'],$_POST['leagueid'],1,$_POST['content']);
				header("Location: /herald_league/index.php/League/Index/index/leagueid/".$_POST['leagueid']."#liuyanban");
			}else{
				echo "<script>alert('请登录');</script>";
			}
		}else{
			echo "<script>alert('不能为空');</script>";
		}
	}
	private function getLeagueInfo(){
		$LeagueInfo = D('LeagueInfo');
		$leagueinfo = $LeagueInfo -> getLeagueInfoById($this -> leagueid);
		$this -> leaguename = $leagueinfo['league_name'];
		$this -> introduce = $leagueinfo['introduce'];
		$this -> email = $leagueinfo['email'];
		$this -> phone = $leagueinfo['phone'];
		$this -> place = $leagueinfo['place'];
		$this -> memberinfo = $leagueinfo['member'];
		$this -> leagueclass = $leagueinfo['class'];
	}
	private function getLeagueActivityInfo(){
		$ActivityInfo = D('ActivityInfo');
		$activityinfo = $ActivityInfo -> getActivityInfoByLeagueId($this -> leagueid);
		$this -> leagueactivitynum = $ActivityInfo -> getLeagueActivityNum($this -> leagueid);
		$this -> assign('activityinfo',$activityinfo);
	}
	private function getLeagueAlbum(){
		$LeagueAlbum = D('LeagueAlbum');
		$albuminfo = $LeagueAlbum -> getAlbumInfoByLeagueId($this -> leagueid);
		$this -> assign('albuminfo',$albuminfo);
	}
	private function getOtherLeagueName(){
		$LeagueInfo = D('LeagueInfo');
		$leaguecount = $LeagueInfo -> getLeagueCount();
		$RandLeague = array();
		$baseid = rand(0,$leaguecount/2);
		for($i = 0; $i < 5; $i++){
			$RandLeague[$baseid+$i] = $LeagueInfo -> getLeagueNameById($baseid+$i);
		}
		$this -> assign('randleaguename',$RandLeague);
	}
	private function getLeagueAttention(){
		$AttentionLeague = D('AttentionLeague');
		$leagueattentioninfo = $AttentionLeague -> getLeagueAttentionById($this -> leagueid);
		$this -> attentioncount = count($leagueattentioninfo);
		$this -> assign('leagueattentioninfo',$leagueattentioninfo);
	}
	private function getCommentInfo(){
		$CommentInfo = D('CommentInfo');
		$commentinfo = $CommentInfo -> getLeagueCommentInfoById($this -> leagueid);
		$this -> assign('commentinfo', $commentinfo);
	}
	private function getLeagueList(){
		$LeagueInfo = D('LeagueInfo');
		$leaguelist = $LeagueInfo -> getLeagueList();
		$this -> assign('leaguelist', $leaguelist);		
	}
	private function getTenGoodLeague(){
		$LeagueInfo = D('LeagueInfo');
		$tengoodleagueinfo = $LeagueInfo -> getTenGoodLeague();
		$this -> assign('tengoodleagueinfo', $tengoodleagueinfo);
	}
	private function getAttentionLeagueRank(){
		$LeagueInfo = D('LeagueInfo');
		$attentionrank = $LeagueInfo -> getAttentionLeagueRankInfo();
		$this -> assign('attentionrank', $attentionrank);
	}
	private function getAlbumInfo(){
		$AlbumInfo = D('LeagueAlbum');
		$LeagueInfo = D('LeagueInfo');
		$albuminfo = $AlbumInfo -> getAlbumInfoByLeagueIdWithoutPage($this -> leagueid);
		$this -> leaguename = $LeagueInfo -> getLeagueNameById($this -> leagueid);
		$this -> assign('albuminfo',$albuminfo);
	}
}
