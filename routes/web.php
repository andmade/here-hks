<?php

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

Route::get('/random', function() {

    $random = new Random();
    return $random->getRandomString(8);

});
 
/* Public Event Resource Routes */
Route::get('/events', 'EventController@index')->name('events.index');
Route::get('/events/create', 'EventController@create')->name('events.create');
Route::post('/events', 'EventController@store')->name('events.store');
Route::get('/events/{id}-{slug}', 'EventController@show')->name('events.show');
Route::get('/events/{id}-{slug}/edit', 'EventController@edit')->name('events.edit');
Route::put('/events/{id}-{slug}', 'EventController@update')->name('events.update');
Route::delete('/events/{id}-{slug}', 'EventController@destroy')->name('events.destroy');

/* Debug Routes */
if(App::environment('local')) {

    Route::get('/drop', function() {
    	File::deleteDirectory(public_path() . "/img/events");
        DB::statement('DROP database hereathks');
        DB::statement('CREATE database hereathks');

        return 'Dropped and recreated database';
    });

};


Route::get('/debug', function() {

	echo '<pre>';

	echo '<h1>Environment</h1>';
	echo App::environment().'</h1>';

	echo '<h1>Debugging?</h1>';
	if(config('app.debug')) echo "Yes"; else echo "No";

	echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
	//print_r(config('database.connections.mysql'));

	echo '<h1>Test Database Connection</h1>';
	try {
		$results = DB::select('SHOW DATABASES;');
		echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
		echo "<br><br>Your Databases:<br><br>";
		print_r($results);
	}
	catch (Exception $e) {
		echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
	}

	echo '</pre>';

});