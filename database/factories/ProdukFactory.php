<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'kategori_id' => $this->faker->randomDigitNotNull(1),
            'deskripsi' =>$this->faker->text(),
            'harga' => $this->faker->randomNumber(5)
        ];
    }
}
