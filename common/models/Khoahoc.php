<?php 
namespace common\models;

use yii\base\Model;
use yii2tech\embedded\ContainerInterface;
use yii2tech\embedded\ContainerTrait;

class Khoahoc extends Model implements ContainerInterface
{
    use ContainerTrait;

    public $baihoc = [];
    public $commentsData = [];

    public function embedProfile()
    {
        return $this->mapEmbedded('baihoc', Baihoc::className());
    }

    // public function embedComments()
    // {
    //     return $this->mapEmbeddedList('commentsData', Comment::className());
    // }
}

$user = new Khoahoc();
$user->baihoc->ten = 'John';

 ?>