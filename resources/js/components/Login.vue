<template>
  <div>
    <section class="section is-small">
      <div class="columns">
        <div class="column is-half is-offset-one-quarter">
          <div class="field">
            <label class="label">Username</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="text" placeholder="Username" name="user">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>
            <div class="control">
              <label class="label">Password</label>
              <input class="input" type="password" name="password" />
            </div>
          </div>
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Sign In</button>
            </div>
          </div>
          <hr>
            <p>New User? Create an account <a href="/signup">here</a>.</p>
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
};
</script>
