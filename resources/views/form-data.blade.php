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
<form action="/data-handle/form" method="post">
    @csrf
    <div>
        Event Name <input type="text" name="eventName">
    </div>

    <div>
        Band Names <input type="text" name="bandNames">
    </div>

    <div>
        Start Date <input type="date" name="startDate">
    </div>

    <div>
        End Date <input type="date" name="endDate">
    </div>

    <div>
        Portfolio <input type="text" name="portfolio">
    </div>

    <div>
        Ticket Price <input type="number" name="ticketPrice">
    </div>

    <div>
        Status <input type="number" name="status">
    </div>

    <div>
        <button>Submit</button>
    </div>
</form>
</body>
</html>
