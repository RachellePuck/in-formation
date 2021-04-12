<?php

namespace Database\Factories;

use App\Models\Shift;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;


class ShiftFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shift::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start_time = Carbon::createFromTimeStamp($this->faker->dateTimeBetween('now', '+2 weeks')->getTimestamp());
        $end_time = Carbon::createFromFormat('Y-m-d H:i:s', $start_time)->addHours( $this->faker->numberBetween( 4, 10 ) );

        return [
            'start_time' => $start_time,
            'end_time' => $end_time,
            'department' => $this->faker->randomElement(['Kassa', 'Brood', 'Winkel']),
            'employee_id' => 1,
        ];
    }
}
