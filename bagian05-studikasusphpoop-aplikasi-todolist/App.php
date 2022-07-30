<?php

require_once __DIR__ ."Model/TodoList.php";
require_once __DIR__ ."BusinessLogic/ShowTodoList.php";
require_once __DIR__ ."BusinessLogic/AddTodoList.php";
require_once __DIR__ ."BusinessLogic/RemoveTodoList.php";
require_once __DIR__ ."View/ViewShowTodoList.php";
require_once __DIR__ ."View/ViewAddTodoList.php";
require_once __DIR__ ."View/ViewRemoveTodoList.php";
require_once __DIR__ ."Helper/Input.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplikasi TodoList" . PHP_EOL;

$todoListRepository = new TodoListRepositoryImpl();
$todolistService = new TodoListServiceImpl($todoListRepository);
$todolistView = new TodoListView($todolistService);

$todolistView->showTodoList();
