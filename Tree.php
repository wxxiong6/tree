<?php
/**
 *
 * Tree 构建tree状数据
 *
 * @author    wxxiong@gmail.com
 * @version   v1.1
 *
 */

class Tree
{
    /**
     * 主键名称.
     *
     * @var string
     */
    private static $primary = 'id';

    /**
     * 父键名称.
     *
     * @var string
     */
    private static $parentId = 'parent_id';

    /**
     * 子节点名称.
     *
     * @var string
     */
    private static $child = 'child';

    /**
     * 修改主键名称、父键名称、子节点名称.
     *
     * @param string $primary
     * @param string $parentId
     * @param string $child
     */
    public static function setConfig($primary = '', $parentId = '', $child = '')
    {
        if (!empty($primary)) {
            self::$primary = $primary;
        }
        if (!empty($parentId)) {
            self::$parentId = $parentId;
        }
        if (!empty($child)) {
            self::$child = $child;
        }
    }

    /**
     * 生成Tree.
     *
     * @param array  $data
     * @param int $index
     * @return array
     */
    public static function makeTree(&$data, $index = 0)
    {
        $children = self::findChild($data, $index);
        if (empty($children)) {
            return $children;
        }
        foreach ($children as $k => &$v) {
            if (empty($data)) {
                break;
            }
            $child = self::makeTree($data, $v[self::$primary]);
            if (!empty($child)) {
                $v[self::$child] = $child;
            }
        }
        unset($v);

        return $children;
    }

    /**
     * 查找子类.
     *
     * @param array  $data
     * @param number $index
     * @return array
     */
    public static function findChild(&$data, $index)
    {
        $children = [];
        foreach ($data as $k => $v) {
             if (strval($v[self::$parentId]) === strval($index)) {
                $children[] = $v;
                unset($data[$k]);
            }
        }

        return $children;
    }
}
