<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_inventario".
 *
 * @property int $id
 * @property string $idproducto
 * @property double $cantidaddisponible
 * @property double $cantidadrecibida
 * @property string $lote
 * @property string $caducidad
 * @property string $notas
 * @property int $idactivo
 * @property int $created_by
 * @property int $modified_by
 * @property string $ultima_modificacion
 *
 * @property RscProducto $id0
 */
class RscInventario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_inventario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idproducto', 'cantidaddisponible', 'cantidadrecibida', 'lote', 'caducidad', 'idactivo', 'created_by', 'modified_by'], 'required'],
            [['cantidaddisponible', 'cantidadrecibida'], 'number'],
            [['caducidad', 'ultima_modificacion'], 'safe'],
            [['notas'], 'string'],
            [['idactivo', 'created_by', 'modified_by'], 'integer'],
            [['idproducto'], 'string', 'max' => 255],
            [['lote'], 'string', 'max' => 500],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => RscProducto::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID inventario',
            'idproducto' => 'Id producto',
            'cantidaddisponible' => 'Cantidad disponible',
            'cantidadrecibida' => 'Cantidad recibida',
            'lote' => 'Lote',
            'caducidad' => 'Caducidad',
            'notas' => 'Notas',
            'idactivo' => 'Activo',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'ultima_modificacion' => 'Ultima Modificacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(RscProducto::className(), ['id' => 'id']);
    }
}
