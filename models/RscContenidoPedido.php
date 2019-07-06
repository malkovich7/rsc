<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_contenido_pedido".
 *
 * @property int $id
 * @property int $idpedido
 * @property int $iditeminventario
 * @property double $cantidad
 * @property int $created_by
 * @property int $modified_by
 * @property string $ultima_modificacion
 *
 * @property RscInventario $iteminventario
 * @property RscPedidoCabecera $pedido
 */
class RscContenidoPedido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_contenido_pedido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpedido', 'iditeminventario', 'created_by', 'modified_by'], 'required'],
            [['idpedido', 'iditeminventario', 'created_by', 'modified_by'], 'integer'],
            [['cantidad'], 'number'],
            [['ultima_modificacion'], 'safe'],
            [['iditeminventario'], 'exist', 'skipOnError' => true, 'targetClass' => RscInventario::className(), 'targetAttribute' => ['iditeminventario' => 'id']],
            [['idpedido'], 'exist', 'skipOnError' => true, 'targetClass' => RscPedidoCabecera::className(), 'targetAttribute' => ['idpedido' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpedido' => 'Idpedido',
            'iditeminventario' => 'Iditeminventario',
            'cantidad' => 'Cantidad',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'ultima_modificacion' => 'Ultima Modificacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIteminventario()
    {
        return $this->hasOne(RscInventario::className(), ['id' => 'iditeminventario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedido()
    {
        return $this->hasOne(RscPedidoCabecera::className(), ['id' => 'idpedido']);
    }
}
