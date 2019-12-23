<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Hocsinh;

/**
 * SearchHocsinh represents the model behind the search form of `backend\models\Hocsinh`.
 */
class SearchHocsinh extends Hocsinh
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'lop', 'truong', 'matkhau', 'sdt', 'anh', 'hoten', 'ngaysinh', 'gioitinh', 'diachi', 'email', 'taikhoan', 'matkhau', 'trangthai'], 'safe'],
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
        $query = Hocsinh::find();

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
            ->andFilterWhere(['like', 'lop', $this->lop])
            ->andFilterWhere(['like', 'truong', $this->truong])
            ->andFilterWhere(['like', 'matkhau', $this->matkhau])
            ->andFilterWhere(['like', 'sdt', $this->sdt])
            ->andFilterWhere(['like', 'anh', $this->anh])
            ->andFilterWhere(['like', 'hoten', $this->hoten])
            ->andFilterWhere(['like', 'ngaysinh', $this->ngaysinh])
            ->andFilterWhere(['like', 'gioitinh', $this->gioitinh])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'taikhoan', $this->taikhoan])
            ->andFilterWhere(['like', 'trangthai', $this->trangthai]);

        return $dataProvider;
    }
}
