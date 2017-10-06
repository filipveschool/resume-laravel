<?php

use App\Enums\StarsRating;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class ResumeSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'resume_skills' )->delete();

        Skill::create(
            [
                'title'     => 'Bootstrap Framework',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ] );

        Skill::create(
            [
                'title'     => 'CSS (3)',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ] );


        Skill::create(
            [
                'title'     => 'HTML(5)',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'JSON',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'MySQL',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'PHP',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'Laravel Framework',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'XML',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'Command line Interface',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'JQuery',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'Java',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'JavaScript',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'MVC Pattern',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'Object Orientated Programming',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'SASS/SCSS',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'SEO',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'Scrum',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'Singleton Pattern',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'UML',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'Wordpress',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'BEM',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'AngularJS',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'React.JS',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );

        Skill::create(
            [
                'title'     => 'REACT-redux',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );


        /*Skill::create(
            [
                'title'     => '',
                'stars'     => StarsRating::fivestarsvalue,
                'rating'    => StarsRating::fivestarskey,
                'selectkey' => StarsRating::fivestarsvalueselect,
            ]
        );*/
    }
}
