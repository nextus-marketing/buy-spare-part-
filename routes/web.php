<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Frontend.home');
});

Route::get('/about', function () {
    return view('Frontend.about');
});

Route::get('/contact', function () {
    return view('Frontend.contact');
});

Route::get('/privacy-policy', function () {
    return view('Frontend.privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('Frontend.terms-conditions');
});

Route::get('/refund-policy', function () {
    return view('Frontend.refund-policy');
});

//Categories

Route::view('/engine-parts', 'Frontend.Categories.engine-parts')->name('engine-parts');

Route::view('/transmission-parts', 'Frontend.Categories.transmission-parts')->name('transmission-parts');

Route::view('/suspension-parts', 'Frontend.Categories.suspension-parts')->name('suspension-parts');

Route::view('/electrical-parts', 'Frontend.Categories.electrical-parts')->name('electrical-parts');

Route::view('/exterior-parts', 'Frontend.Categories.exterior-parts')->name('exterior-parts');

Route::view('/interior-parts', 'Frontend.Categories.interior-parts')->name('interior-parts');


// Engine Parts

Route::get('/engine-parts/car-engine', function () {
    return view('Frontend.Engine-parts.car-engine');
});
Route::get('/engine-parts/cylinder-head', function () {
    return view('Frontend.Engine-parts.cylinder-head');
});

Route::get('/engine-parts/camshaft', function () {
    return view('Frontend.Engine-parts.camshaft');
});

Route::get('/engine-parts/supercharger', function () {
    return view('Frontend.Engine-parts.supercharger');
});

Route::get('/engine-parts/turbocharger', function () {
    return view('Frontend.Engine-parts.turbocharger');
});

Route::get('/engine-parts/turbo-charger', function () {
    return view('Frontend.Engine-parts.turbo-charger');
});

Route::get('/engine-parts/intake-manifold', function () {
    return view('Frontend.Engine-parts.intake-manifold');
});

Route::get('/engine-parts/exhaust-manifold', function () {
    return view('Frontend.Engine-parts.exhaust-manifold');
});

Route::get('/engine-parts/throttle-body', function () {
    return view('Frontend.Engine-parts.throttle-body');
});

Route::get('/engine-parts/engine-mount', function () {
    return view('Frontend.Engine-parts.engine-mount');
});

Route::get('/engine-parts/valve-cover', function () {
    return view('Frontend.Engine-parts.valve-cover');
});

Route::get('/engine-parts/fuel-pump', function () {
    return view('Frontend.Engine-parts.fuel-pump');
});

Route::get('/engine-parts/coolant-pump', function () {
    return view('Frontend.Engine-parts.coolant-pump');
});

Route::get('/engine-parts/radiator', function () {
    return view('Frontend.Engine-parts.radiator');
});

Route::get('/engine-parts/vacuum-pump', function () {
    return view('Frontend.Engine-parts.vacuum-pump');
});

Route::get('/engine-parts/catalytic-converter', function () {
    return view('Frontend.Engine-parts.catalytic-converter');
});

// Transmission Parts
// Transmission Parts Pages

Route::get('/transmission-parts/transmission', function () {
    return view('Frontend.Transmission-parts.transmission');
});

Route::get('/transmission-parts/drive-shaft', function () {
    return view('Frontend.Transmission-parts.drive-shaft');
});

Route::get('/transmission-parts/axle-shaft', function () {
    return view('Frontend.Transmission-parts.axle-shaft');
});

Route::get('/transmission-parts/floor-shifter', function () {
    return view('Frontend.Transmission-parts.floor-shifter');
});

Route::get('/transmission-parts/cradle', function () {
    return view('Frontend.Transmission-parts.cradle');
});

Route::get('/transmission-parts/crossmember', function () {
    return view('Frontend.Transmission-parts.crossmember');
});

Route::get('/transmission-parts/subframe', function () {
    return view('Frontend.Transmission-parts.subframe');
});



//Suspension


// Suspension Parts Pages

Route::get('/suspension-parts/shock-absorber', function () {
    return view('Frontend.Suspension-parts.shock-absorber');
});

Route::get('/suspension-parts/rack-pinion', function () {
    return view('Frontend.Suspension-parts.rack-pinion');
});

Route::get('/suspension-parts/control-arms', function () {
    return view('Frontend.Suspension-parts.control-arms');
});

Route::get('/suspension-parts/brake-caliper-rotors', function () {
    return view('Frontend.Suspension-parts.brake-caliper-rotors');
});

Route::get('/suspension-parts/power-steering-pump', function () {
    return view('Frontend.Suspension-parts.power-steering-pump');
});

Route::get('/suspension-parts/steering-column', function () {
    return view('Frontend.Suspension-parts.steering-column');
});

Route::get('/suspension-parts/strut', function () {
    return view('Frontend.Suspension-parts.strut');
});

Route::get('/suspension-parts/ac-compressor', function () {
    return view('Frontend.Suspension-parts.ac-compressor');
});

Route::get('/suspension-parts/ac-condenser', function () {
    return view('Frontend.Suspension-parts.ac-condenser');
});

Route::get('/suspension-parts/blower-motor', function () {
    return view('Frontend.Suspension-parts.blower-motor');
});

Route::get('/suspension-parts/ac-heater-control-system', function () {
    return view('Frontend.Suspension-parts.ac-heater-control-system');
});


// Electrical Parts

// Electrical Parts Pages

Route::get('/electrical-parts/alternator', function () {
    return view('Frontend.Electrical-parts.alternator');
});

Route::get('/electrical-parts/starter', function () {
    return view('Frontend.Electrical-parts.starter');
});

Route::get('/electrical-parts/ignition-switch', function () {
    return view('Frontend.Electrical-parts.ignition-switch');
});

Route::get('/electrical-parts/fuse-box', function () {
    return view('Frontend.Electrical-parts.fuse-box');
});

Route::get('/electrical-parts/instrument-cluster', function () {
    return view('Frontend.Electrical-parts.instrument-cluster');
});

Route::get('/electrical-parts/wiper-motor', function () {
    return view('Frontend.Electrical-parts.wiper-motor');
});

Route::get('/electrical-parts/window-motor-regulator', function () {
    return view('Frontend.Electrical-parts.window-motor-regulator');
});

Route::get('/electrical-parts/cd-player-radio', function () {
    return view('Frontend.Electrical-parts.cd-player-radio');
});

Route::get('/electrical-parts/tail-light', function () {
    return view('Frontend.Electrical-parts.tail-light');
});

Route::get('/electrical-parts/headlight', function () {
    return view('Frontend.Electrical-parts.headlight');
});

Route::get('/electrical-parts/fog-lamps', function () {
    return view('Frontend.Electrical-parts.fog-lamps');
});

Route::get('/electrical-parts/abs-unit', function () {
    return view('Frontend.Electrical-parts.abs-unit');
});


// Exterior Parts Pages

Route::get('/exterior-parts/bumpers', function () {
    return view('Frontend.Exterior-parts.bumpers');
});

Route::get('/exterior-parts/fenders', function () {
    return view('Frontend.Exterior-parts.fenders');
});

Route::get('/exterior-parts/hood', function () {
    return view('Frontend.Exterior-parts.hood');
});

Route::get('/exterior-parts/doors', function () {
    return view('Frontend.Exterior-parts.doors');
});

Route::get('/exterior-parts/mirrors', function () {
    return view('Frontend.Exterior-parts.mirrors');
});

Route::get('/exterior-parts/grilles', function () {
    return view('Frontend.Exterior-parts.grilles');
});

Route::get('/exterior-parts/fender-flare', function () {
    return view('Frontend.Exterior-parts.fender-flare');
});

Route::get('/exterior-parts/wheel-hub', function () {
    return view('Frontend.Exterior-parts.wheel-hub');
});

Route::get('/exterior-parts/wheel-rim', function () {
    return view('Frontend.Exterior-parts.wheel-rim');
});

// Interior Parts Pages

Route::get('/interior-parts/seats', function () {
    return view('Frontend.Interior-parts.seats');
});

Route::get('/interior-parts/seat-belts', function () {
    return view('Frontend.Interior-parts.seat-belts');
});

Route::get('/interior-parts/center-console', function () {
    return view('Frontend.Interior-parts.center-console');
});

Route::get('/interior-parts/sun-visor', function () {
    return view('Frontend.Interior-parts.sun-visor');
});

Route::get('/interior-parts/mirrors', function () {
    return view('Frontend.Interior-parts.mirrors');
});

Route::get('/interior-parts/air-bag', function () {
    return view('Frontend.Interior-parts.air-bag');
});

Route::get('/interior-parts/car-steering', function () {
    return view('Frontend.Interior-parts.car-steering');
});


// Cars - Brand Parts

Route::view('/acura-parts', 'Frontend.Cars.acura-parts')->name('/acura-parts');

Route::view('/audi-parts', 'Frontend.Cars.audi-parts')->name('/audi-parts');

Route::view('/bmw-parts', 'Frontend.Cars.bmw-parts')->name('/bmw-parts');

Route::view('/chevrolet-parts', 'Frontend.Cars.chevrolet-parts')->name('/chevrolet-parts');

Route::view('/dodge-parts', 'Frontend.Cars.dodge-parts')->name('/dodge-parts');

Route::view('/ford-parts', 'Frontend.Cars.ford-parts')->name('/ford-parts');

Route::view('/gmc-parts', 'Frontend.Cars.gmc-parts')->name('/gmc-parts');

Route::view('/honda-parts', 'Frontend.Cars.honda-parts')->name('/honda-parts');

Route::view('/hyundai-parts', 'Frontend.Cars.hyundai-parts')->name('/hyundai-parts');

Route::view('/infiniti-parts', 'Frontend.Cars.infiniti-parts')->name('/infiniti-parts');

Route::view('/jeep-parts', 'Frontend.Cars.jeep-parts')->name('/jeep-parts');

Route::view('/kia-parts', 'Frontend.Cars.kia-parts')->name('/kia-parts');

Route::view('/lexus-parts', 'Frontend.Cars.lexus-parts')->name('/lexus-parts');

Route::view('/mazda-parts', 'Frontend.Cars.mazda-parts')->name('/mazda-parts');

Route::view('/mercedes-benz-parts', 'Frontend.Cars.mercedes-benz-parts')->name('/mercedes-benz-parts');

Route::view('/nissan-parts', 'Frontend.Cars.nissan-parts')->name('/nissan-parts');

Route::view('/subaru-parts', 'Frontend.Cars.subaru-parts')->name('/subaru-parts');

Route::view('/tesla-parts', 'Frontend.Cars.tesla-parts')->name('/tesla-parts');

Route::view('/toyota-parts', 'Frontend.Cars.toyota-parts')->name('/toyota-parts');

Route::view('/volkswagen-parts', 'Frontend.Cars.volkswagen-parts')->name('/volkswagen-parts');

Route::view('/volvo-parts', 'Frontend.Cars.volvo-parts')->name('/volvo-parts');

require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
require __DIR__ . '/frontend.php';
