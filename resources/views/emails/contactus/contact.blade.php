@component('mail::message')

Hello this message from  {{ $data['fname'] }} {{ $data['lname'] }}
Email : {{$data['email']}}
<br>
{{$data['subject']}}
<br> 
<p class="lead">


{{$data['message']}}
</p>

<br>

