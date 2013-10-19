<?php
class LeagueAlbumPictureModel extends Model{
	public function getPictureByAlbumId($albumid){
		return $this -> where('album_id='.$albumid) -> select();
	}
	public function addNewPicture($albumid, $picname){
		$data['album_id'] = $albumid;
		$data['address'] = $picname;
		$this -> add($data);
	}
}