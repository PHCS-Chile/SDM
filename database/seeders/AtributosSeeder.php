<?php

namespace Database\Seeders;

use App\Models\Atributo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class AtributosSeeder
 * @package Database\Seeders
 * @version 1
 */
class AtributosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atributos')->insert($this->atributos);
        Atributo::destroy(72);  /* Evita problemas con IDs en versiones iniciales */
    }

    /*
     * TODO: Utilizar factory
     */
    private $atributos = [
        ['name' => 'No saluda o indica nombre al iniciar la conversación', 'name_interno' => 'saludo1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'No usa preguntas o frases de conexión inicial', 'name_interno' => 'saludo2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'No Valida contexto indicado previamente', 'name_interno' => 'saludo3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'No se despide y/o realiza de forma poco cordial', 'name_interno' => 'saludo4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'No agradece contacto al despedirse', 'name_interno' => 'saludo5', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'Protocolo de saludo y despedida', 'name_interno' => 'saludo6', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Utiliza frases formales y/o poco cercanas', 'name_interno' => 'frases1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 11, 'name_categoria' => 'PENC'],
        ['name' => 'Utiliza conceptos técnicos', 'name_interno' => 'frases2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 11, 'name_categoria' => 'PENC'],
        ['name' => 'Utiliza frases coloquiales y/o abreviaturas', 'name_interno' => 'frases3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 11, 'name_categoria' => 'PENC'],
        ['name' => 'Utiliza más de un emoticón por comentario', 'name_interno' => 'frases4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 11, 'name_categoria' => 'PENC'],
        ['name' => 'Se comunica de forma simple y cercana', 'name_interno' => 'frases5', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No manifesta dispoción para atender', 'name_interno' => 'cordialidad1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 16, 'name_categoria' => 'PENC'],
        ['name' => 'No demuestra interes frente a dificultades', 'name_interno' => 'cordialidad2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 16, 'name_categoria' => 'PENC'],
        ['name' => 'No pide disculpas en caso de reclamos', 'name_interno' => 'cordialidad3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 16, 'name_categoria' => 'PENC'],
        ['name' => 'No reduce el conflicto frente a cliente alterados', 'name_interno' => 'cordialidad4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 16, 'name_categoria' => 'PENC'],
        ['name' => 'Demuestra cordialidad y/o reduce conflictos', 'name_interno' => 'cordialidad5', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No Entrega la información de manera ordenada', 'name_interno' => 'gestionplantillas1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 21, 'name_categoria' => 'PENC'],
        ['name' => 'Usa plantillas o imágenes en exceso', 'name_interno' => 'gestionplantillas2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 21, 'name_categoria' => 'PENC'],
        ['name' => 'Usa plantillas o información irrelevantes para la gestión', 'name_interno' => 'gestionplantillas3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 21, 'name_categoria' => 'PENC'],
        ['name' => 'Vuelve a solicitar la misma información mas de una vez', 'name_interno' => 'gestionplantillas4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 21, 'name_categoria' => 'PENC'],
        ['name' => 'Gestión de plantillas e información', 'name_interno' => 'gestionplantillas5', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Errores semánticos y/o sintácticos', 'name_interno' => 'ortografia1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Mal uso de reglas de puntuación (puntos y coma)', 'name_interno' => 'ortografia2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Errores de escrituras y aplicación de reglas ortográficas (español)', 'name_interno' => 'ortografia3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Escritura incorrecta de palabras técnicas o de origen extranjero', 'name_interno' => 'ortografia4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Mal uso del acento diacrítico', 'name_interno' => 'ortografia5', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Uso incorrecto de Mayúsculas/Minúsculas', 'name_interno' => 'ortografia6', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Ortografía y redacción', 'name_interno' => 'ortografia7', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No personaliza durante la conversación', 'name_interno' => 'personalizacion1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 32, 'name_categoria' => 'PENC'],
        ['name' => 'Trata al cliente por un nombre/usuario erróneo', 'name_interno' => 'personalizacion2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 32, 'name_categoria' => 'PENC'],
        ['name' => 'No Aplica Personalización', 'name_interno' => 'personalizacion3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 32, 'name_categoria' => 'PENC'],
        ['name' => 'Se refiere al Cliente por su nombre', 'name_interno' => 'personalizacion4', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Proyecta inseguridad o falta de conocimientos', 'name_interno' => 'seguridad1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 35, 'name_categoria' => 'PENC'],
        ['name' => 'Se autocorrige o se contradice en la conversación', 'name_interno' => 'seguridad2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 35, 'name_categoria' => 'PENC'],
        ['name' => 'Proyecta seguridad y dominio de la información', 'name_interno' => 'seguridad3', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No menciona la necesidad de dejar en espera', 'name_interno' => 'manejosilencios1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 39, 'name_categoria' => 'PENC'],
        ['name' => 'No retoma la conversación en los tiempos definidos', 'name_interno' => 'manejosilencios2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 39, 'name_categoria' => 'PENC'],
        ['name' => 'No agradece el tiempo de espera', 'name_interno' => 'manejosilencios3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 39, 'name_categoria' => 'PENC'],
        ['name' => 'Maneja correctamente los tiempos de espera', 'name_interno' => 'manejosilencios4', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No realiza aseguramiento de lo informado', 'name_interno' => 'aseguramiento1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 42, 'name_categoria' => 'PENC'],
        ['name' => 'No Aplica Aseguramiento', 'name_interno' => 'aseguramiento2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 42, 'name_categoria' => 'PENC'],
        ['name' => 'Asegura la comprensión de información entregada', 'name_interno' => 'aseguramiento3', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No realiza ofrecimiento comercial a titular', 'name_interno' => 'ofrecimiento1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 45, 'name_categoria' => 'PENC'],
        ['name' => 'No argumenta o intenta revertir objeciones', 'name_interno' => 'ofrecimiento2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 45, 'name_categoria' => 'PENC'],
        ['name' => 'Realiza ofrecimiento comercial a usuario no autorizado', 'name_interno' => 'ofrecimiento3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 45, 'name_categoria' => 'PENC'],
        ['name' => 'No Aplica Ofrecimiento Comercial', 'name_interno' => 'ofrecimiento4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 45, 'name_categoria' => 'PENC'],
        ['name' => 'Ofrece nuevos productos/servicios', 'name_interno' => 'ofrecimiento5', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Motivo del llamado', 'name_interno' => 'motivo', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Tipo de Gestión 1', 'name_interno' => 'gestion1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Tipo de Gestión 2', 'name_interno' => 'gestion2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Tipo de Gestión 3', 'name_interno' => 'gestion3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Detección de necesidades 1', 'name_interno' => 'deteccion1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Detección de necesidades 2', 'name_interno' => 'deteccion2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Detección de necesidades 3', 'name_interno' => 'deteccion3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Detección de necesidades Full', 'name_interno' => 'deteccion4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Entrega de información correcta y completa 1', 'name_interno' => 'infocorrecta1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Entrega de información correcta y completa 2', 'name_interno' => 'infocorrecta2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Entrega de información correcta y completa 3', 'name_interno' => 'infocorrecta3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Entrega de información correcta y completa Full', 'name_interno' => 'infocorrecta4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Gestiona según proced. en sistema 1', 'name_interno' => 'procedimiento1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Gestiona según proced. en sistema 2', 'name_interno' => 'procedimiento2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Gestiona según proced. en sistema 3', 'name_interno' => 'procedimiento3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Gestiona según proced. en sistema Full', 'name_interno' => 'procedimiento4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea 1 ', 'name_interno' => 'resolucion1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea 2', 'name_interno' => 'resolucion2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea 3', 'name_interno' => 'resolucion3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Error grave en la detección de necesidades y en el analisis de la información', 'name_interno' => 'pecu_deteccion', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Error grave en la gestión por Info incorrecta o incompleta', 'name_interno' => 'pecu_infocorrecta', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Error grave en la gestión por no resolver o resolver de forma errónea', 'name_interno' => 'pecu_procedimiento', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Atención Irrespetuosa y Gestión poco Profesional', 'name_interno' => 'pecu_pocoprofesional', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Manipula al Cliente para concretar venta', 'name_interno' => 'pecu_manipulacliente', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],

        ['name' => 'NO EXISTE', 'name_interno' => 'noexiste', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'NO'],

        ['name' => 'Cierre anticipado de la Interacción ', 'name_interno' => 'pecu_cierreinteraccion', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Provoca o incita el cierre por inactividad', 'name_interno' => 'pecu_provocacierre', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Entrega Beneficio o Excepción comercial fuera de Procedimiento', 'name_interno' => 'pecn_beneficio', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Fraude', 'name_interno' => 'pecn_fraude', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'No Sondea motivo de renuncia o no Retiene', 'name_interno' => 'pecn_nosondea', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'No Tipifica en sistema o lo realiza de manera incorrecta.', 'name_interno' => 'pecn_tipificacion', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Validación de Factibilidad Técnica y Comercial', 'name_interno' => 'pecn_factibilidad', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Otra Gestión Indebida', 'name_interno' => 'pecn_otragestion', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Entrega información confidencial', 'name_interno' => 'pecc_infoconfidencial', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'No valida correctamente los datos personales del Cliente', 'name_interno' => 'pecc_novalidadatos', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'No realiza cierre de negocio según procedimiento', 'name_interno' => 'pecc_cierre', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'Omite o Indica erróneamente información que es regulada legalmente', 'name_interno' => 'pecc_infoerronea', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'No comprende el motivo del Cliente', 'name_interno' => 'asistentevirtual1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Cliente insiste mas de una vez en contacto con ejecutivo', 'name_interno' => 'asistentevirtual2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Deriva de forma incorrecta al ejecutivo', 'name_interno' => 'asistentevirtual3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Abandonos previos por parte de otros ejecutivos', 'name_interno' => 'gestionesanteriores1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Abandonos previos por parte del Cliente', 'name_interno' => 'gestionesanteriores2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Más de una conversación reciente por el mismo motivo (NO FCR)', 'name_interno' => 'gestionesanteriores3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Cliente molesto por la atención de la asistente virtual', 'name_interno' => 'usuarios1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Cliente molesto por la atención de los ejecutivos del canal', 'name_interno' => 'usuarios2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Cliente solicita ser contactado telefónicamente', 'name_interno' => 'usuarios3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Retroalimentacion', 'name_interno' => 'retroalimentacion', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Memo'],
        ['name' => 'Comentario Interno', 'name_interno' => 'comentario_interno', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Memo'],
    ];

}
