<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class EscalasSeeder
 * @package Database\Seeders
 * @version 1
 */
class EscalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escalas')->insert($this->escalas);
    }

    /*
     * TODO: Utilizar factory
     */
    private $escalas = [
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 1, 'name' => 'Bolsas, Servicios VAS o Servicios Restringidos'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 2, 'name' => 'Beneficios Club Entel'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 3, 'name' => 'Bloqueo por Robo o Perdida'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 4, 'name' => 'Cambio de Equipo'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 4, 'name' => 'Cambio de Plan o Condiciones comerciales'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 5, 'name' => 'Campaña o Cross-selling'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 6, 'name' => 'Canales de Atención'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 7, 'name' => 'Carga Manual'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 8, 'name' => 'Condiciones Comerciales de Planes, Servicios y Equipo'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 9, 'name' => 'Contingencia de Servicios'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 10, 'name' => 'Comunicación o Redes'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 11, 'name' => 'Estado de Deuda o Reposición'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 12, 'name' => 'Explicación de Boleta o Tráfico'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 13, 'name' => 'Facturación o Solicitudes Asociadas'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 14, 'name' => 'Funciones o Configuración de Equipo'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 15, 'name' => 'Medios de Pago o Recarga'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 16, 'name' => 'Objeción de Cobros'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 17, 'name' => 'Renuncia o Retención'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 18, 'name' => 'Roaming o LDI'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 19, 'name' => 'Saldo o Cargo en ORGA'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 20, 'name' => 'Seguimiento de Negocios'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 21, 'name' => 'Seguros y Asistencias'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 22, 'name' => 'Servicio Técnico de Equipos'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 23, 'name' => 'Venta de Productos y Servicios'],
        ['grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 24, 'name' => 'Otras Consultas o Requerimientos'],
        ['grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 1, 'name' => 'Si'],
        ['grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 2, 'name' => 'No, por pasos operacionales fuera de línea'],
        ['grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 3, 'name' => 'No, por derivación a otro canal'],
        ['grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 4, 'name' => 'No, por responsabilidad del Ejecutivo'],
        ['grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 5, 'name' => 'No, por contingencias'],
        ['grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 6, 'name' => 'No, por otro motivo'],
    ];

}
