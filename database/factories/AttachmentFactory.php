<?php

namespace Database\Factories;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'item_id' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'item_type' => $this->faker->randomElement(['news', 'development', 'property']),
            'path' => $this->faker->url(),
            'file_name' => $this->faker->text(5),
            'extension' => $this->faker->text(5),
            'caption' => $this->faker->text(5),
            'title' => $this->faker->text(5),
            'cover' => $this->faker->boolean(),
            'publish' => $this->faker->boolean(),
            'order' => '1',
            'status' => $this->faker->boolean(),
            'created_by' => 1,
            'modified_by' => 1
        ];
    }
}
