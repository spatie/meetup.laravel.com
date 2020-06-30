<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'held_at' => $faker->dateTimeBetween('-3 days', '3 days'),
        'youtube_url' => $faker->url,

        'speaker_1_name' => $faker->name,
        'speaker_1_link' => 'https://twitter.com/twitter',

        'speaker_1_title' => $faker->word,
        'speaker_1_talk_title' => $faker->words(5, true),
        'speaker_1_talk_abstract' => $faker->text,
        'speaker_1_photo' => $faker->imageUrl(),

        'speaker_2_name' => $faker->name,
        'speaker_2_link' => 'https://twitter.com/twitter',
        'speaker_2_title' => $faker->word,
        'speaker_2_talk_title' => $faker->words(5, true),
        'speaker_2_talk_abstract' => $faker->text,
        'speaker_2_photo' => $faker->imageUrl(),
    ];
});

$factory->state(Event::class, 'past', fn ($faker) => [
    'held_at' => $faker->dateTimeBetween('-3 months', '-1 day'),
]);

$factory->state(Event::class, 'upcoming', fn ($faker) => [
    'held_at' => $faker->dateTimeBetween('+5 days', '+10 days'),
]);

$factory->afterCreating(Event::class, function (Event $event, $faker) {
    $photos = File::allFiles(__DIR__ . '/photos');

    foreach (range(1, 2) as $i) {
        $filePath = Arr::random($photos);

        $fileName = rand() . '.jpg';

        Storage::disk('public')->put($fileName, file_get_contents($filePath));

        $event->{"speaker_{$i}_photo"} = $fileName;
        $event->save();
    }
});
