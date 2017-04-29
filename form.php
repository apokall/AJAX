<html>
<head>
  <meta charset="utf-8" />
  <title>AJAX</title>
</head>
   <body>
     <script src="script.js"></script>
     <script
       src="https://code.jquery.com/jquery-3.2.1.js"
       integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
       crossorigin="anonymous"></script>

<p><input id="numberOne" type="text" name="oneNumber" placeholder="число	1"></p>
<p><input id="numberTwo" type="text" name="twoNumber" placeholder="число	2"></p>
<p><input id="plus" name="optionRadio" type="radio" value="plus"> +</p>
<p><input id="minus" name="optionRadio" type="radio" value="minus"> -</p>
<p><input id="multiply" name="optionRadio" type="radio" value="multiply"> *</p>
<p><input id="degree" name="optionRadio" type="radio" value="degree"> /</p>
<input type="submit" value="Отправить" onclick="Pusk()">
<br>
<p>результат</p>
<div class="ajax" id="ajax">

</div>

</body>
</html>
