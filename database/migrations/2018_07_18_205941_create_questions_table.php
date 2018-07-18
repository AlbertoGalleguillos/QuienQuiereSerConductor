<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });

        DB::table('questions')->insert([
                ['title' => 'Sobretodo la población más joven, entre 15 y 19 años', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'La mayor parte de los fallecidos por accidentes de tránsito se producen en vías interurbanas o no urbanas', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'La mayor cantidad de accidentes ', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'En vías o áreas urbanas; de estos', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'En los cruces de calles o intersecciones', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Cerca del 78% de los conductores fallecidos en accidentes de tránsito son varones', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'La falla humana está presente en más del 90% de los accidentes', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Cambie periódicamente el aceite y el filtro, según las recomendaciones del fabricante del vehículo', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'No encender cigarrillos', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Si al conducir usted siente un fuerte olor a gasolina debe detenerse para investigar la causa del problema. Así puede prevenir el riesgo de incendio en su vehículo', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Si circula por una calle inundada, o si ha lavado el vehículo recientemente debe eliminar, también frenando ', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Cambiar todo el líquido de frenos en los plazos indicados por el fabricante del vehículo ', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Desgaste de la profundidad de los surcos no le indiquen que ésta es inferior a 1,6 mm', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Un desgaste notorio en la zona central de la banda de rodamiento significa que los neumáticos se han usado con exceso de aire', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Controle la presión de los neumáticos cuando estos estén fríos y respete las recomendaciones del fabricante', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Aumente levemente la presión de los neumáticos cuando lleve una carga muy pesada', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Si al ir conduciendo se revienta un neumático trasero de su vehículo, usted debe girar el volante hacia el lado que se desvía la cola del vehículo', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Si de lo contrario se revienta un neumático delantero, usted debe frenar de forma suave sosteniendo el volante firmemente', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Las luces intermitentes de advertencia de peligro solo deben utilizarse cuando el vehículo se encuentre detenido a consecuencia de una falla o avería, para avisar que temporalmente se está obstruyendo la circulación, como también para advertir a los conductores, que vienen detrás suyo, de un peligro u obstrucción que haya más adelante.', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Ángulos muertos o puntos ciegos', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Justo antes de poner su vehículo en movimiento mire a su alrededor y chequee sus puntos ciegos', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Recuerde que al desganchar el motor, usted pierde el dominio del vehículo.', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Nunca permita que dos personas viajen sujetas con el mismo cinturón ', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Sobrevivir a un accidente de tránsito depende de la suerte o de la casualidad, por lo que el cinturón no es de gran ayuda', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'El cinturón de seguridad no es necesario cuando se conduce por vías urbanas, donde la velocidad de circulación es baja', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Si el recorrido es corto, no hace falta ponerse el cinturón de seguridad', 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Durante el embarazo no hay que utilizar el cinturón de seguridad, ', 'created_at' => now(), 'updated_at' => now()]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
