<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RscPreciosCliente;

/**
 * RscPreciosClienteSearch represents the model behind the search form of `app\models\RscPreciosCliente`.
 */
class RscPreciosClienteSearch extends RscPreciosCliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idcliente', 'idproducto', 'idactivo'], 'integer'],
            [['descuento'], 'number'],
            [['ultima_modificacion', 'usuario_modifico'], 'safe'],
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
        $query = RscPreciosCliente::find();

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
            'idproducto' => $this->idproducto,
            'descuento' => $this->descuento,
            'idactivo' => $this->idactivo,
            'ultima_modificacion' => $this->ultima_modificacion,
        ]);

        $query->andFilterWhere(['like', 'usuario_modifico', $this->usuario_modifico]);

        return $dataProvider;
    }
}
