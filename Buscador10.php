<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body onload='showOferta("")'>

        <!--Method One-->

        <input onchange="showOferta(this.value)">
        <div id="ofertes"></div>


    </body>

</html>


<script>
function showOferta(str) {
  var xhttp;    

  if (str == "") {
    xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ofertes").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ShowOfertes.php", true);
  xhttp.send();
}


  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ofertes").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ShowOfertes.php?q="+str, true);
  xhttp.send();
}
</script>
