@extends('layouts/default')

@section('content')
  <div class="row">
    <div class="col">
      <div class="box-card bg-success">
        <div class="box-title">19.43</div>
        <div class="box-subtitle">Ticks per second</div>
        <div class="box-icon"><i class="fas fa-microchip"></i></div>
      </div>
    </div>
    <div class="col">
      <div class="box-card bg-primary">
        <div class="box-title">1.5GB</div>
        <div class="box-subtitle">Used memory</div>
        <div class="box-icon"><i class="fas fa-memory"></i></div>
      </div>
    </div>
    <div class="col">
      <div class="box-card bg-info">
        <div class="box-title">20</div>
        <div class="box-subtitle">Online Players</div>
        <div class="box-icon"><i class="fas fa-gamepad"></i></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-8">
      <div class="box-card bg-warning">
        <div class="box-title">Paper git-Paper-564 (MC: 1.13.2)</div>
        <div class="box-subtitle">Server Version</div>
        <div class="box-icon"><i class="fas fa-code-branch"></i></div>
      </div>
    </div>
    <div class="col-4">
      <div class="box-card bg-danger">
        <div class="box-title">$82,487,371.16</div>
        <div class="box-subtitle">Total Economy</div>
        <div class="box-icon"><i class="fas fa-dollar-sign"></i></div>
      </div>
    </div>
  </div>
  <div id="players" class="box">
    <h3 class="text-center">Online Players</h3>
    <ul class="playerlist hide-scrollbar">
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <li>
        <a href="/players/ba4161c0-3a42-496c-8ae0-7d13372f3371">
          <img src="https://crafatar.com/avatars/ba4161c0-3a42-496c-8ae0-7d13372f3371?size=100&helm" data-toggle="tooltip" data-placement="bottom" title="james090500"/>
        </a>
      </li>
      <script>
        $('img').tooltip();
        $('#players').on('mouseover', () => {
          $('.playerlist').removeClass('hide-scrollbar');
        });
        $('#players').on('mouseout', () => {
          $('.playerlist').addClass('hide-scrollbar');
        });
      </script>
    </ul>
  </div>
  </div>
@stop
