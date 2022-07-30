<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void
{

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistRepository->todolist[1] = new TodoList("Belajar PHP");
    $todolistRepository->todolist[2] = new TodoList("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new TodoList("Belajar PHP Database");

    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();

}


function testAddTodoList(): void
{

    $todolistService = new TodoListServiceImpl();
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodoList();

    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();

    $todolistService->removeTodoList(4);
    $todolistService->showTodoList();

    $todolistService->removeTodoList(2);
    $todolistService->showTodoList();

    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();
}
testShowTodoList();