<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="content" style="width:100%;height:auto;">

        </div>
        <div class="message" style="width:100%;height:100px;position:fixed;bottom:0;left:0">
            <input type="text" class="msg" style="width:90%;height:100%;float:left;"><button class="send" style="width:9%;;height:100%;float:left;cursor:pointer;">提交</button>
        </div>
    </body>
    <script src="/js/jquery-1.10.1.min.js"></script>
    <script>
var wsServer = 'ws://39.108.136.27:9502';
var websocket = new WebSocket(wsServer);
websocket.onopen = function (evt) {
    console.log("Connected to WebSocket server.");
};
websocket.onmessage = function (evt) {
    
    $(".content").append(evt.data+"<br>");
};


$("button.send").on("click", function(){
    var myDate = new Date();
    var now = myDate.toLocaleString();
    var user = "<?php echo $user?>";
    console.log($("input.msg").val());
    websocket.send(now+"&emsp;&emsp;"+user+":<br>"+$("input.msg").val());
    return false;
});
    </script>
</html>
