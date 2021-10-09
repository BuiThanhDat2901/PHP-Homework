<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Event Name: {{$eventName}}</p>
<p>Band Names: {{$bandNames}}</p>
<p>Start Date: {{$startDate}}</p>
<p>End Date: {{$endDate}}</p>
<p>Portfolio: {{$portfolio}}</p>
<p>Ticket Price: {{$ticketPrice}}</p>
@switch($status)
    @case(1)
    <p>Status: Đang diễn ra</p>
    @break
    @case(2)
    <p>Status: Sắp diễn ra</p>
    @break
    @case(3)
    <p>Status: Đã diễn ra</p>
    @break
@endswitch
</body>
</html>
