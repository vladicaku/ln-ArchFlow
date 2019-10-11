@inject('playerService', 'App\Services\PlayerService')
@inject('songService', 'App\Services\SongService')


{
	"component": "Player"
	"songService": "{{ $songService->getSongTitle($id) }}"
	"playerService": "{{ $playerService->play($id) }}"
}