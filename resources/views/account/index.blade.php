
@extends('base.frontend')

@section('middle')
<?php
$api = "http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=CAF612C44D539DD035B51D39FA4BA910&steamid=76561198059020084";

$json = file_get_contents($api);

$decoded = json_decode($json);

print_r($decoded->playerstats->stats[0]->value);


?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            Hello worlds
        </div>
    </div>
</div>

@stop