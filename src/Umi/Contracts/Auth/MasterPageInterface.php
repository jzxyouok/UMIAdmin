<?php

namespace YM\Umi\Contracts\Auth;

/**
 * implement interface can customize your own content by each section of following method
 * 实现这些接口可以定制你自己想要的内容在下面的模块
 */
interface MasterPageInterface
{
    public function header();

    public function sideMenu();

    public function body();

    public function footer();
}