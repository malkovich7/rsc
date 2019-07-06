<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_estatus".
 *
 * @property int $id
 * @property int $created_by
 * @property int $modified_by
 * @property int $categoriaestatus
 * @property string $nombreestatus
 * @property string $descripcion
 * @property string $ultima_modificacion
 */
class RscEstatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_estatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_by', 'modified_by', 'categoriaestatus', 'nombreestatus', 'descripcion'], 'required'],
            [['created_by', 'modified_by', 'categoriaestatus'], 'integer'],
            [['descripcion'], 'string'],
            [['ultima_modificacion'], 'safe'],
            [['nombreestatus'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'categoriaestatus' => 'Categoriaestatus',
            'nombreestatus' => 'Nombreestatus',
            'descripcion' => 'Descripcion',
            'ultima_modificacion' => 'Ultima Modificacion',
        ];
    }
}
