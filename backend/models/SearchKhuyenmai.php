<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Khuyenmai;

/**
 * SearchKhuyenmai represents the model behind the search form of `backend\models\Khuyenmai`.
 */
class SearchKhuyenmai extends Khuyenmai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'ten', 'ngaybatdau', 'ngayketthuc', 'loaikm', 'phantram', 'kichhoat'], 'safe'],
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
        $query = Khuyenmai::find();

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
            ->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'ngaybatdau', $this->ngaybatdau])
            ->andFilterWhere(['like', 'ngayketthuc', $this->ngayketthuc])
            ->andFilterWhere(['like', 'loaikm', $this->loaikm])
            ->andFilterWhere(['like', 'phantram', $this->phantram])
            ->andFilterWhere(['like', 'kichhoat', $this->kichhoat]);

        return $dataProvider;
    }
}
