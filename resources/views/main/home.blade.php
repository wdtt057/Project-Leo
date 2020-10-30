@extends('layouts.main')

@section('content')
<div class="section">
  <div class="columns">
    <aside-menu></aside-menu>
    <main class="column">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="title">{{ Auth::user()->name }}'s Dashboard</div>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <div id="time"></div>
            <!--{{ date('Y-m-d H:i:s') }}-->
          </div>
        </div>
      </div>
      
      <div class="columns is-multiline">
        <div class="column">
          <div class="box">
            <div class="heading">Progress:</div>
            <div class="title">HTML</div>
            <div class="level">
              <div class="level-item">
                <div class="">
                  <div class="heading">Avg. Quiz Score:</div>
                  <div class="title is-5">81/100</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Time:</div>
                  <div class="title is-5">15:12</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Completion %</div>
                  <div class="title is-5">100%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <div class="heading">Progress:</div>
            <div class="title">CSS</div>
            <div class="level">
              <div class="level-item">
                <div class="">
                  <div class="heading">Avg. Quiz Score:</div>
                  <div class="title is-5">81.6/100</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Time:</div>
                  <div class="title is-5">12:53</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Completion %</div>
                  <div class="title is-5">30%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <div class="heading">Progress:</div>
            <div class="title">JavaScript</div>
            <div class="level">
              <div class="level-item">
                <div class="">
                  <div class="heading">Avg. Quiz Score:</div>
                  <div class="title is-5">87/100</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Time:</div>
                  <div class="title is-5">43:23</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Completion %</div>
                  <div class="title is-5">60%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="columns is-multiline">
        <div class="column is-6">
          <div class="panel">
            <p class="panel-heading">
              Lessons Completed
            </p>
            <div class="panel-block">
              <canvas id="lessonsCompleted"></canvas>
            </div>
          </div>
        </div>
        <div class="column is-6">
          <div class="panel">
            <p class="panel-heading">
              Quiz Scores
            </p>
            <div class="panel-block">
              <canvas id="quizScores"></canvas>
            </div>
          </div>
        </div>
        <div class="column is-6">
          <div class="panel">
            <p class="panel-heading">
              Something
            </p>
            <div class="panel-block">
              <figure class="image is-16x9">
                <img src="https://placehold.it/1280x720">
              </figure>
            </div>
          </div>
        </div>
        <div class="column is-6">
          <div class="panel">
            <p class="panel-heading">
              <strong>Dark Side</strong>
            </p>
            <div class="panel-block">
              <figure class="image is-16x9">
                <img src="https://placehold.it/1280x720">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection

<script>
  function showTime() {
    var date = new Date(),
        utc = new Date(Date.UTC(
          date.getFullYear(),
          date.getMonth(),
          date.getDate(),
          date.getHours(),
          date.getMinutes(),
          date.getSeconds()
        ));

    document.getElementById('time').innerHTML = utc.toLocaleTimeString();
  }

  setInterval(showTime, 1000);
</script>

<style>
.submenu-list {
  max-height: 0;
  overflow:hidden;
  transition: all 0.2s ease-in-out;
}

.menu-list li ul{
  margin-left: 0.75em!important;
  margin-top: 0!important;
  margin-bottom: 0!important;
}
</style>