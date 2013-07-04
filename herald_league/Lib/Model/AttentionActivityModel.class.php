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
		$this -> where('activity_id='.$activityid) -> select();
	}
}
