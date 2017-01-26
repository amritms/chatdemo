<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat Room</title>
  </head>
  <body>

<h1>Chat Room</h1>

<div id="app">
    <chat-log></chat-log>
    <chat-composer v-on:messagesent="addMessage"></chat-composer>
</div>

  <script type="text/javascript" src="js/app.js"></script>

  </body>
</html>
