@extends('layouts.base')

@section('content')
    <!--<contact-page></contact-page>-->
    <section class="section is-small">
    </section>
    <section class="section is-small">
        <div class="columns">
            <div class="column is-two-fifths"> 
                <img src="\images\background_img_2.png" alt="contactTest">
            </div>
            <div class="column">
								@if(Session::get('message_sent'))
									<div class="notification is-success is-light" role="alert">
									{{Session::get('message_sent')}}
									</div>
								@endif
                <section class="section is-small box is-lavender">
                <h1 class="title is-1 has-text-centered">Contact Us!ヾ(＠＾▽＾＠)ﾉ</h1>
                <!--Start of form-->
                  <form method="POST" action="{{route('contact.send')}}"enctype="multipart/form-data">
									@csrf
									<!-- Top Row -->
									<div class="field is-horizontal">
                    <div class="field-label is-normal">
											<label class="label">From</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input" type="text" name="name" placeholder="Name">
                          <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input" type="email" name="email" placeholder="Iki_shiba1@ptsmxrt.de">
                          <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
									<!-- Subject -->
									<div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">Subject</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <input class="input" type="text" name="msg" placeholder="e.g. Site is broken">
                        </div>
                      </div>
                    </div>
                  </div>
									<!-- Text Area -->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">Message</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
									<!-- Form Buttons -->
									<div class="field is-horizontal">
                    <div class="field-label">
                      <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <button type="submit" class="button is-royal-blue">Send message</button>
                        </div>
                      </div>
                    </div>
                  </div>  
                </form>
                <!--End of Form-->
              </section>
              </div>
            </div>
    </section>
    @endsection
    
<style>
  .is-royal-blue{
    background-color: #265eaa!important;
    border-color:#265eaa!important;
    color: white!important;
  }
  .is-lavender{
    background-color: #a394de!important;
  }
  </style>