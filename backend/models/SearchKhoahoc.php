<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Khoahoc;

/**
 * SearchKhoahoc represents the model behind the search form of `backend\models\Khoahoc`.
 */
class SearchKhoahoc extends Khoahoc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'giaovien', 'tien', 'trangthai', 'ten', 'mota', 'gioithieu', 'yeucau', 'thoiluong', 'hocphi', 'khuyenmai', 'magiamgia', 'chude', 'luotmua', 'baihoc', 'hocsinh', 'ngaytao', 'ngaycapnhat'], 'safe'],
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
        $query = Khoahoc::find()->where(['giaovien'=>$id]);

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
            ->andFilterWhere(['like', 'giaovien', $this->giaovien])
            ->andFilterWhere(['like', 'trangthai', $this->trangthai])
            ->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'mota', $this->mota])
            ->andFilterWhere(['like', 'gioithieu', $this->gioithieu])
            ->andFilterWhere(['like', 'yeucau', $this->yeucau])
            ->andFilterWhere(['like', 'thoiluong', $this->thoiluong])
            ->andFilterWhere(['like', 'hocphi', $this->hocphi])
            ->andFilterWhere(['like', 'khuyenmai', $this->khuyenmai])
            ->andFilterWhere(['like', 'chude', $this->chude])
            ->andFilterWhere(['like', 'luotmua', $this->luotmua])
            ->andFilterWhere(['like', 'baihoc', $this->baihoc])
            ->andFilterWhere(['like', 'hocsinh', $this->hocsinh])
            ->andFilterWhere(['like', 'ngaytao', $this->ngaytao])
            ->andFilterWhere(['like', 'ngaycapnhat', $this->ngaycapnhat]);

        return $dataProvider;
    }
}
