<?php
class Tree
{
    //主键
    private static $primary = 'id';
    //父键
    private static $parentId = 'parent_id';
    //子节点名称
    private static $child    = 'child';


    public static function setConfig($primary = '', $parentId = '', $child = ''){
        if(empty($primary)) self::$primary  = $primary;
        if(empty($prentId)) self::$parentId = $parentId;
        if(empty($child))   self::$child    = $child;
    }

    public static  function  makeTree(&$data, $index = 0)
    {
        $childs = self::findChild($data, $index);
        if(empty($childs))
        {
            return $childs;
        }

        foreach($childs as $k => &$v)
        {
            if(empty($data)) break;
            $child = self::makeTree($data, $v['id']);
            if(!empty($child))
            {
                $v[self::$child] = $child;
            }
        }
        unset($v);
        return $childs;
    }

    public static function findChild(&$data, $index)
    {
        $childs = [];
		foreach ($data as $k => $v){
			if($v[self::$parentId] == $index){
				$childs[]  = $v;
                unset($v);
			}
		}
		return $childs;
    }
}