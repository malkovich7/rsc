<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_precios_cliente".
 *
 * @property int $id
 * @property int $idcliente
 * @property int $idproducto
 * @property double $descuento
 * @property int $idactivo
 * @property string $ultima_modificacion
 * @property string $usuario_modifico
 *
 * @property RscClienteProveedor $cliente
 * @property RscProducto $producto
 */
class RscPreciosCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_precios_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idcliente', 'idproducto', 'descuento', 'idactivo'], 'required'],
            [['id', 'idcliente', 'idproducto', 'idactivo'], 'integer'],
            [['descuento'], 'number'],
            [['ultima_modificacion'], 'safe'],
            [['usuario_modifico'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['idcliente'], 'exist', 'skipOnError' => true, 'targetClass' => RscClienteProveedor::className(), 'targetAttribute' => ['idcliente' => 'idcliente']],
            [['idproducto'], 'exist', 'skipOnError' => true, 'targetClass' => RscProducto::className(), 'targetAttribute' => ['idproducto' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID precio',
            'idcliente' => 'Cliente',
            'idproducto' => 'Producto',
            'descuento' => 'Descuento',
            'idactivo' => 'Activo',
            'ultima_modificacion' => 'Ultima Modificacion',
            'usuario_modifico' => 'Usuario Modifico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(RscClienteProveedor::className(), ['idcliente' => 'idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(RscProducto::className(), ['id' => 'idproducto']);
    }
}
