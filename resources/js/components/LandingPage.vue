<template>
    <div class="main">
        <!-- Started Banner Section-->
        <section class="has-background-black-ter">
              <h1 class="title is-1 typed-title">
                System.out.println(
                <span class="typed-text">{{ typeValue }}</span>
                <span class="cursor" :class="{'typing': typeStatus}">&nbsp;</span>
                );
              </h1>
              <h2 class="subtitle">
              Primary subtitle
              </h2>
        </section>
        <section>
          Test 2
        </section>
        <!--End Banner Section-->
        <!--Major Selling Point Section-->

        <!--Programming Concepts Difficulty Section-->

        <!--Team Section-->
        
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
