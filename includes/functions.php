<?php
include "includes/config.php";

// функция для возвращения адреса файлов
function get_url($page = '') {
  return HOST . "/$page";
}