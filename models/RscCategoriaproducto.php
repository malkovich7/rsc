<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_categoriaproducto".
 *
 * @property int $id
 * @property string $categoria
 * @property int $created_by
 * @property int $modified_by
 * @property string $ultima_modificacion
 *
 * @property RscProducto $rscProducto
 */
class RscCategoriaproducto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_categoriaproducto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_by', 'modified_by'], 'integer'],
            [['ultima_modificacion'], 'safe'],
            [['categoria'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoria' => 'Categoria',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'ultima_modificacion' => 'Ultima Modificacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRscProducto()
    {
        return $this->hasOne(RscProducto::className(), ['id' => 'id']);
    }
}
