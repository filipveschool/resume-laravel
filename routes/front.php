<?php

Route::get( '/', 'Front\ResumeController@index' )->name( 'resume' );
Route::get('lang/{lang}', 'Front\LanguageController@swap')->name('lang');

// Authentication Routes...
//Route::get( 'login', 'Front\Auth\LoginController@showLoginForm' )->name( 'front.login' );
//Route::post( 'login', 'Front\Auth\LoginController@login' );
//Route::post( 'logout', 'Front\Auth\LoginController@logout' )->name( 'front.logout' );

// Registration Routes...
//Route::get( 'register', 'Front\Auth\RegisterController@showRegistrationForm' )->name( 'front.register' );
//Route::post( 'register', 'Front\Auth\RegisterController@register' );

// Password Reset Routes...
//Route::get( 'password/reset', 'Front\Auth\ForgotPasswordController@showLinkRequestForm' )->name( 'front.password.request' );
//Route::post( 'password/email', 'Front\Auth\ForgotPasswordController@sendResetLinkEmail' )->name( 'front.password.email' );
//Route::get( 'password/reset/{token}', 'Front\Auth\ResetPasswordController@showResetForm' )->name( 'front.password.reset' );
//Route::post( 'password/reset', 'Front\Auth\ResetPasswordController@reset' );

//Route::get( 'contact', 'Front\PagesController@ContactPage' )->name( 'contact' );
//Route::post( 'contact', 'Front\ContactController@SendMessageRequest' )->name( 'contact' );





//Resume gedeelte
//Route::get('/resume', 'Front\ResumeController@index')->name('resume');
Route::post('/sendcontactmail', 'Front\ResumeController@sendMail');