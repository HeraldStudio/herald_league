<?php
class CommentInfoModel extends Model{
	public function getLeagueCommentInfoById($leagueid){
		$this -> where('receiver='.$leagueid.' AND receiver_type=1') -> select();
	}
}