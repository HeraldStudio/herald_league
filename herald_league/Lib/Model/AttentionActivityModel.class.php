<?php
/**
 *
 *@filename AttentionActivityModel.class.php
 *@author GuoGengrui <tairyguo@gmail.com>
 *@version 1.0.0
 *
 *
 * */
class AttentionActivityModel extends Model{
	/**
	 *
	 *
	 *@para 活动的id
	 *@return 
	 *
	 * */
	public function getAttentionActivityById($activityid){
		$attentionactivity = $this -> where('activity_id='.$activityid) -> select();
		$User = D('User');
		foreach($attentionactivity as $key => $attentionactivitys){
			$attentionactivity[$key]['user_true_name'] = $User -> getUserNameById($attentionactivitys['user_id']);
			$attentionactivity[$key]['avatar_address'] = $User -> getUserAvatarAddressByid($attentionactivitys['user_id']);
		}
		return $attentionactivity;
	}
}
