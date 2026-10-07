<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Buku>
 */
class BukuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_buku' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'judul' => $this->faker->sentence(3),
            'penulis' => $this->faker->name(),
            'penerbit' => $this->faker->company(),
            'tahun_terbit' => $this->faker->year(),
            'stok' => $this->faker->numberBetween(1,100),
        ];
    }
}
