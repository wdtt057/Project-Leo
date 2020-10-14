<template>
    <div>
        <!-- Started Banner Section-->
        <section class="hero is-medium has-background-black-ter">
          <div class="hero-body">
            <div class="container">
                <h1 class="title is-1 typed-title">
                  System.out.println(
                  <span class="typed-text">{{ typeValue }}</span>
                  <span class="cursor" :class="{'typing': typeStatus}">&nbsp;</span>
                  );
                </h1>
                <h2 class="subtitle">
                Primary subtitle
                </h2>
            </div>
          </div>
        </section>
        <!--End Banner Section-->
        <!--Major Selling Point Section-->
        <section class="section is-small">
          <div class="container">
            <div class="columns">
              <div class="column">
                <h1 class="title is-1">
                    Be the leaders of your generation!
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Help, my name is Elizabeth and I'm being held hostage. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="column is-two-fifths">
                <figure class="image is-4by3">
                  <img src="\images\default_kidcoding.jpg">
                </figure>
              </div>
            </div>
        </div>
        </section>
        <!--Programming Concepts Difficulty Section-->
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
        <!--Team Section-->
        <section class="section is-small">
          <div class="columns" style="text-align: center;">
            <div class="column is-one-fifth">
              <a href="/about/#Elizabeth-Barbieto">
                <figure class="image is-1by1">
                  <img class="is-rounded" src="\images\default_icon_me.jpg">
                </figure>
              </a>
              <h3 class="title is-4"><a href="/about/#Elizabeth-Barbieto">Elizabeth Barbieto</a></h3>
            </div>
            <div class="column is-one-fifth">
              <a href="/about/#Ryan-Catterson">
                <figure class="image is-1by1">
                  <img class="is-rounded" src="\images\default_icon_ryan.png">
                </figure>
              </a>
              <h3 class="title is-4"><a href="/about/#Ryan-Catterson">Ryan Catterson</a></h3>
            </div>
            <div class="column is-one-fifth">
              <a href="/about/#Teresa-Doan">
                <figure class="image is-1by1">
                  <img class="is-rounded" src="\images\default_icon_teresa.jpg">
                </figure>
              </a>
              <h3 class="title is-4"><a href="/about/#Teresa-Doan">Teresa Doan</a></h3>
            </div>
            <div class="column is-one-fifth">
              <a href="/about/#Joshua-Mejia">
                <figure class="image is-1by1">
                  <img class="is-rounded" src="\images\default_icon_josh.png">
                </figure>
              </a>
              <h3 class="title is-4"><a href="/about/#Joshua-Mejia">Joshua Mejia</a></h3>
            </div>
            <div class="column is-one-fifth">
              <a href="/about/#Dengtai-Wang">
                <figure class="image is-1by1">
                  <img class="is-rounded" src="\images\default_icon_dengtai.jpg">
                </figure>
              </a>
              <h3 class="title is-4"><a href="/about/#Dengtai-Wang">Dengtai Wang</a></h3>
            </div>
          </div>
        </section>
    </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Landing Page mounted.')
    },
    data: () => {
      return {
        typeValue: '',
        typeStatus: false,
        typeArray: ['"Hello World!"' , '"Welcome to Project L.E.O."'],
        typingSpeed: 100,
        erasingSpeed: 100,
        newTextDelay: 2000,
        typeArrayIndex: 0,
        charIndex: 0
      }
    },
    methods: {
      typeText() {
        if(this.charIndex < this.typeArray[this.typeArrayIndex].length) {
          if(!this.typeStatus)
            this.typeStatus = true;

          this.typeValue += this.typeArray[this.typeArrayIndex].charAt(this.charIndex);
          this.charIndex += 1;

          setTimeout(this.typeText, this.typingSpeed);
        }
        else{
          this.typeStatus = false;
          setTimeout(this.eraseText, this.newTextDelay);
        }
      },
      eraseText() {
        if(this.charIndex > 0) {
          if(!this.typeStatus)
            this.typeStatus = true;
          
          this.typeValue = this.typeArray[this.typeArrayIndex].substring(0, this.charIndex - 1);
          this.charIndex -= 1;
          setTimeout(this.eraseText, this.erasingSpeed);
        }
        else {
          this.typeStatus = false;
          this.typeArrayIndex += 1;
          if(this.typeArrayIndex >= this.typeArray.length)
            this.typeArrayIndex = 0;
          setTimeout(this.typeText, this.typingSpeed + 1000);
        }
      }
    },
    created() {
      setTimeout(this.typeText, this.newTextDelay + 200);
    }
  }
</script>

<style lang="scss" scoped>
  .typed-title{
    color: white;
  }
  span.typed-text {
    color:#7e05ff;
  }
  span.cursor {
      display: inline-block;
      margin-left: 3px;
      width: 4px;
      background-color: #7e05ff;
      animation: cursorBlink 1s infinite;
    }
  span.cursor.typing {
    animation: none;
  }
  @keyframes cursorBlink {
    49% { background-color: #7e05ff; }
    50% { background-color: transparent; }
    99% { background-color: transparent; }
  }
</style>
