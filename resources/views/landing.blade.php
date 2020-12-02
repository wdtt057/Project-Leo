<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Project LEO</title>
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="\css\pageload.css">
    <link rel="stylesheet" href="\css\onepage-scroll.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script defer src="\js\app.js"></script>
    <script src="\js\jquery.min.js"></script>
    <script src="\js\jquery.onepage-scroll.js"></script>
    <script defer src="\js\landing-page.js"></script>
    <style>
      .has-text-yellow{
        color:#eeec66!important;
      }

      .is-royal-blue{
        background-color:#265eaa!important;
        border:#265eaa!important;
      }

      .has-text-royal-blue{
        color:#eeec66!important;
      }

      .is-teal-blue{
        background-color:#49a0c0!important;
        border:#49a0c0!important;

      }
    </style>
  </head>
  <body>
  <div id="app">
        <navbar></navbar>
  </div>
    <div class="main">
    <section id="landing-bg" class="has-background-black-ter">
    <div class="hero is-small is-bold">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-1 has-text-white-bis">
          System.out.println("<span class="has-text-yellow" id="text"></span><span id="cursor"></span>");
        </h1>
        <div class="hero is-fullheight">
          <div class="hero-body">
            <div class="container">
            <h2 class="subtitle has-text-grey-light">
      <strong class="has-text-grey-light"><br><br></strong>
      <strong class="has-text-grey-light">Begin your journey today!<br></strong>
        </h2>
              <button class="button is-teal-blue is-rounded is-large" style="font-weight:bold;color:white;" onclick="window.location.href='/register'">Start Coding</button><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
      </section>
      <section style="background: linear-gradient(#13245b, #01819a);">
      <div class="hero is-large is-bold">
      <div class="hero-body">
        <div class="container">
          <div class="columns">
            <div class="column">
              <h1 class="title is-1 has-text-info" style="">
                  Be the leaders of your generation!
              </h1>
              <p class="subtitle is-4 has-text-grey-light">Get the upperhand and gain skills in web development by learning to code with HTML, CSS and Javascript.</p>
            </div>
            <div class="column is-two-fifths">
              <figure class="image">
                <img src="\images\landing-kids.png">
              </figure>
            </div>
          </div>
      </div>
      </div>
    </div>
      </section>
      <section style="background: linear-gradient(#01819a, #88019f);">      
      <div class="hero is-medium is-bold">
        <div class="hero-body">
          <div class="columns">
            <div class="column is-one-third">
              <figure class="center"> <img src="\images\html-logo.png" alt="" width="250px" height="250px"><br>
              Used to organize and give structure to the content and elements. Some properties are used to either reference a CSS rule to apply style or to trigger a JavaScript function to create interactivity. Important: It can be modified later on using JavaScript!
            </figure>
              
            </div>
            <div class="column is-one-third">
            <figure class="center"> <img src="\images\css-logo.png" alt="" width="250px" height="250px"><br>
            Used to make everything pretty with style, but it also has this superpower of making elements appear and disappear using the display or visibility properties. Important: It needs to be referenced by an html element, and it can be modified later on using JavaScript!
              </figure>
            </div>
            <div class="column is-one-third">
            <figure class="center"> <img src="\images\js-logo.png" alt="" width="250px" height="250px"><br>
            This guy is a beast, it creates and destroys HTML tags or CSS rules dinamically, whenever and whatever you want. 
          </figure>
            
            </div>
          </div>
        </div>
      </div>
      </section>
    </div>
  <div class="preloader">
    <div class="loading-cube"></div>
  </div>
  </body>
</html>
