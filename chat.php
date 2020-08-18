<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Commthru</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        margin: 0 auto;
        max-width: 1500px;
        padding: 0;
        background: url("img/apartement.jpg");
    }

    .chat{
      width: 250px;
      height: 40px;
    }

    .chatbox{
        padding: 10px 200px;
    }

    .chat-text{
      position: fixed;
      height: 50px;
      right: 0;
      bottom: 0;
      margin-right: 10px;
      background: #f2f2f2;
    }

    .container {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
    }

    .darker {
        border-color: #ccc;
        background-color: #ddd;
    }

    .container::after {
        content: "";
        clear: both;
        display: table;
    }

    .container img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    .container img.right {
        float: right;
        margin-left: 20px;
        margin-right: 0;
    }

    .time-right {
        float: right;
        color: #aaa;
    }

    .form-control{
        width: 100%;
    }

    .time-left {
        float: left;
        color: #999;

    }
    </style>
</head>

<body>
    
    <div class="chatbox">
        <h2>Chat Messages</h2>
        <div class="container">
            <img src="img/design-1.jpg" alt="Avatar" style="width:50px; height: 50px;">
            <p>Hello. How's the progress of my project?</p>
            <span class="time-right">11:00</span>
        </div>
        <div class="container darker">
            <img src="img/design-1.jpg" alt="Avatar" class="right" style="width:50px; height: 50px; ">
            <p>Your project is still under construction</p>
            <span class="time-left">11:01</span>
        </div>
        <div class="container">
            <img src="img/design-1.jpg" alt="Avatar" style="width:50px; height: 50px;">
            <p>So, when will it gets done?</p>
            <span class="time-right">11:02</span>
        </div>
    <div class="container">
      <form class="form-inline" action="">
        <div class="form-group">
            <input type="text" class="form-control" id="chat" aria-describedby="chat" placeholder="Type your message...">
            <button class="button btn-primary">Send</button>
        </div>
      </form>
    </div>
</body>

</html>