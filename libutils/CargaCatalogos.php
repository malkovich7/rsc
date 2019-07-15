<?php

namespace app\libutils;

use app\models\RscCategoriaproducto;
use app\models\RscClienteProveedor;
use app\models\RscCreditoscliente;
use app\models\RscEstatus;
use app\models\RscImpuestos;
use app\models\RscPrioridad;

class CargaCatalogos
{

    const ACTIVE = 1;
    const INACTIVE = 0;

    public static $status = ['No', 'Si'];

    public static function getCategoriaProducto()
    {
        $categoriaCatalogo = RscCategoriaproducto::find()->orderBy('id')->all();

        return self::getArray($categoriaCatalogo, 'id', 'categoria');
    }

    public static function getClients()
    {
        $clients = RscClienteProveedor::find()->innerJoinWith('rscCreditoscliente')->where(['idactivo' => self::ACTIVE, 'activo' => self::ACTIVE])->orderBy('nombre, apellidos')->all();

        return self::getArray($clients, 'idcliente', ['nombre', 'apellidos']);
    }

    public static function getStatus()
    {
        $status = RscEstatus::find()->orderBy('nombreestatus')->all();

        return self::getArray($status, 'id', 'nombreestatus');
    }

    public static function getPriorities()
    {
        $priorities = RscPrioridad::find()->orderBy('nombreprioridad')->all();

        return self::getArray($priorities, 'id', 'nombreprioridad');
    }

    public static function getIva()
    {
        $iva = RscImpuestos::find()->orderBy('ordering')->all();

        return self::getArray($iva, 'id', 'impuesto');
    }

    public static function getCredits()
    {
        $credits = RscCreditoscliente::find()->orderBy('creditomonto')->all();

        return self::getArray($credits, 'idcliente', 'creditomonto');
    }

    public static function getSendType()
    {
        return [
            0 => 'Seleccione',
            1 => 'Local',
            2 => 'Externo'
        ];
    }

    public static function getCreditByClientId($id)
    {
        return RscCreditoscliente::find()
            ->where([
                'idcliente' => $id,
                'activo' => self::ACTIVE
            ])
            ->all();
    }

    private static function getArray($list, $key, $value)
    {
        $array = [];

        if (is_array($list)) {
            foreach ($list as $item) {
                $val = '';
                $idx = $item[$key];

                if (is_array($value))
                    foreach ($value as $v)
                        $val = "$val $item[$v]";
                else
                    $val = $item[$value];

                $array[$idx] = $val;
            }
        }

        return $array;
    }
}
