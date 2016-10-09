<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Insert Sort Function
 */
function insert_sort(array $data, $assoc = 'asc') {
    $lenth = count($data);
    
    for ($i = 1; $i < $lenth; $i++) {
        $key = $data[$i];
        for ($j = $i - 1; $j >= 0 && ($assoc=='asc' ? $data[$j] > $key : $data[$j] < $key); $j--) {
            $data[$j + 1] = $data[$j];
        }
        $data[$j + 1] = $key;
    }
    
    return $data;
}

/**
 * 证明:
 * 开始:第一次循环之前,j=1,数组是有序的。
 * 保持:某次循环开始时,0到j-1是有序的，当前循环将j序号元素插入合适的位置，循环结束
 *      时，0到j有序，下次循环有序。
 * 结束:j=length+1时，循环结束，而0到length的序号有序，因此算法正确。
 */

$data = [9,2,4,3,6,1];
$result = insert_sort($data,'desc');
var_dump($result);