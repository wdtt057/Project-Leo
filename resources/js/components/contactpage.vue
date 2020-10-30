<template>
    <div>
        <section class="section is-small">
            <h1 class="title is-1 has-text-centered">Contact Us!ヾ(＠＾▽＾＠)ﾉ</h1>
        </section>
        <hr>
        <section class="section is-small">
            <div class="columns">
                <div class="column is-half"> 
                  <img src="\images\contactpage_test.jpg" alt="contactTest" style="opacity:0.8">
                </div>
                <div class="column is-half">
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">From</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input" type="text" placeholder="Name">
                          <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input" type="email" placeholder="Email" value="example@blahblahblah.com">
                          <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">Subject</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <input class="input" type="text" placeholder="e.g. Site is broken">
                        </div>
                        <p class="help is-danger" style="display: none;">
                          This field is required
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">Message</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="field is-horizontal">
                    <div class="field-label">
                      <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <button class="button is-primary">
                            Send message
                          </button>
                        </div>
                      </div>
                    </div>
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