<?php
/**
 * User: wxxiong6@gmail.com
 * Date: 2019/12/16
 * Time: 10:07
 */

use PHPUnit\Framework\TestCase;
use wxxiong6\tree\Tree;

class TreeTest extends TestCase
{
    public function testMakeTree()
    {
        global $data;
        $tree = Tree::makeTree($data);
        $this->assertCount(1, $tree);
        $this->assertCount(2, $tree[0]['child']);
        $this->assertCount(4, $tree[0]['child'][0]);
        $this->assertCount(4, $tree[0]['child'][1]);
    }

}
