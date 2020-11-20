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
          System.out.println("<span class="has-text-primary" id="text"></span><span id="cursor"></span>");
        </h1>
        <h2 class="subtitle">
        Primary subtitle
        </h2>
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
              <h1 class="title is-1" style="color:#4dc1e4;">
                  Be the leaders of your generation!
              </h1>
              <p class="subtitle is-4">Learn Web Development by learning to code in HTML, CSS and Javascript.</p>
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
      <div class="hero is-large is-bold">
        <div class="hero-body">
          <div class="columns">
            <div class="column is-one-third">
              <figure> <img src="\images\html-logo.png" alt="" width="250px" height="250px"></figure>
            </div>
            <div class="column is-one-third">
            <figure> <img src="\images\css-logo.png" alt="" width="250px" height="250px"></figure>
            </div>
            <div class="column is-one-third">
            <figure> <img src="\images\js-logo.png" alt="" width="250px" height="250px"></figure>
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
