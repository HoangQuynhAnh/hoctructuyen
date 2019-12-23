<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
  public $hoten;
      public   $gioitinh;
      public   $hocvi;
        public $fb;
       public  $noicongtac;
        public $gioithieu;
        public $anh;
        public $ngaysinh;
        public $monday;
        public $diachi;
        public $status;
        public $khoahoc;




    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Tên tài khoản đã tồn tại'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Địa chỉ email đã tồn tại'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
  ['khoahoc', 'common\validators\EmbedDocValidator', 'scenario' => '','model'=>'\common\models\User'],
            [['hoten','noicongtac'], 'required'],
            // ['khoahoc', 'common\validators\EmbedDocValidator', 'scenario' => 'user','model'=>'\common\models\User'],
            [['hoten', 'noicongtac', 'monday', 'gioitinh','hocvi','diachi', 'fb', 'gioithieu', 'anh', 'ngaysinh', 'ngaytao','password', 'ngaycapnhat','status'], 'safe']
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();

        $user->username = $this->username;
        $user->hoten= $this->hoten;
        $user->gioitinh= $this->gioitinh;
        $user->hocvi= $this->hocvi;
        $user->fb= $this->fb;
        $user->noicongtac= $this->noicongtac;
        $user->gioithieu= $this->gioithieu;
        $user->anh= $this->anh;
        $user->ngaysinh= $this->ngaysinh;
        $user->monday= $this->monday;
        $user->diachi= $this->diachi;
        $user->email = $this->email;
        $user->status = $this->status;

        $user->setPassword($this->password);
        $user->generateAuthKey();
       // $user->generateEmailVerificationToken();
        return $user->save();

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
