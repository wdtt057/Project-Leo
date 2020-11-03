@extends('layouts.course_button_drag')

@section('content')
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
@endsection
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