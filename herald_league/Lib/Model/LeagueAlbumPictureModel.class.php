<?php
class LeagueAlbumPictureModel extends Model{
	public function getPictureByAlbumId($albumid){
		return $this -> where('album_id='.$albumid) -> select();
	}
}