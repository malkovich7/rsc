<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RscProducto;

/**
 * RscProductoSearch represents the model behind the search form of `app\models\RscProducto`.
 */
class RscProductoSearch extends RscProducto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'activo', 'created_by', 'modified_by'], 'integer'],
            [['nombreproducto', 'idcategoria', 'notas', 'ultima_modificacion'], 'safe'],
            [['preciobase', 'cantidadminimarequerida'], 'number'],
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
        $query = RscProducto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
		'query' => $query,
		'pagination'=>['pageSize'=>1]
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
            'preciobase' => $this->preciobase,
            'cantidadminimarequerida' => $this->cantidadminimarequerida,
            'activo' => $this->activo,
            'created_by' => $this->created_by,
            'modified_by' => $this->modified_by,
            'ultima_modificacion' => $this->ultima_modificacion,
        ]);

        $query->andFilterWhere(['like', 'nombreproducto', $this->nombreproducto])
            ->andFilterWhere(['like', 'idcategoria', $this->idcategoria])
            ->andFilterWhere(['like', 'notas', $this->notas]);

        return $dataProvider;
    }
}
