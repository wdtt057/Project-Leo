<template>
    <aside class="column is-2 aside hero is-fullheight is-hidden-mobile" style="box-shadow: 0px 0px 32px blue;">
      <nav class="menu">
      <div class="main">
        <ul class="menu-list">
          <p class="menu-label title">
            General
          </p>
          <li><a class="name" href="#dashboard">Dashboard <i class="far fa-chart-bar"></i></a></li>
          <li><a class="name" href="#profile">Profile&nbsp;<i class="fas fa-user"></i></a></li>
          <li><a class="name" href="#settings">Settings&nbsp;<i class="fas fa-cog"></i></a></li>
          <li>
            <a :href="route" style="color:red;"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <!--{{ __('Logout') }}-->Logout
            <i class="fas fa-sign-out-alt"></i>
            </a>
            <form id="logout-form" action="logout" method="POST" class="d-none">
              <input type="hidden" name="_token" v-bind:value="csrf">
            </form>
          </li>
          <p class="menu-label title">
            Courses
          </p>
          <li>
            <a id="HTML" href="#html-menu" class="has-submenu name">HTML</a>
            <ul id="submenuHTML" class="submenu-list">
              <li><a class="name" href="/html-lesson1">Lesson 1</a></li>
              <li><a class="name" href="/html-lesson2">Lesson 2</a></li>
              <li><a class="name" href="/html-lesson3">Lesson 3</a></li>
            </ul>
          </li>
          <li>
            <a id="CSS" class="has-submenu name">CSS</a>
            <ul id="submenuCSS" class="submenu-list">
              <li><a href="/css-lesson1">Lesson 1</a></li>
              <li><a href="/css-lesson2">Lesson 2</a></li>
              <li><a href="/css-lesson3" >Lesson 3</a></li>
            </ul>
          </li>
          <li>
            <a id="JS" class="has-submenu name">JavaScript</a>
            <ul id="submenuJS" class="submenu-list">
              <li><a href="js-lesson1">Lesson 1</a></li>
              <li><a href="js-lesson2">Lesson 2</a></li>
              <li><a href="js-lesson3">Lesson 3</a></li>
            </ul>
          </li>
        </ul>
        <br>
        <a class="menu-list" href="/FAQs"><i class="far fa-question-circle"></i>&nbsp;Help Center</a>
      </div>
      </nav>
    </aside>
</template>
<script>
export default {
  mounted(){
      console.log("aside menu mounted");
  },
  data() {
		logout: "{{ route('logout') }}"
    return {
			isActive: false,
			csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }
  },
  methods: {
    burgerToggle(){
      this.isActive  = !this.isActive;
    }
  },
	props : [
		'user',
		'route',
		]
}
</script>