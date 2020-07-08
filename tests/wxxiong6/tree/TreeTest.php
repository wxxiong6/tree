<?php
/**
 * User: wxxiong6@gmail.com
 * Date: 2019/12/16
 * Time: 10:07.
 */

namespace wxxiong6\tree\tests;

use PHPUnit\Framework\TestCase;
use wxxiong6\tree\Tree;

class TreeTest extends TestCase
{
    public function testMakeTree()
    {
        $data = require __DIR__ . '/data.php';
        $tree = Tree::makeTree($data);
        $this->assertCount(1, $tree);
        $this->assertCount(2, $tree[0]['child']);
        $this->assertCount(4, $tree[0]['child'][0]);
        $this->assertCount(4, $tree[0]['child'][1]);
        $this->assertEquals('北京', $tree[0]['child'][0]['city']);
        $this->assertEquals('北京市', $tree[0]['child'][0]['child'][0]['city']);
        $this->assertEquals('上海', $tree[0]['child'][1]['city']);
        $this->assertEquals('上海市', $tree[0]['child'][1]['child'][0]['city']);
    }
}
