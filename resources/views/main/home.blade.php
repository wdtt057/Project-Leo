@extends('layouts.main')

@section('content')
  <div class="columns">
    <aside-menu :user="{{ Auth::user() }}" route="{{ route('logout') }}" csrf="{{csrf_token()}}"></aside-menu>
    <main class="column" style="margin: 10px 20px 10px 20px">
      <div id="dashboard" class="dash-content">
        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <div class="title">{{ Auth::user()->firstname }}'s Dashboard</div>
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
              <div class="box">
                <h4 class="subtitle is-4">HTML</h4>
                <progress id="html-progress" class="progress is-danger" value="100" max="100">30%</progress>
                <hr>
                <h4 class="subtitle is-4">CSS</h4>
                <progress id="css-progress" class="progress is-warning" value="30" max="100">30%</progress>
                <hr>
                <h4 class="subtitle is-4">JS</h4>
                <progress id="js-progress" class="progress is-info" value="60" max="100">100%</progress>
                
              <!--  <canvas id="lessonsCompleted"> -->
                <!-- </canvas> -->
              </div>
            </div>
          </div>
          <div class="column is-6">
            <div class="panel" style="padding-bottom:28px">
              <p class="panel-heading">
                Quiz Scores
              </p>
              <div class="panel-block">
                <canvas id="quizScores"></canvas>
              </div>
            </div>
          </div>
          <!-- <div class="column is-6">
            <div class="panel">
              <p class="panel-heading">
                Something
              </p>
              <div class="panel-block">
                <!- <canvas id="lessonsCompleted"></canvas> ->
              </div>
            </div>
          </div> -->
          <!-- <div class="column is-6">
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
          </div> -->
        </div>
      </div>

      <div id="profile" class="dash-content">
        <h1 style="text-align:center">Something Goes Here eventually for profile</h1>
      </div>

      <div id="settings" class="dash-content">
        <h1 style="text-align:center">Something Goes Here eventually for settings</h1>
      </div>
    </main>
  </div>
@endsection

<script>
  function showTime() {
    var date = new Date(),
        utc = new Date(Date(
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

  function dashToggle() {
    const dashTabs = document.querySelectorAll('.menu-list a');
    const dashContents = document.querySelectorAll('.dash-content');
    
    if(location.hash) {
      const dashTab = document.querySelector(`[href="${location.hash}"]`);
      const dashContent = document.querySelector(location.hash);

      dashTab.classList.add('is-active');
      dashContent.classList.add('display-dash-content');
    } else {
      if (dashTabs[0]) {
        dashTabs[0].classList.add('is-active');
        dashContents[0].classList.add('display-dash-content');
      }
    }

    window.addEventListener('hashchange', () => {
        const tabName = location.hash.split('#')[1];
        const dashTab = document.querySelector(`[href="#${tabName}"]`);
        const dashContent = document.querySelector(`#${tabName}`);

        // loop through all activated tab and hide them
        for (let i = dashContents.length - 1; i >= 0; i--) {
          dashContents[i].classList.remove('display-dash-content');
        }
        for (let i = dashTabs.length - 1; i >= 0; i--) {
          dashTabs[i].classList.remove('is-active');
        }

        // activate the selected tab
        dashTab.classList.add('is-active');
        dashContent.classList.add('display-dash-content');
    });
  }

  window.onload = dashToggle;
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
  .aside {
    background-color: #354052;
    margin-right: -10px;
  }
  .aside .main {
    padding: 40px;
    color: #6F7B7E;
  }
  .aside .title {
    color: #6F7B7E;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
  }
  .aside .main .item {
    display: block;
    padding: 10px 0;
    color: #6F7B7E;
  }
  .aside .main .item.active {
    color: #F6F7F7!important;
  }
  .aside .main .icon {
    font-size: 19px;
    padding-right: 30px;
  }
  .aside .main .name {
    color: #6F7B7E!important;
    font-size: 16px;
    font-weight: bold;
  }
  .dash-content {
    display: none;
  }
  .display-dash-content {
    display: block;
  }
</style>