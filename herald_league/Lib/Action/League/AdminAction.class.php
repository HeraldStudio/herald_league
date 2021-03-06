<?php
class AdminAction extends Action{
	public function changeinfo(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid)){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getLoginUserInfo();
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
				$this -> error("权限不足");
			}
		}else{
				$this -> error("权限不足");
		}
	}

	public function updateavatar(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid)){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getLoginUserInfo();
		$LeagueSession = D('LeagueSession');
		if($LeagueSession -> hasLeagueLogin()){
			$loginuserinfo = $LeagueSession -> hasLeagueLogin();
			if($loginuserinfo[0] == $this -> leagueid){
				$this -> display();
			}else{
				$this -> error("权限不足");
			}
		}else{
				$this -> error("权限不足");
		}
	}

	public function manageactivity(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid)){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getLoginUserInfo();
		$LeagueSession = D('LeagueSession');
		if($LeagueSession -> hasLeagueLogin()){
			$loginuserinfo = $LeagueSession -> hasLeagueLogin();
			if($loginuserinfo[0] == $this -> leagueid){
				$this -> getLeagueActivity($this -> leagueid);
				$this -> display();
			}else{
				$this -> error("权限不足");
			}
		}else{
				$this -> error("权限不足");
		}
	}

	private function getLeagueActivity($leagueid){
		$ActivityInfo = D('ActivityInfo');
		$activityinfo = $ActivityInfo -> getActivityInfoByLeagueId($leagueid);
		$this -> assign('activityinfo',$activityinfo);
	}

	public function deleteactivity(){
		if($this -> isPost()){
			$LeagueSession = D('LeagueSession');
			if($LeagueSession -> hasLeagueLogin()){
				$loginuserinfo = $LeagueSession -> hasLeagueLogin();
				$ActivityInfo = D('ActivityInfo');
				$info = $ActivityInfo -> getActivityInfoById($this -> _param('activityid'));
			   $this -> leagueid = $info['league_id'];
				if($loginuserinfo[0] == $this -> leagueid){
					$activityid = $this -> _param('activityid');
					$ActivityInfo -> deleteActivity($activityid);
					echo "删除成功";
				}else{
					echo "权限不足";
				}
			}else{
					echo "权限不足";
			}
		}else{
			echo "非法请求 请返回重试";
		}
	}

	//上传头像
	public function uploadImg(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();						// 实例化上传类
		$upload->maxSize = 1*1024*1024;					//设置上传图片的大小
		$upload->allowExts = array('jpg','png','gif');	//设置上传图片的后缀
		$upload->uploadReplace = true;					//同名则替换
		$upload->saveRule = 'uniqid';					//设置上传头像命名规则(临时图片),修改了UploadFile上传类
		$upload->thumbRemoveOrigin = true;
		//$upload->subType = 'date';

		//完整的头像路径
		$path = 'Uploads/LeagueAvatar/';
		$upload->savePath = $path;
		if(!$upload->upload()) {						// 上传错误提示错误信息
			$this->ajaxReturn('',$upload->getErrorMsg(),0,'json');
		}else{											// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			$picName = $info[0]['savename'];
			$temp_size = getimagesize($path.$picName);
			if($temp_size[0] < 100 || $temp_size[1] < 100){//判断宽和高是否符合头像要求
				$this->ajaxReturn(0,'图片宽或高不得小于100px！',0,'json');
			}
			$this->ajaxReturn(__ROOT__.'/Uploads/LeagueAvatar/'.$user_path.$picName,$info,1,'json');
		}
	}

	public function createAlbum(){
		if($this -> isPost()){
			$albumname = $this -> _param('albumname');
			$albumintro = $this -> _param('albumintro');
			$leagueid = $this -> _param('leagueid');
			$LeagueAlbum = D('LeagueAlbum');
			$LeagueAlbum -> createAlbum($albumname, $albumintro, $leagueid);
			echo "创建成功";
		}else{
			echo "非法请求 请返回重试!";
		}
	}

	//裁剪并保存用户头像
	public function cropImg(){
		//图片裁剪数据
		$params = $this->_post();						//裁剪参数
		if(!isset($params) && empty($params)){
			return;
		}
		
		$picName = $this->_post('picName');
      $picName = explode('/',$picName);
      $leagueid = $this -> _param('leagueid');
		//头像目录地址
		$path = 'Uploads/LeagueAvatar/';
		//要保存的图片
		$real_path = $path.$picName[4];
		//临时图片地址
		$pic_path = $real_path;
		$thumb = explode('.',$picName[4]);
		import('ORG.ThinkImage.ThinkImage');
		$Think_img = new ThinkImage(THINKIMAGE_GD); 
		//裁剪原图
		$Think_img->open($pic_path)->crop($params['w'],$params['h'],$params['x'],$params['y'])->save($real_path);
		//生成缩略图
		$Think_img->open($real_path)->thumb(100,100, 1)->save('m_s_'.$path.$thumb[0].'.jpg');// android
		$Think_img->open($real_path)->thumb(60,60, 1)->save($path.$thumb[0].'_60.jpg');
		$Think_img->open($real_path)->thumb(30,30, 1)->save($path.$thumb[0].'_30.jpg');
		$LeagueInfo = D('LeagueInfo');
		$LeagueInfo -> updateLeagueAvatar($leagueid, $picName[4]);
		$this->success('上传头像成功');
	}
    
   public function managealbum(){
   		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid)){
			echo "<script>history.go(-1)</script>";
			return;
		}

		$this -> getLoginUserInfo();
		$LeagueSession = D('LeagueSession');
		if($LeagueSession -> hasLeagueLogin()){
			$loginuserinfo = $LeagueSession -> hasLeagueLogin();
			if($loginuserinfo[0] == $this -> leagueid){
				$LeagueAlbum = D('LeagueAlbum');
				$album = $LeagueAlbum -> getAlbumInfoByLeagueIdWithoutPage($this -> leagueid);
				$this -> assign('leaguealbum', $album);
				$this -> display();
			}else{
				$this -> error("权限不足");
			}
		}else{
				$this -> error("权限不足");
		}
   }

	public function addalbum(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		$this -> albumid = intval($this -> _param('albumid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid) || $this -> albumid < 0 || !isset($this -> albumid)){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getLoginUserInfo();
		$LeagueSession = D('LeagueSession');
		if($LeagueSession -> hasLeagueLogin()){
			$loginuserinfo = $LeagueSession -> hasLeagueLogin();
			if($loginuserinfo[0] == $this -> leagueid){
				$LeagueAlbum = D('LeagueAlbum');
				$this -> albumname = $LeagueAlbum -> getAlbumNameById($this -> albumid);
				$LeagueAlbumPicture = D('LeagueAlbumPicture');
				$picture = $LeagueAlbumPicture -> getPictureByAlbumId($this -> albumid);
				$this -> assign('picture', $picture);
				$this -> display();
			}else{
				$this -> error("权限不足");
			}
		}else{
				$this -> error("权限不足");
		}
	}

	public function deletealbum(){
		if(!$this -> isPost()){
			$this -> error("非法请求");
			return;
		}
		$this -> leagueid = intval($this -> _param('leagueid'));
		$this -> albumid = intval($this -> _param('albumid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid) || $this -> albumid < 0 || !isset($this -> albumid)){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getLoginUserInfo();
		$LeagueSession = D('LeagueSession');
		if($LeagueSession -> hasLeagueLogin()){
			$loginuserinfo = $LeagueSession -> hasLeagueLogin();
			if($loginuserinfo[0] == $this -> leagueid){
				$LeagueAlbum = D('LeagueAlbum');
				$LeagueAlbum -> deleteAlbum($this -> albumid);
				echo "删除成功";
			}else{
				echo "权限不足";
			}
		}else{
				echo "权限不足";
		}
	}

	public function setCover(){
		if($this -> isPost()){
			$LeagueAlbum = D('LeagueAlbum');
			$LeagueAlbum -> setAlbumCover($this -> _param('albumid'), $this -> _param('picadd'));
			echo "设置成功";
		}else{
			$this -> error('非法请求');
		}
	}

	public function addAlbumPicture(){
		$this -> getLoginUserInfo();
		$picname = $this -> uploadsAlbum();
		$albumid = $_GET['albumid'];
		if(!empty($picname)){
			$LeagueAlbumPicture = D('LeagueAlbumPicture');
			$LeagueAlbumPicture -> addNewPicture($albumid, $picname);
		}
	}
	public function uploadsAlbum(){
		import ( 'ORG.Net.UploadFile' );
		$upload = new UploadFile ();
		$upload->imageClassPath = 'ORG.Util.Image';
		$upload->maxSize = 2097152; // 设置附件上传大小不超过2MB
		$upload->allowExts = array ('jpg', 'gif', 'png', 'jpeg' ); // 设置附件上传类型
		$upload->savePath = 'Uploads/LeagueAlbum/'; // 设置附件上传目录
		//设置需要生成缩略图，仅对图像文件有效
		$upload->thumb = true;
		$upload->thumbPrefix = 'm_,s_';  //生产2张缩略图
		 //设置缩略图最大宽度
		$upload->thumbMaxWidth = '400,200';
		 //设置缩略图最大高度
		$upload->thumbMaxHeight = '400,200';
		 //设置上传文件规则
		$upload->saveRule = 'uniqid';
		
		if (! $upload->upload ()) { // 上传错误提示错误信息
			$this->error ( $upload->getErrorMsg () );
		} else { // 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo ();
			return $info[0]['savename'];
		}
	}

	public function addactivity(){
		$this -> leagueid = intval($this -> _param('leagueid'));
		if($this -> leagueid < 0 || !isset($this -> leagueid)){
			echo "<script>history.go(-1)</script>";
			return;
		}
		$this -> getLoginUserInfo();
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
		$this->redirect('League/Index/index/', array('leagueid' => $this -> _param('leagueid')), 0.001, '...');
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
		header("Location: /herald_league/index.php/League/Admin/addpostforactivity/leagueid/".$adddata['league_id']."/activityid/".$activityid);
	}

	public function addpostforactivity(){
		$this -> activityid = $this -> _param('activityid');
		#$this -> postname = $this -> _param('postname');
		$this -> leagueid = $this -> _param('leagueid');
		$this -> getLoginUserInfo();
		$this -> display();
	}

	public function addPost(){
		$ActivityInfo = D('ActivityInfo');
		$ActivityInfo -> addActivityPost($_POST);
		$activityinfo = $ActivityInfo -> getActivityInfoById($_POST['activityid']);
		$leagueid = $activityinfo['league_id'];
		$this -> getLoginUserInfo();
		echo "<script>alert('发布成功');</script>";
		header("Location: /herald_league/index.php/League/Index/index/leagueid/".$leagueid);
	}

	public function changeActivityInfo(){
		$this -> getLoginUserInfo();
		$this -> display();
	}

	public function previewPost($filename, $activityid){
		$this -> postname = $filename;
		$this -> activityid = $activityid;
		$this -> getLoginUserInfo();
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