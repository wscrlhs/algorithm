<?php
/*
题目：一头母羊的寿命是5年,
它会在第2年和第4年底各生下一头母羊,
第5年死去,问一开始农场有1头母羊,
20年后,农场会有多少只母羊？
 */
function sheepsCount($year){
    $sheeps = array(
        0 => 0,
    );

    for ($i = 1; $i <= $year; $i++) {
        foreach ($sheeps as $key => $sheep) {
            $sheeps[$key]++;
            if (in_array($sheeps[$key] ,array(2,4))) {
                $sheeps[] = 0;
            }
            if ($sheeps[$key] >= 5) {
                unset($sheeps[$key]);
            }
        }
    }
    return count($sheeps);
}

echo sheepsCount(50);


/*
题目：一头母羊的寿命是5年,
它会在第2年和第4年底各生下一头母羊,
第5年死去,问一开始农场有1头母羊,
20年后,农场会有多少只母羊？
 */

function countSheep($year){
    $yang = array(1,0,0,0,0);
    for($i = 1; $i <= $year; $i++){
        $temp = $yang[1] + $yang[3];
        array_unshift($yang,$temp);//数组头部添加一个单元
        array_pop($yang);//弹走数组最后一个单元
    }
    return array_sum($yang);//计算数组所有值的总和。
}
echo countSheep(50);
