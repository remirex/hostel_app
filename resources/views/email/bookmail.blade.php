<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <img src="{{asset('images/logo.jpg')}}" width="150" height="50">

    <h1>You Have a New Book Apartment Via the Book form</h1>

    <h4>Reservation</h4>

    <p><b>Name:</b> &nbsp;{{ $name }}</p>

    <p><b>From: &nbsp;{{ $date_in }}</b>&nbsp;&nbsp;<b>To: &nbsp;{{ $date_out }}</b></p>

    <p>Id Room: &nbsp; {{ $room_id }}</p>

</body>
</html>