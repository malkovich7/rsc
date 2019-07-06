<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_cliente_proveedor".
 *
 * @property int $idcliente
 * @property string $nombre
 * @property string $apellidos
 * @property string $direccion_entrega
 * @property string $direccion_fiscal
 * @property string $rfc
 * @property int $clienteproveedor
 * @property string $notas
 * @property int $idactivo 0 activo\r\n1 borrado
 * @property string $fecha_alta
 * @property string $ultima_modificacion
 * @property int $usuario_modifico
 * @property int $created_by
 *
 * @property RscCreditoscliente $rscCreditoscliente
 * @property RscPreciosCliente[] $rscPreciosClientes
 */
class RscClienteProveedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_cliente_proveedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'direccion_entrega', 'direccion_fiscal', 'rfc', 'clienteproveedor'],'required'],
            [['idcliente', 'clienteproveedor', 'idactivo', 'usuario_modifico', 'created_by'], 'integer'],
            [['fecha_alta', 'ultima_modificacion'], 'safe'],
            [['nombre', 'apellidos'], 'string', 'max' => 150],
            [['direccion_entrega', 'direccion_fiscal', 'notas'], 'string', 'max' => 500],
            [['rfc'], 'string', 'max' => 20],
            [['idcliente'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcliente' => 'Id cliente',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'direccion_entrega' => 'Direccion Entrega',
            'direccion_fiscal' => 'Direccion Fiscal',
            'rfc' => 'Rfc',
            'clienteproveedor' => 'Cliente/Proveedor',
            'notas' => 'Notas',
            'idactivo' => 'Activo',
            'fecha_alta' => 'Fecha Alta',
            'ultima_modificacion' => 'Ultima Modificacion',
            'usuario_modifico' => 'Usuario Modifico',
            'created_by' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRscCreditoscliente()
    {
        return $this->hasOne(RscCreditoscliente::className(), ['idcliente' => 'idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRscPreciosClientes()
    {
        return $this->hasMany(RscPreciosCliente::className(), ['idcliente' => 'idcliente']);
    }
}
