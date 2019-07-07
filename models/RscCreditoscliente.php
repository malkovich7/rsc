<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_creditoscliente".
 *
 * @property int $idcliente
 * @property int $creditotiempodias
 * @property double $creditomonto
 * @property string $notas
 * @property int $activo
 * @property int $created_by
 * @property int $modified_by
 * @property string $ultima_modificacion
 *
 * @property RscClienteProveedor $cliente
 * @property RscPedidoCabecera[] $rscPedidoCabeceras
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
            [['idcliente', 'creditotiempodias', 'creditomonto' ], 'required'],
            [['idcliente', 'creditotiempodias', 'activo', 'created_by', 'modified_by'], 'integer'],
            [['creditomonto'], 'number'],
            [['ultima_modificacion'], 'safe'],
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
            'idcliente' => 'Id cliente',
            'creditotiempodias' => 'Crédito en días',
            'creditomonto' => 'Crédito en monto',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRscPedidoCabeceras()
    {
        return $this->hasMany(RscPedidoCabecera::className(), ['idcredito' => 'idcliente']);
    }
}
