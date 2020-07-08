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

    public function testSetConfig()
    {
        $data = require __DIR__ . '/data.php';
        Tree::setConfig('id', 'parent_id', 'children');
        $tree = Tree::makeTree($data);
        $this->assertIsArray($tree[0]['children']);
    }

    public function testMakeTree()
    {
        $data = require __DIR__ . '/data.php';
        $tree = Tree::makeTree($data);
        $this->assertCount(1, $tree);
        $this->assertCount(2, $tree[0]['children']);
        $this->assertCount(4, $tree[0]['children'][0]);
        $this->assertCount(4, $tree[0]['children'][1]);
        $this->assertEquals('北京', $tree[0]['children'][0]['city']);
        $this->assertEquals('北京市', $tree[0]['children'][0]['children'][0]['city']);
        $this->assertEquals('上海', $tree[0]['children'][1]['city']);
        $this->assertEquals('上海市', $tree[0]['children'][1]['children'][0]['city']);
    }

    public function testFindChild()
    {
        $data = require __DIR__ . '/data.php';
        $tree = Tree::makeTree($data);
        $children = Tree::findChild($tree, 0);
        $this->assertIsArray($children);
        $this->assertEquals('中国', $children[0]['city']);
    }
}
