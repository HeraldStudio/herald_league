<?php
class AdminAction extends Action{
	public function changeinfo(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid)){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$LeagueSession = D('LeagueSession');
		if($LeagueSession -> hasLeagueLogin()){
			$loginuserinfo = $LeagueSession -> hasLeagueLogin();
			if($loginuserinfo[0] == $this -> leagueid){
				$this -> getLeagueInfo();
				$this -> getLeagueClassList();
				if(!empty($_POST)){
					$this -> updateLeagueInfo();
				}
				$this -> display();
			}else{
				echo "quanxianbuzu";
			}
		}else{
				echo "quanxianbuzu";
		}
	}
	public function addalbum(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid)){
			echo "<script>history.go(-1)</script>";
			return;
		}

		$this -> display();
	}
	public function addactivity(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid)){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$LeagueSession = D('LeagueSession');
		if($LeagueSession -> hasLeagueLogin()){
			$loginuserinfo = $LeagueSession -> hasLeagueLogin();
			if($loginuserinfo[0] == $this -> leagueid){
				$this -> getActivityClassList();
				$this -> time = date("Y-m-d H:i");

				if(!empty($_POST)){
					//$this -> addActivityData();
					echo "<script>alert('sss');</script>";
				}
				$this -> display();
			}else{
				echo "quanxianbuzu";
			}
		}else{
				echo "quanxianbuzu";
		}
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
	}
	private function getLeagueClassList(){
		$LeagueClass = D('LeagueClass');
		$leagueclasslist = $LeagueClass -> getLeagueClassInfo();
		$this -> assign('leagueclasslist', $leagueclasslist);
	}
	private function getActivityClassList(){
		$ActivityClass = D('ActivityClass');
		$activityclasslist = $ActivityClass -> getClassList();
		$this -> assign('activityclasslist', $activityclasslist);
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
	public function addActivityData(){
		$ActivityInfo = D('ActivityInfo');

		$adddata['name'] = $this -> _param('activityname');
		$adddata['league_id'] = $this -> _param('leagueid');
		$adddata['start_time'] = $this -> _param('starttime');
		$adddata['end_time'] = $this -> _param('endtime');
		$adddata['class'] = $this -> _param('activityclass');
		$adddata['place'] = $this -> _param('activityplace');
		$adddata['connect_info'] = $this -> _param('connectinfo');
		$adddata['release_time'] = date("Y-m-d H:i");
		$adddata['introduction'] = $this -> _param('activityinfo');

		$ActivityInfo -> addActivityInfo($adddata);
		$this -> success('添加成功');
	}
	// 文件上传
	public function upload() {
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功
			$this->success('上传成功！');
		}
	}
}