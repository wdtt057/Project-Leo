<script src="/js/jquery.min.js"></script>
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
</script>