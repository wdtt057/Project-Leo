<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

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
<nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li>
      <a href="/home">
        <span class="icon is-small">
        <i class="fas fa-home" aria-hidden="true"></i>
        </span>
        <span>Home</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon is-small">
        <i class="fab fa-html5" aria-hidden="true"></i>
        </span>
        <span>HTML</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon is-small">
        <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
        </span>
        <span>Level 1</span>
      </a>
    </li>
    <li class="is-active">
      <a href="#">
        <span class="icon is-small">
        <i class="fas fa-pencil-alt" aria-hidden="true"></i>
        </span>
        <span>Lesson 2</span>
      </a>
    </li>
  </ul>
</nav>
<section class="section">
  <div class="columns">
    <div class="column is-half">
      <div class="box">
        Dragging shit from here
        <div class="lists">
			<div class="list">
				<div id="test" class="list-item" draggable="true">Something</div>
				<div class="list-item" draggable="true">Like</div>
				<div class="list-item" draggable="true">That</div>
			</div>
		</div>
      </div>
    </div>
    <div class="column is-half">
      <div class="box">
        and putting it here
        <div class="lists">
			<div class="list"></div>
		</div>
      </div>
    </div>
  </div>
</section> 
<style>
.lists {
	display: flex;
	flex: 1;
	width: 100%;
}

.lists .list {
	display: flex;
	flex-flow: column;
	flex: 1;

	width: 100%;
	min-width: 250px;
	max-width: 350px;
	height: 100%;
	min-height: 150px;

	background-color: rgba(0, 0, 0, 0.1);
	margin: 0 15px;
	padding: 8px;
	transition: all 0.2s linear;
}

.lists .list .list-item {
	background-color: #F3F3F3;
	border-radius: 8px;
	padding: 15px 20px;
	text-align: center;
	margin: 4px 0px;
}
</style>
<script>
const list_items = document.querySelectorAll('.list-item');
const lists = document.querySelectorAll('.list');

let draggedItem = null;

for (let i = 0; i < list_items.length; i++) {
	const item = list_items[i];

	item.addEventListener('dragstart', function () {
		draggedItem = item;
		setTimeout(function () {
			item.style.display = 'none';
		}, 0)
	});

	item.addEventListener('dragend', function () {
		setTimeout(function () {
			draggedItem.style.display = 'block';
			draggedItem = null;
		}, 0);
	})

	for (let j = 0; j < lists.length; j ++) {
		const list = lists[j];
		list.addEventListener('dragover', function (e) {
			e.preventDefault();
		});
		
		list.addEventListener('dragenter', function (e) {
			e.preventDefault();
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
		});

		list.addEventListener('dragleave', function (e) {
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
		});

		list.addEventListener('drop', function (e) {
			console.log('drop');
			this.append(draggedItem);
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
		});
	}
}
var test = document.getElementById("test");
console.log(test.innerHTML);
</script>