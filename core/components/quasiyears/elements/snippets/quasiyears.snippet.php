<?php
/**
 * https://quasi-art.ru/
 * 2016
 */

/**
 * Год запуска сайта
 */
$past = $modx->getOption('past', $scriptProperties, '');
/**
 * Выводить ли текущий год
 */
$current = $modx->getOption('current', $scriptProperties, '');
/**
 * Разделитель, если нужно вывести первый и текущий год
 */
$separator = $modx->getOption('separator', $scriptProperties, '');
/**
 * Текущий год
 */
$year = '';

/**
 * Вывод
 */
$output = '';

if (empty($past)) {
	$separator = '';
}
if ($current == 1) {
	$year = date('Y');
}

return $past.$separator.$year;