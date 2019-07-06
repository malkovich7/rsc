<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RscPrioridad;

/**
 * RscPrioridadSearch represents the model behind the search form of `app\models\RscPrioridad`.
 */
class RscPrioridadSearch extends RscPrioridad
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nivelprioridad', 'created_by', 'modified_by'], 'integer'],
            [['nombreprioridad', 'descripcion', 'activo', 'ultima_modificacion'], 'safe'],
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
        $query = RscPrioridad::find();

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
            'nivelprioridad' => $this->nivelprioridad,
            'created_by' => $this->created_by,
            'modified_by' => $this->modified_by,
            'ultima_modificacion' => $this->ultima_modificacion,
        ]);

        $query->andFilterWhere(['like', 'nombreprioridad', $this->nombreprioridad])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'activo', $this->activo]);

        return $dataProvider;
    }
}
