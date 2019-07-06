<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_impuestos".
 *
 * @property int $id
 * @property int $ordering
 * @property string $impuesto
 * @property double $value
 * @property int $created_by
 * @property int $modified_by
 */
class RscImpuestos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_impuestos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordering', 'impuesto', 'created_by', 'modified_by'], 'required'],
            [['ordering', 'created_by', 'modified_by'], 'integer'],
            [['value'], 'number'],
            [['impuesto'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ordering' => 'Ordering',
            'impuesto' => 'Impuesto',
            'value' => 'Valor',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
        ];
    }
}
