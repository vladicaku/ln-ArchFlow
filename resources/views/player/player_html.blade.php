@inject('playerService', 'App\Services\PlayerService')
@inject('songService', 'App\Services\SongService')

<html>
<body>
	<h1>Player</h1>
	<p>Song Service: {{ $songService->getSongTitle($id) }}<p>
	<p>Player Service: {{ $playerService->play($id) }}	</p>
</body>
</html>