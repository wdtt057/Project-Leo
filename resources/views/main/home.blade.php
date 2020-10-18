@extends('layouts.main')

@section('content')
<div class="section">
  <div class="columns">
    <aside class="column is-2">
      <nav class="menu">
        <p class="menu-label">
          General
        </p>
        <ul class="menu-list">
          <li><a class="is-active">Dashboard</a></li>
        </ul>
        <p class="menu-label">
          Courses
        </p>
        <ul class="menu-list">
          <li><a>Introduction</a></li>
          <li>
            <a class="">HTML</a>
            <ul>
              <li><a>Lesson 1</a></li>
              <li><a>Lesson 2</a></li>
              <li><a>Lesson 3</a></li>
            </ul>
          </li>
          <li><a>CSS</a></li>
          <li><a>Javascript</a></li>
        </ul>
        <a class="menu-list" href="/FAQs"><i class="far fa-question-circle"></i>&nbsp;Help Center</a>
      </nav>
    </aside>
    <main class="column">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="title">{{ Auth::user()->name }}'s Dashboard</div>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            [Date and Time will Go here eventually]
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
                  <div class="title is-5">80/100</div>
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
                  <div class="title is-5">25%</div>
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
                  <div class="title is-5">0/100</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Time:</div>
                  <div class="title is-5">0:00</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Completion %</div>
                  <div class="title is-5">0%</div>
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
                  <div class="title is-5">15/100</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Time:</div>
                  <div class="title is-5">12:23</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Completion %</div>
                  <div class="title is-5">23%</div>
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
              killme
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
              teehee
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
