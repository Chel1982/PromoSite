<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 09.09.16
 * Time: 12:19
 */

namespace common\widgets;

use yii\base\Widget;

class ServiceWidget extends Widget
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        return $this->render('service');
    }
}