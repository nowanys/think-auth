<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace yunwuxin\auth\interfaces;

interface Guard
{

    /**
     * 是否通过认证
     *
     * @return mixed
     */
    public function check();

    /**
     * 获取通过认证的用户
     *
     * @return mixed
     */
    public function user();

    /**
     * 设置当前用户
     *
     * @param  $user
     * @return $this
     */
    public function setUser($user);

    /**
     * Validate a user's credentials.
     *
     * @param array $credentials
     * @return bool
     */
    public function validate(array $credentials = []);
}
