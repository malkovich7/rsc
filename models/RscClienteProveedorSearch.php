<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RscClienteProveedor;

/**
 * RscClienteProveedorSearch represents the model behind the search form of `app\models\RscClienteProveedor`.
 */
class RscClienteProveedorSearch extends RscClienteProveedor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcliente', 'clienteproveedor', 'idactivo', 'usuario_modifico', 'created_by'], 'integer'],
            [['nombre', 'apellidos', 'direccion_entrega', 'direccion_fiscal', 'rfc', 'notas', 'fecha_alta', 'ultima_modificacion'], 'safe'],
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
        $query = RscClienteProveedor::find();

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
            'idcliente' => $this->idcliente,
            'clienteproveedor' => $this->clienteproveedor,
            'idactivo' => $this->idactivo,
            'fecha_alta' => $this->fecha_alta,
            'ultima_modificacion' => $this->ultima_modificacion,
            'usuario_modifico' => $this->usuario_modifico,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'direccion_entrega', $this->direccion_entrega])
            ->andFilterWhere(['like', 'direccion_fiscal', $this->direccion_fiscal])
            ->andFilterWhere(['like', 'rfc', $this->rfc])
            ->andFilterWhere(['like', 'notas', $this->notas]);

        return $dataProvider;
    }
}
