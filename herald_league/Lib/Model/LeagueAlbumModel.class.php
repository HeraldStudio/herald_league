<?php
class LeagueAlbumModel extends Model{
	public function getAlbumInfoByLeagueId($leagueid){
		return $this -> Page('1,3') -> order('id desc') -> where('league_id='.$leagueid) -> select();
	}
	public function getAlbumInfoByLeagueIdWithoutPage($leagueid){
		$albuminfo = $this -> order('id desc') -> where('league_id='.$leagueid) -> select();
		$Picture = D('LeagueAlbumPicture');
		foreach ($albuminfo as $key => $value) {
			$albuminfo[$key]['picture'] = $Picture -> getPictureByAlbumId($value['id']);
		}
		return $albuminfo;
	}
}