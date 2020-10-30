<!-- <script src="/js/jquery.min.js"></script>
<script src="/plugin/confetti/confetti.js"></script>
<div class="preloader">
    <div class="loader"></div>
</div>
<canvas id="my-canvas"></canvas>
<style>
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    //background-color: #000;
    transition: 1s;
}
.preloader:before {
    content: '';
    position: absolute;
    left: 0;
    width: 50%;
    height: 100%;
    background: #000;
    transition: 1s;
}
.preloader.complete:before {
    left: -50%;
}
.preloader:after {
    content: '';
    position: absolute;
    right: 0;
    width: 50%;
    height: 100%;
    background: #000;
    transition: 1s;
}
.preloader.complete:after {
    right: -50%;
}
/* Loading Cube */
.loader {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    box-sizing: border-box;
    border: 3px solid #fff;
    animation: animate 2s linear infinite;
    z-index: 10000;
}
.loader:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #fff;
    animation: animateBg 2s linear infinite;
}
.preloader.complete {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}
@keyframes animate {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
    }
    25% {
        transform: translate(-50%, -50%) rotate(180deg);
    }
    50% {
        transform: translate(-50%, -50%) rotate(180deg);
    }
    75% {
        transform: translate(-50%, -50%) rotate(360deg);
    }
    100% {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}
@keyframes animateBg {
    0% {
        height: 0;
    }
    25% {
        height: 0;
    }
    50% {
        height: 100%;
    }
    75% {
        height: 100%;
    }
    100% {
        height: 0;
    }
}
</style>

<script type="text/javascript">
    $(window).on('load', function(){ //remove setTimeout function before web launch
        setTimeout(function (){ //delete this line
            $('.preloader').addClass('complete');
        }, 1000); //delete this line
    });
    
    confetti.start();
</script> -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script> -->
    <link rel="stylesheet" href="/plugin/bulma-carousel/css/bulma-carousel.min.css" />
    <script defer src="/plugin/bulma-carousel/js/bulma-carousel.min.js"></script>
    <script defer src="/js/test.js"></script>
  </head>
  <body>
    <section class="section">
      <div class="container is-clipped">
        <div id="slider">
          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img
                  src="https://images.unsplash.com/photo-1550921082-c282cdc432d6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                  alt=""
                />
              </figure>
            </div>
            <div class="card-content">
              <div class="item__title">
                Mon titre 1
              </div>
              <div class="item__description">
                Ici une petite description pour tester le slider
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img
                  src="https://images.unsplash.com/photo-1550945771-515f118cef86?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80"
                  alt=""
                />
              </figure>
            </div>
            <div class="card-content">
              <div class="item__title">
                Mon titre 2
              </div>
              <div class="item__description">
                Ici une petite description pour tester le slider
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img
                  src="https://images.unsplash.com/photo-1550971264-3f7e4a7bb349?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                  alt=""
                />
              </figure>
            </div>
            <div class="card-content">
              <div class="item__title">
                Mon titre 3
              </div>
              <div class="item__description">
                Ici une petite description pour tester le slider
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img
                  src="https://images.unsplash.com/photo-1550931937-2dfd45a40da0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                  alt=""
                />
              </figure>
            </div>
            <div class="card-content">
              <div class="item__title">
                Mon titre 4
              </div>
              <div class="item__description">
                Ici une petite description pour tester le slider
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img
                  src="https://images.unsplash.com/photo-1550930516-af8b8cc4f871?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80"
                  alt=""
                />
              </figure>
            </div>
            <div class="card-content">
              <div class="item__title">
                Mon titre 5
              </div>
              <div class="item__description">
                Ici une petite description pour tester le slider
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <figure class="image video-container is-16by9">
                <iframe type="text/html" src="https://www.youtube.com/embed/H0v773vKS_U" frameborder="0"></iframe>
              </figure>
            </div>
            <div class="card-content">
              <div class="item__title">
                Mon titre 6
              </div>
              <div class="item__description">
                Ici une petite description pour tester le slider
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
