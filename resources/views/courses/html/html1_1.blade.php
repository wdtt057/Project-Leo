@extends('layouts.course')

@section('content')
    <nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li>
        <a href="#">
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
            <span>Lesson 1</span>
        </a>
        </li>
    </ul>
    </nav>
    <section class="section">
        <h1>HTML LESSON 1</h1>
        <div class="columns">
            <div class="column">
                <div class="box has-background-primary">Lesson goes here I guess
                </div>
            </div>
            <div class="column">
                <div class='is-full section box has-background-black'>
                    <div id="htmlEditor" onkeyup="executeCode()"></div>
                </div>
                <div class='is-full box'> 
                    <h2>Output</h2>
                    <div id="iframewrapper" class="section has-background-light"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
