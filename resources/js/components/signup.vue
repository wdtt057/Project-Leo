<template>
  <div>
    <section class="section is-small">
      <div class="columns">
        <div class="column is-half is-offset-one-quarter">
          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input
                class="input"
                type="email"
                placeholder="email@blahblahblah.com"
                name="email"
              />
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              </div>
            <label class="label">Username</label>
            <div class="control has-icons-left has-icons-right">
              <input
                class="input"
                type="text"
                placeholder="Username"
                name="user"
              />
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>
          <div class="control">
              <label class="label">Password</label>
              <input class="input" type="password" name="new-password" />
              <label class="label">Confirm Password</label>
              <input class="input" type="password" name="confirm-password" />
          </div>
          </div>
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Register</button>
            </div>
          </div>
          <hr>
            <p>Already have an account? Sign in <a href="/login">here</a>.</p>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Login mounted.");
  },
  data() {
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }
  },
};
</script>