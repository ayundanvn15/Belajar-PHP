<?php

namespace Repository {

    use Entity\TodoList;

    interface TodoListRepository
    {
        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function getAll(): array;

    }

    class TodoListRepositoryImpl implements TodoListRepository {

        public array $todolist = array();

        function save(TodoList $todoList): void
        {
            $number = sizeof($this->todoList) + 1;
            $this->$todoList[$number] = $todoList;
        }

        function remove(int $number, $todoList): bool
        {
            if($number > sizeof($this->todoList)) {
                return false;
            }
            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todoList[$i] = $this->todoList[$i + 1];
            }

            unset($this->todoList[sizeof($this->todoList)]);
            return true;
        }

        function findAll(): array
        {
            return $this->todolist;
        }

        function getAll(): array
        {
            // TODO: Implement getAll() method.
        }
    }
}