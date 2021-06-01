<?php

namespace Database\Factories;

use App\Models\Asignacion;
use App\Models\Evaluacion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class EvaluacionFactory
 * @package Database\Factories
 * @version 2
 */
class EvaluacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evaluacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /* Creación de atributos aleatorios que dependen entre ellos */
        $supervisor = $this->faker->randomElement([NULL, ""]);
        $penc = $pecu = $pecn = $pecc = $user_id = NULL;
        $asignacion_id = $this->faker->numberBetween(1, 28);
        $user_completa = NULL;
        $fecha_completa = NULL;
        $estado_id = $this->faker->numberBetween(1, 6);
        $image_path = NULL;
        if ($estado_id > 1 && $estado_id < 6 ) {
            $penc = $this->faker->numberBetween(0, 100);
            $pecu = $this->faker->numberBetween(0, 100);
            $pecn = $this->faker->numberBetween(0, 100);
            $pecc = $this->faker->numberBetween(0, 100);
            $user_id = $this->faker->numberBetween(1, 5);
            $user_completa = User::find($user_id)->name;
            $fecha_completa = $this->faker->dateTimeBetween('-1 years');
            $image_path = $this->faker->catchPhrase;
        }
        return [
            'movil' => '9' . $this->faker->randomNumber(8),
            'connid' => $this->faker->md5,
            'fecha_grabacion' => $this->faker->dateTimeBetween('-1 years'),
            'nombre_ejecutivo' => $this->faker->firstName . ' ' .$this->faker->lastName . ' ' . $this->faker->lastName,
            'rut_ejecutivo' => $this->faker->randomNumber(8),
            'nombre_supervisor' => $supervisor,
            'rut_supervisor' => $supervisor,
            'epa' => $this->faker->randomElement([NULL, 1, 2, 3, 4, 5]),
            'image_path' => $image_path,
            'penc' => $penc,
            'pecu' => $pecu,
            'pecn' => $pecn,
            'pecc' => $pecc,
            'user_id' => $user_id,
            'asignacion_id' => $asignacion_id,
            'estado_id' => $estado_id,
            'tag1' => $this->faker->md5,
            'tag2' => $this->faker->randomElement([NULL, 'WS', 'RRSS', 'WS EPA']),
            'comentario_interno' => NULL,
            'user_completa' => $user_completa,
            'fecha_completa' => $fecha_completa,
            'user_supervisor' => NULL,
            'fecha_supervision' => NULL,
            'ici' => NULL,
            'fecha_ici' => NULL,
            'user_ici' => NULL,
        ];
    }
}
