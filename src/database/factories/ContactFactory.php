<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'last_name'=> $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'email'=> $this->faker->safeEmail,
            'tel'=> $this->faker->phoneNumber,
            'address'=> $this->faker->address,
            'content'=> $this->faker->text(120),
            $gender = ['男', '女','その他']
        ];
    }
}
