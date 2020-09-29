<template>
  <nav class="navbar is-dark">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="/">
          <img title="" src="" alt="">
          Project LEO
        </a>
        <span class="navbar-burger burger" :class="{'is-active':isActive}" @click="burgerToggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
    <div id="navMenu" class="navbar-menu" :class="{'is-active':isActive}">
      <div class="navbar-start">
          <a href="#" class="navbar-item">About</a>
          <a href="#" class="navbar-item">Pricing</a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Resources</a>
            <div class="navbar-dropdown">
              <a class="navbar-item" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Link 1</a>
              <a class="navbar-item" href="https://www.youtube.com/watch?v=ZZ5LpwO-An4" target="_blank">Link 2</a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="/" style="color:#41CAE5; font-weight: bold;">Contact Us</a>
            </div>
          </div>
      </div>
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-warning">
                <strong>Create Account</strong>
              </a>
              <a class="button is-info">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  data() {
    return {
      isActive: false,
    }
  },
  methods: {
    burgerToggle(){
      this.isActive  = !this.isActive;
    }
  }
}
</script>