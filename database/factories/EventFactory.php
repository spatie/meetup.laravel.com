<?php



namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;




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

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'held_at' => $this->faker->dateTimeBetween('-3 days', '3 days'),
        'youtube_url' => $this->faker->url,

        'speaker_1_name' => $this->faker->name,
        'speaker_1_link' => 'https://twitter.com/twitter',

        'speaker_1_title' => $this->faker->word,
        'speaker_1_talk_title' => $this->faker->words(5, true),
        'speaker_1_talk_abstract' => $this->faker->text,
        'speaker_1_photo' => $this->faker->imageUrl(),

        'speaker_2_name' => $this->faker->name,
        'speaker_2_link' => 'https://twitter.com/twitter',
        'speaker_2_title' => $this->faker->word,
        'speaker_2_talk_title' => $this->faker->words(5, true),
        'speaker_2_talk_abstract' => $this->faker->text,
        'speaker_2_photo' => $this->faker->imageUrl(),
    ];
    }

    public function past()
    {
        return $this->state(fn($faker) => ['held_at' => $this->faker->dateTimeBetween('-3 months', '-1 day')]);
    }

    public function upcoming()
    {
        return $this->state(fn($faker) => ['held_at' => $this->faker->dateTimeBetween('+5 days', '+10 days')]);
    }
}
