<!DOCTYPE html>
<html>
<head >
    <title>Event Ticket</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .ticket {
    border: 2px solid black;
    padding: 20px;
    width: 300px; /* Adjust width as needed */
    height: 400px; /* Adjust height as needed */
    background-color: #fff;
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.ticket-details {
    margin-bottom: 20px;
}

.footer {
    text-align: center;
}

/* Customize font, color, and other styles as desired */
    </style>
</head>
<body>
    <div class="ticket">
         <div class="header">
            <h1>Event Name - {{$data->events_name}}</h1>
            <p>Date: {{$data->events_date}}</p>
            <p>Events Time: {{$data->events_time}}</p>
            
        </div>
        <div class="ticket-details">
            <p>User Holder: {{$data->name}}</p>
            <p>Email : {{$data->email}}</p>
            <p>Ticket Booking Date : {{$data->created_at}}</p>
        </div>
        <div class="footer">
            <p>Thank for Booking Ticket.</p>
            <!-- <img src="qr-code.png" alt="QR Code"> -->
        </div>
     </div>
</body>
</html>