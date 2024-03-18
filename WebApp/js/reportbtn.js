function sendReport() {
    var txt;
    if (confirm("Send Current Report via email")) {
      txt = "You pressed OK!";
    } else {
      txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
  }