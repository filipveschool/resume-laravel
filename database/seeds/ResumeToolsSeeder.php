<?php

use App\Enums\StarsRating;
use App\Models\Tool;
use Illuminate\Database\Seeder;

class ResumeToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tool::create(
            [
                'title'      => 'Filezilla',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '8',
                //'yearsinuse' => 8,
            ]
        );

        Tool::create(
            [
                'title'      => 'Firefox',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '8',
                //'yearsinuse' => 8,
            ]
        );
        Tool::create(
            [
                'title'      => 'Google Chrome',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '8',
                //'yearsinuse' => 8,
            ]
        );
        Tool::create(
            [
                'title'      => 'MS Office',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '10+',
                //'yearsinuse' => 8,
            ]
        );

        Tool::create(
            [
                'title'      => 'Notepad++',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '8',
                //'yearsinuse' => 8,
            ]
        );

        Tool::create(
            [
                'title'      => 'Windows',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '15',
                //'yearsinuse' => 8,
            ]
        );

        Tool::create(
            [
                'title'      => 'Git / Git Flow',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '3',
                //'yearsinuse' => 3,
            ]
        );

        Tool::create(
            [
                'title'      => 'Laragon',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '2',
                //'yearsinuse' => 8,
            ]
        );

        Tool::create(
            [
                'title'      => 'PHPStorm',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '4',
                //'yearsinuse' => 4,
            ]
        );

        Tool::create(
            [
                'title'      => 'Atom',
                'stars'      => StarsRating::fivestarsvalue,
                'rating'     => StarsRating::fivestarskey,
                'selectkey'  => StarsRating::fivestarsvalueselect,
                'yearsinuse' => '1',
                //'yearsinuse' => 1,
            ]
        );
    }
}
