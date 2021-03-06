<?php
Route::middleware('auth')->group(function () {
    Route::group(['namespace' => 'Profile'], function() {

        Route::view('/profile', 'profile.profile');
        Route::view('/password', 'profile.password');

        // api
        Route::group(['prefix' => 'api/profile'], function() {
            Route::get('/getAuthUser', 'ProfileController@getAuthUser');
            Route::put('/updateAuthUser', 'ProfileController@updateAuthUser');
            Route::put('/updatePasswordAuthUser', 'ProfileController@updatePasswordAuthUser');
            Route::post('/uploadAvatarAuthUser', 'ProfileController@uploadAvatarAuthUser');
            Route::post('/removeAvatarAuthUser', 'ProfileController@removeAvatarAuthUser');
        });
    });
});
