<?php
class CommentInfoModel extends Model{
	public function getLeagueCommentInfoById($leagueid){
		$commentinfo = $this -> where('receiver='.$leagueid.' AND receiver_type=1 AND comment_id=0') -> select();
		foreach($commentinfo as $key => $commentinfos){
			$commentinfo[$key]['sender_name'] = $this -> getCommenterInfo($commentinfos['sender'],$commentinfos['sender_type']);
			$commentinfo[$key]['receiver_name'] = $this -> getCommenterInfo($commentinfos['receiver'],$commentinfos['receiver_type']);
			$commentinfo[$key]['responseinfo'] = $this -> getResponseInfo($commentinfos['id']);
		}
		return $commentinfo;
	}
	public function addNewComment($sender, $sender_type, $comment_id, $receiver, $receiver_type, $content){
		$data['sender'] = $sender;
		$data['sender_type'] = $sender_type;
		$data['comment_id'] = $comment_id;
		$data['receiver'] = $receiver;
		$data['receiver_type']  = $receiver_type;
		$data['content'] = $content;
		$data['comment_time'] = date('Y-m-d H:i:s');
		$this -> add($data);
	}
	private function getCommenterInfo($commenterid, $commentertype){
		if($commentertype == 1){
			$LeagueInfo = D('LeagueInfo');
			return $LeagueInfo -> getLeagueNameById($commentertype);
		}elseif($commentertype == 2){
			$User = D('User');
			return $User -> getUserNameById($commenterid);
		}
	}
	private function getResponseInfo($commentid){
		$resopnseinfo = $this -> where('comment_id='.$commentid) -> select();
		if(empty($resopnseinfo)){
			return;
		}
		foreach($resopnseinfo as $key => $resopnseinfos){
			$resopnseinfo[$key]['sender_name'] = $this -> getCommenterInfo($resopnseinfos['sender'],$resopnseinfos['sender_type']);
			$resopnseinfo[$key]['receiver_name'] = $this -> getCommenterInfo($resopnseinfos['receiver'], $resopnseinfos['receiver_type']);
			$resopnseinfo[$key]['responseinfo'] = $this -> getResponseInfo($resopnseinfos['id']);
		}
		return $resopnseinfo;
	}
}