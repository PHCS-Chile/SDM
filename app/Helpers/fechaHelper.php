<?php
/*
 * Ayudas para manejo de fechas en español.
 * Si esto puede ser escrito utilizando sólo funciones date de PHP, tanto mejor.
 * @version 1 (210602)
 */

if (! function_exists('mesEspanol')) {
    /**
     * Devuelve el nombre en español de un mes, según su posición en el año.
     *
     * @param $mes
     * @return string
     */
    function mesEspanol($mes)
    {
        $meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
            'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
        return $meses[$mes - 1];
    }
}

if (! function_exists('crearPeriodos')) {
    /**
     * Crea un arreglo con todos pos periodos mes-año a partir dl mes y año indicados hasta la actualidad.
     *
     * @param $mesInicio    int El mes de inicio
     * @param $anoInicio    int El año de inicio
     * @return array        Un arreglo con los periodos
     */
    function crearPeriodos(int $mesInicio, int $anoInicio): array
    {
        $periodos = [];
        $mesActual = date('n');
        $anoActual = date('Y');
        if ($anoInicio . ajustarMes($mesInicio) <= $anoActual . ajustarMes($mesActual)) {
            $periodo = [$mesInicio, $anoInicio];
            while ($periodo[0] != $mesActual || $periodo[1] != $anoActual) {
                array_push($periodos, $periodo);
                $periodo = siguientePeriodo($periodo);
            }
            array_push($periodos, [$mesActual, $anoActual]);
        }
        return $periodos;
    }
}

if (! function_exists('siguientePeriodo')) {
    /**
     * Entrega un arreglo con el mes y año del siguiente período
     *
     * @param $periodo  array   Un arreglo de 2 elemento donde el primero es el mes y el segundo es el año.
     * @return array    Un arreglo correspondiendo al siguiente periodo.
     */
    function siguientePeriodo(array $periodo): array
    {
        if ($periodo[0] == 12) {
            return [1, $periodo[1] + 1];
        }
        return [$periodo[0] + 1, $periodo[1]];
    }
}

if (! function_exists('idDePeriodo')) {
    /**
     * Entrega un string con el id del periodo, según formato utilizado en la tabla de periodos. Por ejemplo, si
     * el año es el 2022 y el mes el 5, el id del periodo sería '2205'.
     *
     * @param   array   $periodo    Un arreglo de 2 elemento donde el primero es el mes y el segundo es el año.
     * @return  string  Un string con el id del periodo
     */
    function idDePeriodo(array $periodo): string
    {
        $mes = ajustarMes($periodo[0]);
        $ano = substr($periodo[1], 2);
        return $ano . $mes;
    }
}

if (! function_exists('ajustarMes')) {
    /**
     * Devuelve una representación del mes con un ancho de 2 caracteres. Por ejemplo, el mes 5 devolverá '05',
     * mientras que el mes 10 devolverá '10'.
     *
     * @param string $mes
     * @return string
     */
    function ajustarMes(string $mes): string
    {
        if (strlen($mes) == 1) {
            $mes = '0' . $mes;
        }
        return $mes;
    }
}
