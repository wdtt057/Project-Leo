<template>
    <div>
        <section class="section">
        <section class="hero is-primary">
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
        <div class="container">
            <div class="columns">
              <div class="column is-one-third">
                <figure class="image is-128x128">
                  <img src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
              <div class="column">
                <h1 class="title">
                Hello World
                </h1>
                <p class="subtitle">
                My first website with <strong>Bulma</strong>!
                </p>
              </div>
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
