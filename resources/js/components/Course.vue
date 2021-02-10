<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Course</div>
                    <div class="card-body">
                        <h1>HTML</h1>
                        <img src = "\images\courses_html.png"  width = "700px">
                        <p>“Hypertext Markup Language” is the skeleton of a webpage. It is used to define a webpage’s structure.</p>
                    </div>
                    <div class="card-body">
                        <h1>CSS</h1>
                        <img src = "\images\courses_css_placeholder.png" width = "700px">
                        <p>“Cascading Style Sheets” is used in conjunction with HTML to define the look of a webpage.</p>
                    </div>
                    <div class="card-body">
                        <h1>JavaScript</h1>
                        <img src = "\images\courses_javascript_placeholder.png" width = "700px">
                        <p>JavaScript is used in conjunction with HTML to define the behavior of a webpage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
