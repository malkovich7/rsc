<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_pedido_cabecera".
 *
 * @property int $id
 * @property int $idcliente
 * @property int $idestatus
 * @property int $idprioridad
 * @property double $monto
 * @property double $montoiva
 * @property double $montoTotal
 * @property int $idiva
 * @property int $idcredito
 * @property string $fechaelaboracion
 * @property string $fechaentrega
 * @property string $fechapago
 * @property string $factura
 * @property string $fechaelaboracionfactura
 * @property string $notaspedido
 * @property int $idtipoenvio
 * @property string $trackingchofer
 * @property int $activo
 * @property int $created_by
 * @property int $modified_by
 * @property string $ultima_modificacion
 *
 * @property RscContenidoPedido[] $rscContenidoPedidos
 * @property RscClienteProveedor $cliente
 * @property RscCreditoscliente $credito
 * @property RscEstatus $estatus
 * @property RscImpuestos $iva
 * @property RscPrioridad $prioridad
 */
class RscPedidoCabecera extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rsc_pedido_cabecera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcliente', 'idestatus', 'idprioridad', 'idiva', 'idcredito', 'fechaelaboracion', 'fechaentrega', 'fechapago', 'factura', 'notaspedido', 'idtipoenvio', 'trackingchofer', 'activo', 'created_by', 'modified_by'], 'required'],
            [['idcliente', 'idestatus', 'idprioridad', 'idiva', 'idcredito', 'idtipoenvio', 'activo', 'created_by', 'modified_by'], 'integer'],
            [['monto', 'montoiva', 'montoTotal'], 'number'],
            [['fechaelaboracion', 'fechaentrega', 'fechapago', 'fechaelaboracionfactura', 'ultima_modificacion'], 'safe'],
            [['notaspedido'], 'string'],
            [['factura', 'trackingchofer'], 'string', 'max' => 1000],
            [['idcliente'], 'exist', 'skipOnError' => true, 'targetClass' => RscClienteProveedor::className(), 'targetAttribute' => ['idcliente' => 'idcliente']],
            [['idcredito'], 'exist', 'skipOnError' => true, 'targetClass' => RscCreditoscliente::className(), 'targetAttribute' => ['idcredito' => 'idcliente']],
            [['idestatus'], 'exist', 'skipOnError' => true, 'targetClass' => RscEstatus::className(), 'targetAttribute' => ['idestatus' => 'id']],
            [['idiva'], 'exist', 'skipOnError' => true, 'targetClass' => RscImpuestos::className(), 'targetAttribute' => ['idiva' => 'id']],
            [['idprioridad'], 'exist', 'skipOnError' => true, 'targetClass' => RscPrioridad::className(), 'targetAttribute' => ['idprioridad' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID Pedido',
            'idcliente' => 'Cliente',
            'idestatus' => 'Estatus',
            'idprioridad' => 'Prioridad',
            'monto' => 'Monto',
            'montoiva' => 'Monto Iva',
            'montoTotal' => 'Monto Total',
            'idiva' => 'Iva',
            'idcredito' => 'Idcredito',
            'fechaelaboracion' => 'Fecha de elaboracion',
            'fechaentrega' => 'Fecha de entrega',
            'fechapago' => 'Fecha de pago',
            'factura' => 'Factura no.',
            'fechaelaboracionfactura' => 'Fecha factura',
            'notaspedido' => 'Notas',
            'idtipoenvio' => 'Envio',
            'trackingchofer' => 'Tracking/chofer',
            'activo' => 'Activo',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'ultima_modificacion' => 'Ultima Modificacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRscContenidoPedidos()
    {
        return $this->hasMany(RscContenidoPedido::className(), ['idpedido' => 'id']);
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
    public function getCredito()
    {
        return $this->hasOne(RscCreditoscliente::className(), ['idcliente' => 'idcredito']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstatus()
    {
        return $this->hasOne(RscEstatus::className(), ['id' => 'idestatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIva()
    {
        return $this->hasOne(RscImpuestos::className(), ['id' => 'idiva']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrioridad()
    {
        return $this->hasOne(RscPrioridad::className(), ['id' => 'idprioridad']);
    }
}
