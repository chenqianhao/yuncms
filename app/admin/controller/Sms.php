<?php
// +----------------------------------------------------------------------
// | YunCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://www.yunalading.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: chenqianhao <68527761@qq.com>
// +----------------------------------------------------------------------


namespace app\admin\controller;
use app\core\phone\Phone;

/**
 * Class Sms
 * @package app\admin\controller
 */
class Sms extends AdminBaseController {
    /**
     * @return \think\response\View
     */
    public function index() {
        $smsRes = Phone::send();
        dump($smsRes);
        return view();
    }
}
