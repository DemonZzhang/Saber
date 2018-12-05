<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/5
 * Time: 16:46
 */

namespace Saber\Tools;


class File
{
    /**
     * 获取文件后缀
     * @param $fie
     * @return string
     */
    public static function CheckType($fie)
    {
        $str = strrev($fie);
        return strrev(strchr($str,'.',true));
    }
}