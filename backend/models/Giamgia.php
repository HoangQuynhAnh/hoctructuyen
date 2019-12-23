<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "giamgia".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $tenmagiam
 * @property mixed $noidung
 * @property mixed $thoigianbatdau
 * @property mixed $thoigianketthuc
 * @property mixed $soluong
 * @property mixed $trangthai
 */
class Giamgia extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['hoctructuyen', 'giamgia'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'tenmagiam',
            'noidung',
            'thoigianbatdau',
            'thoigianketthuc',
            'soluong',
            'trangthai',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tenmagiam', 'noidung', 'thoigianbatdau', 'thoigianketthuc', 'soluong', 'trangthai'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'tenmagiam' => 'Tên mã giảm',
            'noidung' => 'Nội dung',
            'thoigianbatdau' => 'Ngày hiệu lực',
            'thoigianketthuc' => 'Ngày kết thúc',
            'soluong' => 'Số lượng',
            'trangthai' => 'Trạng thái',
        ];
    }
}
