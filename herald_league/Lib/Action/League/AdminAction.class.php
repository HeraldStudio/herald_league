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
				$this -> display();
			}else{
				$this -> error("权限不足");
			}
		}else{
				$this -> error("权限不足");
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

		$activityid = $ActivityInfo -> addActivityInfo($adddata);

		$this->redirect('League/Admin/addPostForActivity', array('activityid'=>$activityid), 0.01);
	}

	public function addPostForActivity(){
		$this -> activityid = $this -> _param('activityid');
		$this -> postname = $this -> _param('postname');
		$this -> display();
	}

	public function addPost(){
		$ActivityInfo = D('ActivityInfo');
		$ActivityInfo -> addActivityPost($_POST);
		echo "<script>alert('发布成功');</script>";
		$this->redirect('League/Index/index', array('leagueid'=>1), 0.0001, '~');
		// /$this -> success('发布成功');
		//print_r($_POST);
	}

	public function changeActivityInfo(){
		$this -> display();
	}

	public function previewPost($filename, $activityid){
		$this -> postname = $filename;
		$this -> activityid = $activityid;
	}

	public function uploadActivityPost(){
		import('ORG.Net.UploadFile');
		 //导入上传类
		$upload = new UploadFile();
		 //设置上传文件大小
		$upload->maxSize = 3292200;
		 //设置上传文件类型
		$upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
		 //设置附件上传目录
		$upload->savePath = 'Uploads/ActivityPost/';
		 //设置需要生成缩略图，仅对图像文件有效
		$upload->thumb = true;
		 // 设置引用图片类库包路径
		$upload->imageClassPath = 'ORG.Util.Image';
		 //设置需要生成缩略图的文件后缀
		$upload->thumbPrefix = 'm_,s_';  //生产2张缩略图
		 //设置缩略图最大宽度
		$upload->thumbMaxWidth = '400,100';
		 //设置缩略图最大高度
		$upload->thumbMaxHeight = '400,100';
		 //设置上传文件规则
		$upload->saveRule = 'uniqid';
		 //删除原图
		$upload->thumbRemoveOrigin = true;
		 if (!$upload->upload()) {
		    //捕获上传异常
		    $this->error($upload->getErrorMsg());
		 }else {
		    //取得成功上传的文件信息
		    $uploadList = $upload->getUploadFileInfo();
		    $this -> previewPost($uploadList[0]['savename'], $this -> _param('activityid'));
		    $this -> display('previewPost');
		 }
	}
}