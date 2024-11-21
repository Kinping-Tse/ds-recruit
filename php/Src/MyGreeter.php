<?php
/**
 * MyGreeter
 *
 * @author XJP09_HK <jianping_xie@aliyun.com>
 * @version 1.0 (2024-11-21 14:45:27)
 */

namespace Src;

class MyGreeter
{
    /**
     * 能够根据不同的运行时间返回不同的消息字符串
     *
     * @param integer $hour 一天的运行时间的小时数，范围为0~24，-1或者其他不合法数值为取当前系统运行时间
     * @return string
     */
    public function greeting(int $hour = -1): string
    {
        // 当运行时间在6AM至12AM之间时，返回 "Good morning"。
        // 当运行时间在12AM至6PM之间时，返回 "Good afternoon"。
        // 当运行时间在6PM至第二天6AM之间时，返回 "Good evening"。
        $greeting = 'Good evening';
        $hour === -1 && $hour = date('G');

        if ($hour >= 6 && $hour < 12) {
            $greeting = 'Good morning';
        } else if ($hour >= 12 && $hour < 18) {
            $greeting = 'Good afternoon';
        }

        return $greeting;
    }
}
