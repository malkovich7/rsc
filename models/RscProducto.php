<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_producto".
 *
 * @property int $id
 * @property string $nombreproducto
 * @property double $preciobase
 * @property string $idcategoria
 * @property double $cantidadminimarequerida
 * @property string $notas
 * @property int $activo
 * @property int $created_by
 * @property int $modified_by
 * @property string $ultima_modificacion
 *
 * @property RscInventario $rscInventario
 * @property RscPreciosCliente[] $rscPreciosClientes
 * @property RscCategoriaproducto $id0
 */
class RscProducto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombreproducto', 'idcategoria', 'activo', 'created_by', 'modified_by'], 'required'],
            [['preciobase', 'cantidadminimarequerida'], 'number'],
            [['notas'], 'string'],
            [['activo', 'created_by', 'modified_by'], 'integer'],
            [['ultima_modificacion'], 'safe'],
            [['nombreproducto'], 'string', 'max' => 600],
            [['idcategoria'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => RscCategoriaproducto::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombreproducto' => 'Nombreproducto',
            'preciobase' => 'Preciobase',
            'idcategoria' => 'Categoria',
            'cantidadminimarequerida' => 'Cantidad minima requerida',
            'notas' => 'Notas',
            'activo' => 'Activo',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'ultima_modificacion' => 'Ultima Modificacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRscInventario()
    {
        return $this->hasOne(RscInventario::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRscPreciosClientes()
    {
        return $this->hasMany(RscPreciosCliente::className(), ['idproducto' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(RscCategoriaproducto::className(), ['id' => 'id']);
    }
}
