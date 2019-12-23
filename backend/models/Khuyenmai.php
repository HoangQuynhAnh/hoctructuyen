<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "khuyenmai".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $ten
 * @property mixed $ngaybatdau
 * @property mixed $ngayketthuc
 * @property mixed $loaikm
 * @property mixed $phantram
 * @property mixed $kichhoat
 */
class Khuyenmai extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['hoctructuyen', 'khuyenmai'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'ten',
            'ngaybatdau',
            'ngayketthuc',
            'loaikm',
            'phantram',
            'kichhoat',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'ngaybatdau', 'ngayketthuc', 'loaikm', 'phantram', 'kichhoat'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'ten' => 'Tên',
            'ngaybatdau' => 'Bắt đầu',
            'ngayketthuc' => 'Kết thúc',
            'loaikm' => 'Loại khuyến mãi',
            'phantram' => 'Phần trăm',
            'kichhoat' => 'Trạng thái',
        ];
    }
}
