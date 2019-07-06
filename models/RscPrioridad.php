<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_prioridad".
 *
 * @property int $id
 * @property int $ordering
 * @property int $nivelprioridad
 * @property string $nombreprioridad
 * @property string $descripcion
 * @property string $activo
 * @property int $created_by
 * @property int $modified_by
 * @property string $ultima_modificacion
 */
class RscPrioridad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_prioridad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordering', 'nivelprioridad', 'nombreprioridad', 'descripcion', 'activo', 'created_by', 'modified_by'], 'required'],
            [['ordering', 'nivelprioridad', 'created_by', 'modified_by'], 'integer'],
            [['ultima_modificacion'], 'safe'],
            [['nombreprioridad', 'descripcion'], 'string', 'max' => 100],
            [['activo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID prioridad',
            'ordering' => 'Ordering',
            'nivelprioridad' => 'Nivel',
            'nombreprioridad' => 'Nombre prioridad',
            'descripcion' => 'Descripción',
            'activo' => 'Activo',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'ultima_modificacion' => 'Ultima Modificacion',
        ];
    }
}
