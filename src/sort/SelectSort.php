<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function select_sort(array $data, $assoc = 'asc') {
    for ($i = 0; $i < count($data) - 1; $i++) {
        $key = $data[$i];
        $index = $i;
        for ($j = $i + 1; $j <= count($data) - 1; $j++) {
            if ($data[$j] < $key) {
                $key = $data[$j];
                $index = $j;
            }
        }
        if ($index != $i) {
            $tmp = $data[$index];
            $data[$index] = $data[$i];
            $data[$i] = $tmp;
        }
    }

    return $data;
}

/**
 * 证明:
 * 循环不变式:每次循环时，0到i-1是排序好的，并且都比i到count要小，
 * 开始：i=0，左侧数组为空。
 * 保持:第i轮循环开始时，假设0到i-1是有序的,而i+1到data.length都比左侧要大，循环寻找右侧
 *      最小的元素。并将该元素与i互换。循环结束后0到i是有序的。
 * 结束:i=count-1时结束，0到count-1有序，而count比左侧大，因此数组有序，算法正确。
 */

$data = [9, 2, 4, 3, 6, 1];
$result = select_sort($data, 'desc');
var_dump($result);
