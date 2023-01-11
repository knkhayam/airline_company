<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PilotsController;
use App\Http\Controllers\AirplaneRatingsController;
use App\Http\Controllers\AirplanesController;
use App\Http\Controllers\PilotRatingsController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\CrewsController;
use App\Http\Controllers\PassengersController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ConnectionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'staff',
], function () {
    Route::get('/', [StaffController::class, 'index'])
         ->name('staff.staff.index');
    Route::get('/create', [StaffController::class, 'create'])
         ->name('staff.staff.create');
    Route::get('/show/{staff}',[StaffController::class, 'show'])
         ->name('staff.staff.show')->where('id', '[0-9]+');
    Route::get('/{staff}/edit',[StaffController::class, 'edit'])
         ->name('staff.staff.edit')->where('id', '[0-9]+');
    Route::post('/', [StaffController::class, 'store'])
         ->name('staff.staff.store');
    Route::put('staff/{staff}', [StaffController::class, 'update'])
         ->name('staff.staff.update')->where('id', '[0-9]+');
    Route::delete('/staff/{staff}',[StaffController::class, 'destroy'])
         ->name('staff.staff.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'pilots',
], function () {
    Route::get('/', [PilotsController::class, 'index'])
         ->name('pilots.pilot.index');
    Route::get('/create', [PilotsController::class, 'create'])
         ->name('pilots.pilot.create');
    Route::get('/show/{pilot}',[PilotsController::class, 'show'])
         ->name('pilots.pilot.show')->where('id', '[0-9]+');
    Route::get('/{pilot}/edit',[PilotsController::class, 'edit'])
         ->name('pilots.pilot.edit')->where('id', '[0-9]+');
    Route::post('/', [PilotsController::class, 'store'])
         ->name('pilots.pilot.store');
    Route::put('pilot/{pilot}', [PilotsController::class, 'update'])
         ->name('pilots.pilot.update')->where('id', '[0-9]+');
    Route::delete('/pilot/{pilot}',[PilotsController::class, 'destroy'])
         ->name('pilots.pilot.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'airplane_ratings',
], function () {
    Route::get('/', [AirplaneRatingsController::class, 'index'])
         ->name('airplane_ratings.airplane_rating.index');
    Route::get('/create', [AirplaneRatingsController::class, 'create'])
         ->name('airplane_ratings.airplane_rating.create');
    Route::get('/show/{airplaneRating}',[AirplaneRatingsController::class, 'show'])
         ->name('airplane_ratings.airplane_rating.show')->where('id', '[0-9]+');
    Route::get('/{airplaneRating}/edit',[AirplaneRatingsController::class, 'edit'])
         ->name('airplane_ratings.airplane_rating.edit')->where('id', '[0-9]+');
    Route::post('/', [AirplaneRatingsController::class, 'store'])
         ->name('airplane_ratings.airplane_rating.store');
    Route::put('airplane_rating/{airplaneRating}', [AirplaneRatingsController::class, 'update'])
         ->name('airplane_ratings.airplane_rating.update')->where('id', '[0-9]+');
    Route::delete('/airplane_rating/{airplaneRating}',[AirplaneRatingsController::class, 'destroy'])
         ->name('airplane_ratings.airplane_rating.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'airplanes',
], function () {
    Route::get('/', [AirplanesController::class, 'index'])
         ->name('airplanes.airplane.index');
    Route::get('/create', [AirplanesController::class, 'create'])
         ->name('airplanes.airplane.create');
    Route::get('/show/{airplane}',[AirplanesController::class, 'show'])
         ->name('airplanes.airplane.show')->where('id', '[0-9]+');
    Route::get('/{airplane}/edit',[AirplanesController::class, 'edit'])
         ->name('airplanes.airplane.edit')->where('id', '[0-9]+');
    Route::post('/', [AirplanesController::class, 'store'])
         ->name('airplanes.airplane.store');
    Route::put('airplane/{airplane}', [AirplanesController::class, 'update'])
         ->name('airplanes.airplane.update')->where('id', '[0-9]+');
    Route::delete('/airplane/{airplane}',[AirplanesController::class, 'destroy'])
         ->name('airplanes.airplane.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'pilot_ratings',
], function () {
    Route::get('/', [PilotRatingsController::class, 'index'])
         ->name('pilot_ratings.pilot_rating.index');
    Route::get('/create', [PilotRatingsController::class, 'create'])
         ->name('pilot_ratings.pilot_rating.create');
    Route::get('/show/{pilotRating}',[PilotRatingsController::class, 'show'])
         ->name('pilot_ratings.pilot_rating.show')->where('id', '[0-9]+');
    Route::get('/{pilotRating}/edit',[PilotRatingsController::class, 'edit'])
         ->name('pilot_ratings.pilot_rating.edit')->where('id', '[0-9]+');
    Route::post('/', [PilotRatingsController::class, 'store'])
         ->name('pilot_ratings.pilot_rating.store');
    Route::put('pilot_rating/{pilotRating}', [PilotRatingsController::class, 'update'])
         ->name('pilot_ratings.pilot_rating.update')->where('id', '[0-9]+');
    Route::delete('/pilot_rating/{pilotRating}',[PilotRatingsController::class, 'destroy'])
         ->name('pilot_ratings.pilot_rating.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'flights',
], function () {
    Route::get('/', [FlightsController::class, 'index'])
         ->name('flights.flight.index');
    Route::get('/create', [FlightsController::class, 'create'])
         ->name('flights.flight.create');
    Route::get('/show/{flight}',[FlightsController::class, 'show'])
         ->name('flights.flight.show');
    Route::get('/{flight}/edit',[FlightsController::class, 'edit'])
         ->name('flights.flight.edit');
    Route::post('/', [FlightsController::class, 'store'])
         ->name('flights.flight.store');
    Route::put('flight/{flight}', [FlightsController::class, 'update'])
         ->name('flights.flight.update');
    Route::delete('/flight/{flight}',[FlightsController::class, 'destroy'])
         ->name('flights.flight.destroy');
});

Route::group([
    'prefix' => 'schedules',
], function () {
    Route::get('/', [SchedulesController::class, 'index'])
         ->name('schedules.schedule.index');
    Route::get('/create', [SchedulesController::class, 'create'])
         ->name('schedules.schedule.create');
    Route::get('/show/{schedule}',[SchedulesController::class, 'show'])
         ->name('schedules.schedule.show')->where('id', '[0-9]+');
    Route::get('/{schedule}/edit',[SchedulesController::class, 'edit'])
         ->name('schedules.schedule.edit')->where('id', '[0-9]+');
    Route::post('/', [SchedulesController::class, 'store'])
         ->name('schedules.schedule.store');
    Route::put('schedule/{schedule}', [SchedulesController::class, 'update'])
         ->name('schedules.schedule.update')->where('id', '[0-9]+');
    Route::delete('/schedule/{schedule}',[SchedulesController::class, 'destroy'])
         ->name('schedules.schedule.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'crews',
], function () {
    Route::get('/', [CrewsController::class, 'index'])
         ->name('crews.crew.index');
    Route::get('/create', [CrewsController::class, 'create'])
         ->name('crews.crew.create');
    Route::get('/show/{crew}',[CrewsController::class, 'show'])
         ->name('crews.crew.show')->where('id', '[0-9]+');
    Route::get('/{crew}/edit',[CrewsController::class, 'edit'])
         ->name('crews.crew.edit')->where('id', '[0-9]+');
    Route::post('/', [CrewsController::class, 'store'])
         ->name('crews.crew.store');
    Route::put('crew/{crew}', [CrewsController::class, 'update'])
         ->name('crews.crew.update')->where('id', '[0-9]+');
    Route::delete('/crew/{crew}',[CrewsController::class, 'destroy'])
         ->name('crews.crew.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'passengers',
], function () {
    Route::get('/', [PassengersController::class, 'index'])
         ->name('passengers.passenger.index');
    Route::get('/create', [PassengersController::class, 'create'])
         ->name('passengers.passenger.create');
    Route::get('/show/{passenger}',[PassengersController::class, 'show'])
         ->name('passengers.passenger.show')->where('id', '[0-9]+');
    Route::get('/{passenger}/edit',[PassengersController::class, 'edit'])
         ->name('passengers.passenger.edit')->where('id', '[0-9]+');
    Route::post('/', [PassengersController::class, 'store'])
         ->name('passengers.passenger.store');
    Route::put('passenger/{passenger}', [PassengersController::class, 'update'])
         ->name('passengers.passenger.update')->where('id', '[0-9]+');
    Route::delete('/passenger/{passenger}',[PassengersController::class, 'destroy'])
         ->name('passengers.passenger.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'bookings',
], function () {
    Route::get('/', [BookingsController::class, 'index'])
         ->name('bookings.booking.index');
    Route::get('/create', [BookingsController::class, 'create'])
         ->name('bookings.booking.create');
    Route::get('/show/{booking}',[BookingsController::class, 'show'])
         ->name('bookings.booking.show')->where('id', '[0-9]+');
    Route::get('/{booking}/edit',[BookingsController::class, 'edit'])
         ->name('bookings.booking.edit')->where('id', '[0-9]+');
    Route::post('/', [BookingsController::class, 'store'])
         ->name('bookings.booking.store');
    Route::put('booking/{booking}', [BookingsController::class, 'update'])
         ->name('bookings.booking.update')->where('id', '[0-9]+');
    Route::delete('/booking/{booking}',[BookingsController::class, 'destroy'])
         ->name('bookings.booking.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'connections',
], function () {
    Route::get('/', [ConnectionsController::class, 'index'])
         ->name('connections.connection.index');
    Route::get('/create', [ConnectionsController::class, 'create'])
         ->name('connections.connection.create');
    Route::get('/show/{connection}',[ConnectionsController::class, 'show'])
         ->name('connections.connection.show');
    Route::get('/{connection}/edit',[ConnectionsController::class, 'edit'])
         ->name('connections.connection.edit');
    Route::post('/', [ConnectionsController::class, 'store'])
         ->name('connections.connection.store');
    Route::put('connection/{connection}', [ConnectionsController::class, 'update'])
         ->name('connections.connection.update');
    Route::delete('/connection/{connection}',[ConnectionsController::class, 'destroy'])
         ->name('connections.connection.destroy');
});
