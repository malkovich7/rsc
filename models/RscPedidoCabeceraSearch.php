<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RscPedidoCabecera;

/**
 * RscPedidoCabeceraSearch represents the model behind the search form of `app\models\RscPedidoCabecera`.
 */
class RscPedidoCabeceraSearch extends RscPedidoCabecera
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idcliente', 'idestatus', 'idprioridad', 'idiva', 'idcredito', 'idtipoenvio', 'activo', 'created_by', 'modified_by'], 'integer'],
            [['monto', 'montoiva', 'montoTotal'], 'number'],
            [['fechaelaboracion', 'fechaentrega', 'fechapago', 'factura', 'fechaelaboracionfactura', 'notaspedido', 'trackingchofer', 'ultima_modificacion'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RscPedidoCabecera::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'idcliente' => $this->idcliente,
            'idestatus' => $this->idestatus,
            'idprioridad' => $this->idprioridad,
            'monto' => $this->monto,
            'montoiva' => $this->montoiva,
            'montoTotal' => $this->montoTotal,
            'idiva' => $this->idiva,
            'idcredito' => $this->idcredito,
            'fechaelaboracion' => $this->fechaelaboracion,
            'fechaentrega' => $this->fechaentrega,
            'fechapago' => $this->fechapago,
            'fechaelaboracionfactura' => $this->fechaelaboracionfactura,
            'idtipoenvio' => $this->idtipoenvio,
            'activo' => $this->activo,
            'created_by' => $this->created_by,
            'modified_by' => $this->modified_by,
            'ultima_modificacion' => $this->ultima_modificacion,
        ]);

        $query->andFilterWhere(['like', 'factura', $this->factura])
            ->andFilterWhere(['like', 'notaspedido', $this->notaspedido])
            ->andFilterWhere(['like', 'trackingchofer', $this->trackingchofer]);

        return $dataProvider;
    }
}
