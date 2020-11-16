<template>
    <aside class="column is-2">
      <nav class="menu">
        <p class="menu-label">
          General
        </p>
        <ul class="menu-list">
          <li><a class="">Dashboard <i class="far fa-chart-bar"></i></a></li>
        </ul>
        <p class="menu-label">
          Courses
        </p>
        <ul class="menu-list">
          <li><a>Introduction</a></li>
          <li>
            <a id="HTML" class="has-submenu">HTML</a>
            <ul id="submenuHTML" class="submenu-list">
              <li><a href="/html-lesson1">Lesson 1</a></li>
              <li><a href="/courses/html/level1/lesson2">Lesson 2</a></li>
              <li><a>Lesson 3</a></li>
            </ul>
          </li>
          <li>
            <a id="CSS" class="has-submenu">CSS</a>
            <ul id="submenuCSS" class="submenu-list">
              <li><a href="/css-lesson1">Lesson 1</a></li>
              <li><a>Lesson 2</a></li>
              <li><a>Lesson 3</a></li>
            </ul>
          </li>
          <li>
            <a id="JS" class="has-submenu">JavaScript</a>
            <ul id="submenuJS" class="submenu-list">
              <li><a>Lesson 1</a></li>
              <li><a>Lesson 2</a></li>
              <li><a>Lesson 3</a></li>
            </ul>
          </li>
        </ul>
        <a class="menu-list" href="/FAQs"><i class="far fa-question-circle"></i>&nbsp;Help Center</a>
      </nav>
    </aside>
</template>
<script>
export default {
    mounted(){
        console.log("aside menu mounted");
    }
}
</script>