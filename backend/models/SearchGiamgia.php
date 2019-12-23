<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Giamgia;

/**
 * SearchGiamgia represents the model behind the search form of `backend\models\Giamgia`.
 */
class SearchGiamgia extends Giamgia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'tenmagiam', 'noidung', 'thoigianbatdau', 'thoigianketthuc', 'soluong', 'trangthai'], 'safe'],
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
        $query = Giamgia::find();

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
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'tenmagiam', $this->tenmagiam])
            ->andFilterWhere(['like', 'noidung', $this->noidung])
            ->andFilterWhere(['like', 'thoigianbatdau', $this->thoigianbatdau])
            ->andFilterWhere(['like', 'thoigianketthuc', $this->thoigianketthuc])
            ->andFilterWhere(['like', 'soluong', $this->soluong])
            ->andFilterWhere(['like', 'trangthai', $this->trangthai]);

        return $dataProvider;
    }
}
