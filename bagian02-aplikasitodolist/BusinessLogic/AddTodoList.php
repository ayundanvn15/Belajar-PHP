<?php

function addTodoList()

{
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todoList;
}
