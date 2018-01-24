<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <img src="{{asset('images/logo.jpg')}}" width="150" height="50">

    <h1>You Have a New Message Via the Contact form</h1>

    <p><b>Name: &nbsp;{{ $content_name }}</b></p>

    <p><b>Message:</b></p>

    <p>{{ $content_message }}</p>

</body>
</html>