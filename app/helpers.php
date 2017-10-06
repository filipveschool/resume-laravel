<?php

use App\Services\Html\Html as SpatieHtml;
use Carbon\Carbon;
//use Jenssegers\Date\Date;

function htmlfilip(): SpatieHtml {
    return app( SpatieHtml::class );
}

function locales() {
    return collect( config( 'app.locales' ) );
}

function locale() {
    return app()->getLocale();
}

/*function translate_field_name( string $name, string $locale = '' ): string {
    $locale = $locale ?? content_locale();

    return "translated_{$locale}_{$name}";
}

function content_locale() {
    return \App\Services\Locale\CurrentLocale::getContentLocale();
}*/

/*
function diff_date_for_humans( Carbon $date ) {
    return ( new Date( $date->timestamp ) )->ago();
}*/

function roman_year( int $year = NULL ) {
    $year = $year ?? date( 'Y' );

    $romanNumerals = [
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1,
    ];

    $result = '';

    foreach ( $romanNumerals as $roman => $yearNumber ) {
        // Divide to get  matches
        $matches = intval( $year / $yearNumber );

        // Assign the roman char * $matches
        $result .= str_repeat( $roman, $matches );

        // Substract from the number
        $year = $year % $yearNumber;
    }

    return $result;
}