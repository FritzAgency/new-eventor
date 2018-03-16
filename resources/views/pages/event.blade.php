@foreach ($event as $event)

       <p> <h1>Title: {{ $event->title }}</h1> </p>
       <p> <h2>Description:{{$event->description }}</h2> </p> 
       <p> <h2> Address:{{$event->Address}} </h2> </p>
       <p> <h2> Ticket Qty: {{$event->ticket_qty}}</h2></p>

       <p> <h2> Ticket Price : {{$event->ticket_price}}</h2></p>

       <p>  <img src="/{{$event->event_flyer}}" alt="event_flyer" height="150px" width="150px"/>  </p>
       @endforeach
