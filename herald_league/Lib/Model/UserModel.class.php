<?php
class UserModel extends Model{
	protected $dbName = "herald_user_account";
	protected $tablePrefix = "herald_";
	public function getUserNameById($userid){
		return $this -> where('card_num='.$userid) -> getField('true_name');
	}
	public function getUserAvatarAddressByid($userid){
		return $this -> where('card_num='.$userid) -> getField('avatar_address');
	}
}