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
          <a href="/about" class="navbar-item">About</a>
          <a href="/course" class="navbar-item">Courses</a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Resources</a>
            <div class="navbar-dropdown">
              <a class="navbar-item" href="https://www.w3schools.com/" target="_blank">W3 Schools</a>
              <a class="navbar-item" href="https://www.geeksforgeeks.org/" target="_blank">Geeks for Geeks</a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="/contact-us" style="color:#41CAE5; font-weight: bold;">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-warning" href="/register">
                <strong>Create Account</strong>
              </a>
              <a class="button is-outlined is-link" href="/login">
                <strong>Login</strong>
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
<style>
  .is-yellow{
      background-color: #eeec66!important;
  }
</style>
