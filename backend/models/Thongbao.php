<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "thongbao".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $tieude
 * @property mixed $link
 * @property mixed $noidung
 * @property mixed $ngaytao
 * @property mixed $ngaycapnhat
 * @property mixed $trangthai
 */
class Thongbao extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['hoctructuyen', 'thongbao'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'tieude',
            'link',
            'noidung',
            'ngaytao',
            'ngaycapnhat',
            'trangthai',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tieude', 'link', 'noidung', 'ngaytao', 'ngaycapnhat', 'trangthai'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'tieude' => 'Tiêu đề',
            'link' => 'Đường dẫn',
            'noidung' => 'Nội dung',
            'ngaytao' => 'Ngày tạo',
            'ngaycapnhat' => 'Ngày cập nhật',
            'trangthai' => 'Trạng thái',
        ];
    }
}
