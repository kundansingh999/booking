<x-mail::message>
<p>{{$data['name']}}</p><br>
<p>Event Name - {{$data['events_name']}}</p><br>
<p>Amount - {{$data['amount']}}</p><br>
<p>Event Date - {{$data['event_date']}}</p><br>
<p>Time - {{$data['time']}}</p><br>





Thank you for booking Ticket.

 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
