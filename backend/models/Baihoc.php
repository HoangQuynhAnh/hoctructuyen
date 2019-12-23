<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "baihoc".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $tieude
 * @property mixed $link
 * @property mixed $theloai
 * @property mixed $noidung
 * @property mixed $ngaytao
 * @property mixed $ngaycapnhat
 * @property mixed $trangthai
 */
class Baihoc extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
      public $file;
    public static function collectionName()
    {
        return ['hoctructuyen', 'baihoc'];
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
            'theloai',
            'noidung',
            'ngaytao',
            'ngaycapnhat',
            'trangthai',
            'khoahoc',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tieude','khoahoc', 'link', 'theloai', 'noidung', 'ngaytao', 'ngaycapnhat', 'trangthai'], 'safe'],
             [['file'],'file','extensions'=>'mp4'],
            
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
            'link' => 'Video',
            'theloai' => 'Thể loại',
            'noidung' => 'Nội dung',
            'ngaytao' => 'Ngày tạo',
            'ngaycapnhat' => 'Ngày cập nhật',
            'trangthai' => 'Trạng thái',
        ];
    }
}
