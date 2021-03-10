<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My custom Bulma website</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
     <h1 class="title">
        Bulma
      </h1>

      <p class="subtitle">
        Modern CSS framework based on <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">Flexbox</a>
      </p>

      <div class="field">
        <div class="control">
          <input class="input" type="text" placeholder="Input">
        </div>
      </div>

      <div class="field">
        <p class="control">
          <span class="select">
            <select>
              <option>Select dropdown</option>
            </select>
          </span>
        </p>
      </div>

      <div class="buttons">
        <a class="button is-primary">Primary</a>
        <a class="button is-link">Link</a>
      </div>

      <form method="GET" action="retrieveScores">
        @csrf
        <button class="button is-success is-outlined" type="submit">Test button</button>
      </form>
      <div id="result"></div>
  </body>
  <script>
  $(document).ready(function() {
      $.ajax({
        url: 'retrieveScores',
        method: 'GET',
        dataType: 'json',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data){
          var result = [];
          for(var i in data)
              result.push(data[i].score);
              
          $('#result').html(JSON.stringify(result));
        },
        error: function(res){
          console.log('Error - Ajax Failed: ');
          console.log(res);
        }
      });
  });
  </script>
</html>