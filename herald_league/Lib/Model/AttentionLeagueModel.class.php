<?php
class AttentionLeagueModel extends Model{
	public function getLeagueAttentionById($leagueid){
		$attentiondata = $this -> where('league_id='.$leagueid) -> select();
		$User = D('User');
		foreach($attentiondata as $key => $attentiondatas){
			$attentiondata[$key]['user_true_name'] = $User -> getUserNameById($attentiondatas['user_id']);
			$attentiondata[$key]['avatar_address'] = $User -> getUserAvatarAddressByid($attentiondatas['user_id']);
		}
		return $attentiondata;
	}
	public function getAttentionRank(){
		return $this -> query("select `league_id`, count(*) from `lg_attention_league` group by `league_id`");
	}
	public function addAttentionLeague($data){
		if($this -> where($data) -> select()){
			return "alreadyattention";
		}else{
			$this -> add($data);
			return "attentionsuccess";
		}
	}
}