<li class="{{Route::is('staff*') ? 'active' : ''}}"><a href="{{route('staff.staff.index')}}">Staff</a></li>
<li class="{{Route::is('pilots*') ? 'active' : ''}}"><a href="{{route('pilots.pilot.index')}}">Pilots</a></li>
<li class="{{Route::is('pilot_ratings*') ? 'active' : ''}}"><a href="{{route('pilot_ratings.pilot_rating.index')}}">Pilot Ratings</a></li>
<li class="{{Route::is('airplane_ratings*') ? 'active' : ''}}"><a href="{{route('airplane_ratings.airplane_rating.index')}}">Airplane Ratings</a></li>
<li class="{{Route::is('airplanes*') ? 'active' : ''}}"><a href="{{route('airplanes.airplane.index')}}">Airplanes</a></li>
<li class="{{Route::is('flights*') ? 'active' : ''}}"><a href="{{route('flights.flight.index')}}">Flights</a></li>
<li class="{{Route::is('schedules*') ? 'active' : ''}}"><a href="{{route('schedules.schedule.index')}}">Schedules</a></li>
<li class="{{Route::is('crews*') ? 'active' : ''}}"><a href="{{route('crews.crew.index')}}">Crew</a></li>
<li class="{{Route::is('passengers*') ? 'active' : ''}}"><a href="{{route('passengers.passenger.index')}}">Passengers</a></li>
<li class="{{Route::is('bookings*') ? 'active' : ''}}"><a href="{{route('bookings.booking.index')}}">Bookings</a></li>

