[![GitHub forks](https://img.shields.io/github/forks/wxxiong6/tree.svg)](https://github.com/wxxiong6/tree/network)
[![Packagist](https://img.shields.io/packagist/v/wxxiong6/tree.svg?style=plastic)](https://packagist.org/packages/wxxiong6/tree)
![Packagist](https://img.shields.io/packagist/dt/wxxiong6/tree)

## tree
- 使用递归把数据构造成树形结构数据
- 常用于菜单、权限、分类等功能实现
- 避免多次查询数据库,使用php来处理
  
## Installation
```shell
composer require wxxiong6/tree
```


## Usage
```PHP
//设置主键、parent标识名称 子节点名称
Tree::setConfig($primary = '', $parentId = '', $child = '');
//生成tree
Tree::makeTree($data);
```

运行结果

``` 
Array
(
    [0] = Array
   (
      [id] = 1
       [city] = 中国
       [parent_id] = 0
        [child] = Array
         (
                 [0] = Array
                      (
                             [id] = 2
                            [city] = 北京
                             [parent_id] = 1
                             [child] = Array
                                (
                                 [0] = Array
                                         (
                                             [id] = 3
                                            [city] = 北京市
                                            [parent_id] = 2
                                            [child] = Array
                                                (
                                                   [0] = Array
                                                       (
                                                            [id] = 4
                                                            [city] = 东城区
                                                            [parent_id] = 3
                                                        )

                                                   
                                                )

                                        )

                                )

                        )

                    [1] = Array
                        (
                            [id] = 11
                            [city] = 上海
                            [parent_id] = 1
                            [child] = Array
                                (
                                    [0] = Array
                                        (
                                            [id] = 12
                                            [city] = 上海市
                                            [parent_id] = 11
                                        )


                                )

                        )

                )

        )

)
```
