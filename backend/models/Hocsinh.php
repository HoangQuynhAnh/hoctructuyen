<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "hocsinh".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $lop
 * @property mixed $truong
 * @property mixed $matkhau
 * @property mixed $sdt
 * @property mixed $anh
 * @property mixed $hoten
 * @property mixed $ngaysinh
 * @property mixed $gioitinh
 * @property mixed $diachi
 * @property mixed $email
 * @property mixed $taikhoan
 * @property mixed $matkhau
 * @property mixed $trangthai
 */
class Hocsinh extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['hoctructuyen', 'hocsinh'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'lop',
            'truong',
            'matkhau',
            'sdt',
            'anh',
            'hoten',
            'ngaysinh',
            'gioitinh',
            'diachi',
            'email',
            'taikhoan',
            'matkhau',
            'trangthai',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lop', 'truong', 'matkhau', 'sdt', 'anh', 'hoten', 'ngaysinh', 'gioitinh', 'diachi', 'email', 'taikhoan', 'matkhau', 'trangthai'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'lop' => 'Lớp',
            'truong' => 'Trường',
            'matkhau' => 'Mật khẩu',
            'sdt' => 'Sdt',
            'anh' => 'Ảnh',
            'hoten' => 'Họ tên',
            'ngaysinh' => 'Ngày sinh',
            'gioitinh' => 'Giới tính',
            'diachi' => 'Điạ chỉ',
            'email' => 'Email',
            'taikhoan' => 'Tài khoản',
            'trangthai' => 'Trạng thái',
        ];
    }
}
