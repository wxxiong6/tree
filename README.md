php tree
====  

include dirname(__DIR__).'/Tree.php';

$data = include __DIR__."/data.php";

print_r(Tree::makeTree($data));



Array
(
    [0] => Array
        (
            [id] => 1
            [city] => 中国
            [parent_id] => 0
            [child] => Array
                (
                    [0] => Array
                        (
                            [id] => 2
                            [city] => 北京
                            [parent_id] => 1
                            [child] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 3
                                            [city] => 北京市
                                            [parent_id] => 2
                                            [child] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [id] => 4
                                                            [city] => 东城区
                                                            [parent_id] => 3
                                                        )

                                                    [1] => Array
                                                        (
                                                            [id] => 5
                                                            [city] => 西城区
                                                            [parent_id] => 3
                                                        )

                                                    [2] => Array
                                                        (
                                                            [id] => 6
                                                            [city] => 丰台区
                                                            [parent_id] => 3
                                                        )

                                                    [3] => Array
                                                        (
                                                            [id] => 7
                                                            [city] => 海淀区
                                                            [parent_id] => 3
                                                        )

                                                    [4] => Array
                                                        (
                                                            [id] => 8
                                                            [city] => 房山区
                                                            [parent_id] => 3
                                                        )

                                                    [5] => Array
                                                        (
                                                            [id] => 9
                                                            [city] => 通州区
                                                            [parent_id] => 3
                                                        )

                                                    [6] => Array
                                                        (
                                                            [id] => 10
                                                            [city] => 昌平区
                                                            [parent_id] => 3
                                                        )

                                                )

                                        )

                                )

                        )

                    [1] => Array
                        (
                            [id] => 11
                            [city] => 上海
                            [parent_id] => 1
                            [child] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 12
                                            [city] => 上海市
                                            [parent_id] => 11
                                        )

                                    [1] => Array
                                        (
                                            [id] => 13
                                            [city] => 黄浦区
                                            [parent_id] => 11
                                        )

                                    [2] => Array
                                        (
                                            [id] => 14
                                            [city] => 长宁区
                                            [parent_id] => 11
                                        )

                                    [3] => Array
                                        (
                                            [id] => 15
                                            [city] => 卢湾区
                                            [parent_id] => 11
                                        )

                                    [4] => Array
                                        (
                                            [id] => 16
                                            [city] => 徐汇区
                                            [parent_id] => 11
                                        )

                                    [5] => Array
                                        (
                                            [id] => 17
                                            [city] => 普陀区
                                            [parent_id] => 11
                                        )

                                    [6] => Array
                                        (
                                            [id] => 18
                                            [city] => 闸北区
                                            [parent_id] => 11
                                        )

                                    [7] => Array
                                        (
                                            [id] => 19
                                            [city] => 虹口区
                                            [parent_id] => 11
                                        )

                                )

                        )

                )

        )

)
