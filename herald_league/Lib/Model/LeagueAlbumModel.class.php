<?php
class LeagueAlbumModel extends Model{
	public function getAlbumInfoByLeagueId($leagueid){
		return $this -> Page('1,3') -> order('id desc') -> where('league_id='.$leagueid) -> select();
	}
}