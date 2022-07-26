<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Ayunda");
addTodoList("Novani");
addTodoList("Nvn");
addTodoList("Yunda");
addTodoList("Nvn");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();

