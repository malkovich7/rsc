<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RscCreditoscliente;

/**
 * RscCreditosclienteSearch represents the model behind the search form of `app\models\RscCreditoscliente`.
 */
class RscCreditosclienteSearch extends RscCreditoscliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcliente', 'creditotiempodias', 'activo', 'created_by', 'modified_by'], 'integer'],
            [['idclienteproveedor', 'notas', 'ultima_modificacion'], 'safe'],
            [['creditomonto'], 'number'],
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
        $query = RscCreditoscliente::find();

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
            'creditotiempodias' => $this->creditotiempodias,
            'creditomonto' => $this->creditomonto,
            'activo' => $this->activo,
            'created_by' => $this->created_by,
            'modified_by' => $this->modified_by,
            'ultima_modificacion' => $this->ultima_modificacion,
        ]);

        $query->andFilterWhere(['like', 'idclienteproveedor', $this->idclienteproveedor])
            ->andFilterWhere(['like', 'notas', $this->notas]);

        return $dataProvider;
    }
}
