<?php
class LeagueAlbumModel extends Model{
	public function getAlbumInfoByLeagueId($leagueid){
		$this -> where('league_id='.$leagueid) -> select();
	}
}