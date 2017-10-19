<?php
Route::get(
    '/', function () {
    return 'Hello World';
}
);
Route::resource('parts', 'CarController');
