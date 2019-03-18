<?php

use Illuminate\Database\Seeder;

class OpcionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   /*Cuestionario 1 - Expresion Oral - Pregunta 1 */
        DB::table('opciones')->insert([
            'opcion'=>'Trenes, cintas, prados.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Casaca, morado, locura.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Trillar, cuadros, puedes.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        /* Pregunta 2 */
        DB::table('opciones')->insert([
            'opcion'=>'Camiseta, parásito, caravana.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Príncipe, cuesta, transito.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Parlamento, cubículo, pararrayo.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        
        /**Pregunta 3 */
        DB::table('opciones')->insert([
            'opcion'=>'Intran-sig-en-te, coa-cci-ón, pleit-es-ía.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'3',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'In-tran-si-gen-te, co-ac-ción, plei-te-sí-a.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'3',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'In-trans-igen-te, coac-ción, pleit-e-sía.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'3',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 4 */
        DB::table('opciones')->insert([
            'opcion'=>'Tránsito, inflexible, acción.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'4',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Pichincha, allá, arroz.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'4',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Ilíada, alharaca, deshumanizar.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'4',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 5 */
        DB::table('opciones')->insert([
            'opcion'=>'Calabaza, cabecera, mayonesa.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'5',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Causa, trenza, cruces.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'5',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Andrea, Corea, cámara.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'5',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 6 */
        DB::table('opciones')->insert([
            'opcion'=>'Este es el cocinero con quien hablamos en la habitación tres.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'6',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Es el camarada del coronel Márquez Buendía.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'6',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Cada amanecer me llegan tus recuerdos.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'6',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 7 */
        DB::table('opciones')->insert([
            'opcion'=>'Cuestiones, tiempo, maicena, suerte.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'7',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Bahía, coordinar, maestría, joyería.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'7',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Paúl, Maíz, raíz, maletería, joyería.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'7',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 8 */
        DB::table('opciones')->insert([
            'opcion'=>'Ese es el peine de la reina Margarita.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'8',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'No averigüéis por su nombre.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'8',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Os actuáis conforme lo hicisteis en Paraguay.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'8',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 9 */
        DB::table('opciones')->insert([
            'opcion'=>'Diptongo.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'9',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Hiato.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'9',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Triptongo.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'9',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 10 */
        DB::table('opciones')->insert([
            'opcion'=>'Los menores dijeron: "Si no confiáis en nosotros, nada podemos hacer".',
            'resp_correcta'=>'0',
            'pregunta_id'=>'10',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Traiga los emblemas de nuestra patria, porque los necesito.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'10',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Diana confió en la palabra de Raúl, por eso entregó el informe.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'10',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        /*Cuestionario Unidad 1 - Ingenierìa de requisitos - Pregunta 1 */
        DB::table('opciones')->insert([
            'opcion'=>'Depende de esta etapa el éxito del producto de software.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'11',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Permite detectar solo las restricciones que puede tener un sistema. ',
            'resp_correcta'=>'0',
            'pregunta_id'=>'11',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Permite detectar únicamente los servicios que debe tener el sistema. ',
            'resp_correcta'=>'0',
            'pregunta_id'=>'11',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Permite definir las necesidades del sistema de una forma general.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'11',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 2 */
        DB::table('opciones')->insert([
            'opcion'=>'Stakeholder',
            'resp_correcta'=>'0',
            'pregunta_id'=>'12',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Escenario',
            'resp_correcta'=>'0',
            'pregunta_id'=>'12',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Requisitos de usuario',
            'resp_correcta'=>'1',
            'pregunta_id'=>'12',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Requisitos del sistema',
            'resp_correcta'=>'0',
            'pregunta_id'=>'12',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 3 */
        DB::table('opciones')->insert([
            'opcion'=>'La funcionalidad o los servicios que se espera que este proveerá el sistema a desarrollarse.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'13',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Se refieren a las propiedades emergentes del sistema como fiabilidad, el tiempo de respuesta.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'13',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Son más críticos que los requerimientos funcionales particulares. ',
            'resp_correcta'=>'0',
            'pregunta_id'=>'13',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Provienen del dominio de aplicación del sistema y que reflejan las características de ese dominio.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'13',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 4*/
        DB::table('opciones')->insert([
            'opcion'=>'Son más críticos que los requerimientos funcionales particulares. ',
            'resp_correcta'=>'1',
            'pregunta_id'=>'14',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Describen de forma general la funcionalidad que proveerá el sistema a desarrollarse. ',
            'resp_correcta'=>'1',
            'pregunta_id'=>'14',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Describen con detalle las funcionalidades que proveerá el sistema a desarrollarse.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'14',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Se refieren a las propiedades emergentes del sistema como fiabilidad, el tiempo de respuesta.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'14',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 5*/
        DB::table('opciones')->insert([
            'opcion'=>'Requerimientos del usuario y requerimientos del sistema.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'15',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Requerimientos del producto y requerimientos organizacionales.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'15',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Requerimientos del producto y requerimientos externos. ',
            'resp_correcta'=>'0',
            'pregunta_id'=>'15',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Requerimientos del producto, requerimientos organizaciones y requerimientos',
            'resp_correcta'=>'1',
            'pregunta_id'=>'15',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 6*/
        DB::table('opciones')->insert([
            'opcion'=>'Si no necesita ampliar detalles en su redacción, es decir, proporciona la información suficiente para su comprensión. ',
            'resp_correcta'=>'0',
            'pregunta_id'=>'16',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'No tiene ambigüedades cuando se lo puede interpretar de una sola forma, y por lo tanto el lenguaje usado en su definición no causa confusiones al lector. ',
            'resp_correcta'=>'0',
            'pregunta_id'=>'16',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Cuando se prescinde del mismo provoca una deficiencia en el sistema a construir; además cuando sus características físicas o factor de calidad no pueden ser reemplazados por otras capacidades del producto.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'16',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Debe ser posible poner en práctica cada requerimiento dentro de las capacidades conocidas y las limitaciones del sistema en su entorno de operaciones.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'16',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 7*/
        DB::table('opciones')->insert([
            'opcion'=>'No tiene ambigüedades cuando se lo puede interpretar de una sola forma, y por lo tanto el lenguaje usado en su definición no causa confusiones al lector.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'17',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Cuando se prescinde del mismo provoca una deficiencia en el sistema a construir.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'17',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Si no necesita ampliar detalles en su redacción, es decir, proporciona la información suficiente para su comprensión.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'17',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Debe ser posible poner en práctica cada requerimiento dentro de las capacidades conocidas y las limitaciones del sistema en su entorno de operaciones.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'17',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 8*/
        DB::table('opciones')->insert([
            'opcion'=>'Ningún requerimiento o información necesaria deberían estar ausentes, sin embargo los requisitos que faltan son difíciles de detectar porque no están descritos.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'18',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'No entra en conflicto con otros requisitos del mismo tipo o con un mayor nivel de negocios, sistema o necesidades de los usuarios.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'18',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Es capaz de revisar en el SRS cuando sea necesario y para mantener un historial de los cambios realizados de acuerdo a cada necesidad surgida; cada requisito debe aparecer solo una vez en el SRS.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'18',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Puede estar vinculado a su origen hacia atrás y hacia adelante a los elementos de diseño y código fuente que aplicarla a uno de los casos de prueba que verifique la aplicación como correcta.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'18',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 9*/
        DB::table('opciones')->insert([
            'opcion'=>'Ningún requerimiento o información necesaria deberían estar ausentes, sin embargo los requisitos que faltan son difíciles de detectar porque no están descritos.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'19',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Puede estar vinculado a su origen hacia atrás y hacia adelante a los elementos de diseño y código fuente que aplicarla a uno de los casos de prueba que verifique la aplicación como correcta.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'19',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Es capaz de revisar en el SRS cuando sea necesario y para mantener un historial de los cambios realizados de acuerdo a cada necesidad surgida; cada requisito debe aparecer solo una vez en el SRS.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'19',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Es capaz de revisar en el SRS cuando sea necesario y para mantener un historial de los cambios realizados de acuerdo a cada necesidad surgida; cada requisito debe aparecer sólo una vez en el SRS.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'19',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 10*/
        DB::table('opciones')->insert([
            'opcion'=>'Para asegurarse que el equipo de desarrollo de software haya entendido los requisitos.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'20',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Para examinar el documento de los requisitos.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'20',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Para ayudar al equipo de desarrollo a identificar, controlar y seguir los requisitos y los cambios en cualquier momento. ',
            'resp_correcta'=>'0',
            'pregunta_id'=>'20',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Para la comprensión del problema únicamente por parte del desarrollador.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'20',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
         /*Cuestionario Unidad 1 - Inteligencia Artificial - Pregunta 1 */
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'0',
            'pregunta_id'=>'21',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'1',
            'pregunta_id'=>'21',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 2*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'1',
            'pregunta_id'=>'22',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'0',
            'pregunta_id'=>'22',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 3*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'1',
            'pregunta_id'=>'23',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'0',
            'pregunta_id'=>'23',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 4*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'0',
            'pregunta_id'=>'24',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'1',
            'pregunta_id'=>'24',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 5*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'1',
            'pregunta_id'=>'25',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'0',
            'pregunta_id'=>'25',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 6*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'1',
            'pregunta_id'=>'26',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'0',
            'pregunta_id'=>'26',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 7*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'0',
            'pregunta_id'=>'27',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'1',
            'pregunta_id'=>'27',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 8*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'0',
            'pregunta_id'=>'28',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'1',
            'pregunta_id'=>'28',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 9*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'0',
            'pregunta_id'=>'29',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'1',
            'pregunta_id'=>'29',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 10*/
        DB::table('opciones')->insert([
            'opcion'=>'V',
            'resp_correcta'=>'0',
            'pregunta_id'=>'30',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'F',
            'resp_correcta'=>'1',
            'pregunta_id'=>'30',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
