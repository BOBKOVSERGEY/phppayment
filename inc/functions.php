<?php

session_start();

$data = [
  'name' => '',
  'email' => '',
  'product' => '',
  'price' => '',
];

if (!empty($_POST)) {
  require_once __DIR__ . '/db.php';
  $data = load($data);
  $orderId = save('orders', $data);
  //debug($orderId);
  header("Location: http://{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}");
}

// загрузка данных
function load($data)
{
  foreach ( $_POST as $k => $v) {
    if (array_key_exists($k, $data)) {
      $data[$k] = $v;
    }
  }
  return $data;
}

// сохраняем данные в таблицу, 1 параметром таблицу куда сохраняем, вторым сами данные
function save($table, $data)
{
  $tbl = R::dispense($table);
  foreach ($data as $k => $v) {
    $tbl->$k = $v;
  }
  // вызываем метод, который сохранит данный объект
  return R::store($tbl);
}

// дебагер
function debug($data)
{
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}