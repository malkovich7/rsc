<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_creditoscliente".
 *
 * @property int $idcliente
 * @property string $idclienteproveedor
 * @property int $creditotiempodias
 * @property double $creditomonto
 * @property string $notas
 * @property int $activo
 * @property int $created_by
 * @property int $modified_by
 * @property string $ultima_modificacion
 *
 * @property RscClienteProveedor $cliente
 */
class RscCreditoscliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_creditoscliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcliente', 'idclienteproveedor', 'creditotiempodias', 'creditomonto', 'activo', 'created_by', 'modified_by'], 'required'],
            [['idcliente', 'creditotiempodias', 'activo', 'created_by', 'modified_by'], 'integer'],
            [['creditomonto'], 'number'],
            [['ultima_modificacion'], 'safe'],
            [['idclienteproveedor'], 'string', 'max' => 255],
            [['notas'], 'string', 'max' => 500],
            [['idcliente'], 'unique'],
            [['idcliente'], 'exist', 'skipOnError' => true, 'targetClass' => RscClienteProveedor::className(), 'targetAttribute' => ['idcliente' => 'idcliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcliente' => 'Id Cliente',
            'idclienteproveedor' => 'Idclienteproveedor',
            'creditotiempodias' => 'Días de Crédito',
            'creditomonto' => 'Monto de Crédito',
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
    public function getCliente()
    {
        return $this->hasOne(RscClienteProveedor::className(), ['idcliente' => 'idcliente']);
    }
}
