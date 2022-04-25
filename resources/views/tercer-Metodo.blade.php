<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script type="text/javascript" src="http://www.google.com/jsapi?key=INSERT-YOUR-KEY"></script>
<script type="text/javascript">
  google.load("jquery", "1.4.2");
  google.load("swfobject", "2.2");
  google.setOnLoadCallback(function() {
    $(function() {
      // Place init code here instead of $(document).ready()
    });
  });
</script>
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var PUSHER_APP_KEY = "60cf4525f7166c18e005"
    var pusher = new Pusher(PUSHER_APP_KEY, {
      cluster: 'mt1',
      forceTLS: true
    });

    var channel = pusher.subscribe('channel_Movil');
    channel.bind('event_Movil', function(data) {
      // alert(JSON.stringify(data));

      const message = data.data
      var node = document.createElement("LI");
      var textnode = document.createTextNode(message.valor);
      node.appendChild(textnode);
      document.getElementById("myList").appendChild(node);

      if(message.valor == 1)
      {
        console.log(data.data)
        window.location.href = "http://192.168.2.4/Inicio";
      }
      else{
        window.location.href = "https://192.168.2.4/tokenLogout";
      }
});

  </script>
<style>
  
body {
  background: #D84614
		
	}
    .form-inline {
        display: inline-block;
        font-family: 'Merienda One', sans-serif;
        background: #D84614;
    }

    .box {
     background: #D84614       
  /* background: linear-gradient(to right, #000046, #1cb5e0);   */
}

    </style>
</head>
<body>
<div class="box">
  <center><h1>Por favor verifique su celular para continuar</h1>

  <ul id="myList">
   
  </ul>
</center>
  </div>
</body>
