

<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>CPITER</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>

<link href="loader.css" rel="stylesheet"/>
            <link rel="stylesheet" type="text/css" href="cgpa.css">



</head>
<body>
    <div class="se-pre-con"></div>
  <div class="upar">
<h2 class="h2" style="font-size: 35px;">CPITER</h2>
  </div>

  <div class="main" id="zak">
  <div  class="ui attached message blue">
  <div class="header">
    Welcome to CPITER
  </div>
  <p>Hello Students..CPITER is a simple cgpa-to-% converter..just enter your cgpa/sgpa/cpi and get percentage result</p>
  </div>



  <div class="field">
    <label for="username">talk with jamBOT</label>
    <div class="ui action input">
  <input id="input" type="text" name="text" placeholder="Say">
  <button id="submit" class="ui icon button">
    <i class="reply icon"></i>
  </button>
</div>

  </div>

<div id="response">

</div>

  <div class="ui bottom attached warning message">
  </span><span><i class="icon book"></i><a href="https://github.com/zmf0507/CPITER/blob/master/README.md" target = "_blank">Read documentation</a></span>
  </div>


  </div>


</body>
<script>
$('select.dropdown')
  .dropdown()
;
</script>

<script src="loader.js"></script>
<script src="chatbot.js"></script>
</html>
