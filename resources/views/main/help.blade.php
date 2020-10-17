@extends('layouts.base')

@section('content')
<section class="hero">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">HELP ME IM A SMOOTH BRAIN PLS</h1>
    </div>
  </div>
</section>
<section class="section is-small">
	<div class="columns">
		<div class="column">
			<nav class="panel">
				<p class="panel-heading">
					Daddii
				</p>
				<div class="panel-block">
					<p class="control has-icons-left">
						<input class="input" type="text" placeholder="Search">
						<span class="icon is-left">
							<i class="fas fa-search" aria-hidden="true"></i>
						</span>
					</p>
				</div>
				<p class="panel-tabs">
					<a class="is-active">All</a>
					<a>Public</a>
					<a>Private</a>
					<a>Sources</a>
					<a>Forks</a>
				</p>
				<a class="panel-block is-active">
					<span class="panel-icon">
						<i class="fas fa-book" aria-hidden="true"></i>
					</span>
					bulma
				</a>
				<a class="panel-block">
					<span class="panel-icon">
						<i class="fas fa-book" aria-hidden="true"></i>
					</span>
					marksheet
				</a>
				<a class="panel-block">
					<span class="panel-icon">
						<i class="fas fa-book" aria-hidden="true"></i>
					</span>
					minireset.css
				</a>
				<a class="panel-block">
					<span class="panel-icon">
						<i class="fas fa-book" aria-hidden="true"></i>
					</span>
					jgthms.github.io
				</a>
				<a class="panel-block">
					<span class="panel-icon">
						<i class="fas fa-code-branch" aria-hidden="true"></i>
					</span>
					daniellowtw/infboard
				</a>
				<a class="panel-block">
					<span class="panel-icon">
						<i class="fas fa-code-branch" aria-hidden="true"></i>
					</span>
					mojs
				</a>
				<label class="panel-block">
					<input type="checkbox">
					remember me
				</label>
				<div class="panel-block">
					<button class="button is-link is-outlined is-fullwidth">
						Reset all filters
					</button>
				</div>
			</nav>
		</div>
		<div class="column is-two-thirds">
			Shit goes in here
		</div>
	</div>
</section>
@endsection
