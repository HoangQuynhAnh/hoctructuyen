<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Thongbao;

/**
 * ThongbaoSearch represents the model behind the search form of `backend\models\Thongbao`.
 */
class ThongbaoSearch extends Thongbao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'tieude', 'link', 'noidung', 'ngaytao', 'ngaycapnhat', 'trangthai'], 'safe'],
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
        $query = Thongbao::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
         $dataProvider->setSort([
        'attributes' => [
            'tieude'=>[
                'desc' => ['tieude' => SORT_DESC],
                'asc' => ['tieude' => SORT_ASC],
            ],
            'ngaytao'=>[
                'desc' => ['ngaytao' => SORT_DESC],
                'asc' => ['ngaytao' => SORT_ASC],
            ],

            'ngaycapnhat'=>[
                'desc' => ['ngaycapnhat' => SORT_DESC],
                'asc' => ['ngaycapnhat' => SORT_ASC],
            ],
        ]
    ]);        


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'tieude', $this->tieude])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'noidung', $this->noidung])
            ->andFilterWhere(['like', 'ngaytao', $this->ngaytao])
            ->andFilterWhere(['like', 'ngaycapnhat', $this->ngaycapnhat])
            ->andFilterWhere(['like', 'trangthai', $this->trangthai]);

        return $dataProvider;
    }
}
