<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RscInventario;

/**
 * RscInventarioSearch represents the model behind the search form of `app\models\RscInventario`.
 */
class RscInventarioSearch extends RscInventario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idactivo', 'created_by', 'modified_by'], 'integer'],
            [['idproducto', 'lote', 'caducidad', 'notas', 'ultima_modificacion'], 'safe'],
            [['cantidaddisponible', 'cantidadrecibida'], 'number'],
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
        $query = RscInventario::find();

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
            'cantidaddisponible' => $this->cantidaddisponible,
            'cantidadrecibida' => $this->cantidadrecibida,
            'caducidad' => $this->caducidad,
            'idactivo' => $this->idactivo,
            'created_by' => $this->created_by,
            'modified_by' => $this->modified_by,
            'ultima_modificacion' => $this->ultima_modificacion,
        ]);

        $query->andFilterWhere(['like', 'idproducto', $this->idproducto])
            ->andFilterWhere(['like', 'lote', $this->lote])
            ->andFilterWhere(['like', 'notas', $this->notas]);

        return $dataProvider;
    }
}
