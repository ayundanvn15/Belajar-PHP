<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";

addTodoList("Ayunda");
addTodoList("Novani");
addTodoList("Nvn");


showTodoList();

viewRemoveTodoList();

showTodoList();
