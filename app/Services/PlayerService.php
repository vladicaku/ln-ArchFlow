<?php

namespace App\Services;

class PlayerService {

	protected $songService;

	public function __construct(SongService $songService) {
		$this->songService = $songService;
	}

	public function play($id) {
		return 'We are playing '.$this->songService->getSongTitle($id);
	}

}