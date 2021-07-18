<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'd_tag'=>$this->faker->text(5),
            'd_category'=>$this->faker->text(5),
            'd_title'=>$this->faker->text(5),
            'd_content'=>$this->faker->text(5),
            'd_article_source_from'=>$this->faker->text(5),
            'photo_source_and_credit_to'=>$this->faker->text(5),
            'd_written_by'=>$this->faker->text(5),
            'd_redirect_url'=>$this->faker->url(),
            'd_featured_publish_date'=>$this->faker->dateTime(),
            'd_featured_expiry_date'=>$this->faker->dateTime(),
            'd_highlight'=>$this->faker->boolean(),
            'd_remarks'=>$this->faker->text(5),
            'd_status'=>$this->faker->boolean(),
            // 'created_by'=>$this->faker->created_by,
            // 'modified_by'=>$this->faker->modified_by,
        ];
    }
}
