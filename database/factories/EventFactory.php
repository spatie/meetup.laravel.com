<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'held_at' => $faker->dateTimeBetween('-3 days', '3 days'),

        'speaker_1_name' => $faker->name,
        'speaker_1_title' => $faker->word,
        'speaker_1_talk_title' => $faker->words(5, true),
        'speaker_1_talk_abstract' => $faker->text,
        'speaker_1_photo' => $faker->imageUrl(),

        'speaker_2_name' => $faker->name,
        'speaker_2_title' => $faker->word,
        'speaker_2_talk_title' => $faker->words(5, true),
        'speaker_2_talk_abstract' => $faker->text,
        'speaker_2_photo' => $faker->imageUrl(),
    ];
});
