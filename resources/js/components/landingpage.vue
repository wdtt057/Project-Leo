<template>
    <div>
        <!-- Started Banner Section-->
        <section class="hero is-primary is-medium">
          <div class="hero-body">
            <div class="container">
                <h1 class="title">
                &lt;Eyecatching Header Goes Here&gt;
                </h1>
                <h2 class="subtitle">
                Primary subtitle
                </h2>
            </div>
          </div>
        </section>
        <!--End Banner Section-->
        <section class="section is-small">
          <div class="container">
            <div class="columns">
              <div class="column">
                <h1 class="title is-1">
                Hello World
                </h1>
                <p>
                <strong>Team WAP</strong>'s' first website!
                </p>
              </div>
              <div class="column is-one-fifth">
                <figure class="image is-128x128">
                  <img src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
            </div>
        </div>
        </section>
        <section class="section is-small has-background-light">
          <div class="columns">
            <div class="column is-one-fourth">
              <h2 class="title is-4">&lt;Level One&gt;</h2>
              <ul>
                <li>&bull;blah</li>
                <li>&bull;blah blah</li>
                <li>&bull;blah blah blah</li>
              </ul>
            </div>
            <div class="column is-one-fourth">
              <h2 class="title is-4">&lt;Level Two&gt;</h2>
                <ul>
                  <li>&bull;blah</li>
                  <li>&bull;blah blah</li>
                  <li>&bull;blah blah blah</li>
                </ul>
            </div>
            <div class="column is-one-fourth">
              <h2 class="title is-4">&lt;Level Three&gt;</h2>
                <ul>
                  <li>&bull;blah</li>
                  <li>&bull;blah blah</li>
                  <li>&bull;blah blah blah</li>
                </ul>
            </div>
            <div class="column is-one-fourth">
              <h2 class="title is-4">&lt;Level Four&gt;</h2>
                <ul>
                  <li>&bull;blah</li>
                  <li>&bull;blah blah</li>
                  <li>&bull;blah blah blah</li>
                </ul>
            </div>
          </div>
        </section>
    </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>