<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Baihoc;

/**
 * SearchBaihoc represents the model behind the search form of `backend\models\Baihoc`.
 */
class SearchBaihoc extends Baihoc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'tieude', 'link', 'theloai', 'noidung', 'ngaytao', 'ngaycapnhat', 'trangthai'], 'safe'],
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
    public function search($params,$id)
    {
        $query = Baihoc::find()->where(['khoahoc'=>$id]);
        // var_dump($query);
        // die();

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
            ->andFilterWhere(['like', 'tieude', $this->tieude])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'theloai', $this->theloai])
            ->andFilterWhere(['like', 'noidung', $this->noidung])
            ->andFilterWhere(['like', 'ngaytao', $this->ngaytao])
            ->andFilterWhere(['like', 'ngaycapnhat', $this->ngaycapnhat])
            ->andFilterWhere(['like', 'trangthai', $this->trangthai])
            ->andFilterWhere(['like', 'khoahoc', $this->khoahoc]);


        return $dataProvider;
    }
}
