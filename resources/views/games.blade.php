<h1> LIST OF GAMES </h1>
@foreach ($games as $game)
    <li>
        {{$game->title}} -> {{$game->description}} -> {{$game->id}}
    </li>
@endforeach