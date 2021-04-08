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
                    <div class="title is-5"><span id="htmlAvg"></span>%</div>
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
                    <div class="title is-5"><span id="htmlComplete"></span>%</div>
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
                    <div class="title is-5"><span id="cssAvg"></span>%</div>
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
                    <div class="title is-5"><span id="cssComplete"></span>%</div>
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
                    <div class="title is-5"><span id="jsAvg"></span>%</div>
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
                    <div class="title is-5"><span id="jsComplete"></span>%</div>
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
                <progress id="html-progress" class="progress is-danger" value="" max="5"></progress>
                <hr>
                <h4 class="subtitle is-4">CSS</h4>
                <progress id="css-progress" class="progress is-warning" value="" max="5"></progress>
                <hr>
                <h4 class="subtitle is-4">JS</h4>
                <progress id="js-progress" class="progress is-info" value="" max="5"></progress>
                
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
              <div class="panel-block box">
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
      <!-- Start Profile Content-->
      <div id="profile" class="dash-content">
        <div class="box section is-medium">
          <div class="columns">
            <!-- Left Profile Column -->
            <div class="column is-3 is-offset-1">
              <form enctype="multipart/form-data" action="updatePhoto" method="POST">
                @csrf
                <figure class="image">
                  <img class="is-rounded" src="{{ Auth::user()->avatar }}">
                </figure>
                <button id="updatePhotoBtn" class="button is-info" type="button" onclick="updatePhotoToggle()">Update Photo</button>
                  <div id="inputPhoto" class="file is-small has-name is-hidden">
                    <label class="file-label">
                      <input class="file-input" type="file" name="avatar">
                      <span class="file-cta">
                        <span class="file-icon">
                          <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                          Choose Photo
                        </span>
                      </span>
                      <span class="file-name"> 
                        No file selected . . .
                      </span>
                    </label>
                  </div>

                  <div class="field">
                    <p class="buttons">
                      <button id="cancelChangePhoto" class="button is-danger is-outlined is-hidden" type="button" onclick="updatePhotoToggle()">
                        <span>Cancel</span>
                        <span class="icon is-small">
                          <i class="fas fa-times"></i>
                        </span>
                      </button>
                      <button id="saveChangesPhoto" type="submit" class="button is-success is-pulled-right is-hidden">
                        <span class="icon is-small">
                          <i class="fas fa-check"></i>
                        </span>
                        <span>Save Photo</span>
                      </button>
                    </p>
                </div>
              </form>
            </div>

            <!-- Right Profile Column -->
            <div class="column is-6 is-offset-1 box">
              <h1 class="title">Profile Information</h1>

              <form method="POST" action="updateProfile" style="width:80%;margin-left:auto;margin-right:auto;">
                @csrf
                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="label">Name</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <p class="control is-expanded has-icons-left">
                        <input class="input form-control profile-field"  name="firstname" type="text" value="{{ Auth::user()->firstname }}" disabled>
                        <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                      </p>
                    </div>
                    <div class="field">
                      <p class="control is-expanded has-icons-left">
                        <input class="input form-control profile-field" name="lastname" type="text" value="{{ Auth::user()->lastname }}" disabled>
                        <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="label">Username</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input form-control @error('name') is-invalid @enderror profile-field" type="text" name="username" type="text" value="{{ Auth::user()->username }}" disabled>
                        @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror                
                        <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="label">Birthday</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <p class="control is-expanded has-icons-left">
                        <input type="date" id="birthday" class="input form-control profile-field" name="birthday" value="{{ Auth::user()->birthday }}" disabled>
                        <span class="icon is-small is-left">
                          <i class="fas fa-birthday-cake"></i>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
                

                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="label"></label>
                  </div>
                  <div class="field">
                    <p class="buttons">
                      <button id="updateProfileBtn" class="button is-info" type="button" onclick="updateProfileToggle()">Update Profile</button>
                      <button id="cancelChange" class="button is-danger is-outlined is-hidden" type="button" onclick="updateProfileToggle()">
                        <span>Cancel</span>
                        <span class="icon is-small">
                          <i class="fas fa-times"></i>
                        </span>
                      </button>
                      <button id="saveChangesProfile" type="submit" class="button is-success is-pulled-right is-hidden">
                      <span class="icon is-small">
                        <i class="fas fa-check"></i>
                      </span>
                      <span>Save</span>
                      </button>
                    </p>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- Settings Content -->
      <div class="box">
      <div id="settings" class="dash-content" style="margin-left: 10%">
          <h1 class="title">Change Password</h1>
          <form method="POST" style="width:50%">
            <div class="field-body">
              <div class="field-label is-normal">
                <label class="label">Old Password</label>
              </div>
                  <div class="field-body">
                    <div class="field">
                      <p class="control is-expanded has-icons-left">
                        <input class="input form-control profile-field"  name="password" type="text"  disabled>
                        <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                      </p>
                    </div>
                  </div>
            </div>
            <div class="field-body">
              <div class="field-label is-normal">
                <label class="label">New Password</label>
              </div>
                  <div class="field-body">
                    <div class="field">
                      <p class="control is-expanded has-icons-left">
                        <input class="input form-control profile-field"  name="password" type="text"  disabled>
                        <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                      </p>
                    </div>
                  </div>
            </div>
            <div class="field-body">
              <div class="field-label is-normal">
                <label class="label">Re-enter New Password</label>
              </div>
                  <div class="field-body">
                    <div class="field">
                      <p class="control is-expanded has-icons-left">
                        <input class="input form-control profile-field"  name="password" type="text"  disabled>
                        <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                      </p>
                    </div>
                  </div>
            </div>
            <button style="margin-left: 3%">Confirm</button>
          </form>
          <h1 class="title">Delete Account</h1>
          <button style="background-color: red; margin-left: 3%">Delete</button>

        <div id="test"></div>
      </div>
      </div>
      <!-- HTML Content -->
      <div id="html-menu" class="dash-content">
        <h1>test</h1>
      </div>
      <!-- CSS Content -->

      <!-- JavaScript Content -->
    </main>
  </div>
@endsection

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
    margin-top: 24px;
  }
</style>