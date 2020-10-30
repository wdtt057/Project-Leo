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
    <link rel="stylesheet" href="/plugin/glider/css/glider.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  </head>
  <body>
    <div class="container">
      <div class="glider-contain">
        <div class="glider">
          <div><figure><img src="\images\lesson-slides\html\body.png" alt=""/></figure></div>
          <div><figure><img src="\images\lesson-slides\html\h1.png" alt=""/></figure></div>
          <div><figure><img src="\images\lesson-slides\html\h2.png" alt=""/></figure></div>
          <div><figure><img src="\images\lesson-slides\html\h3.png" alt=""/></figure></div>
        </div>
        <button aria-label="Previous" class="glider-prev">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button aria-label="Next" class="glider-next">
          <i class="fa fa-chevron-right"></i>
        </button>
        <div role="tablist" id="dots"></div>
      </div>
    </div>
    <script src="/plugin/glider/js/glider.min.js"></script>
    <script>
      new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        dots: '#dots',
        draggable: true,
        arrows: {
          prev: '.glider-prev',
          next: '.glider-next'
        }
      });
    </script>
  </body>
</html>
