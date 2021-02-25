<?php
    class SQLQuery{
        private string $table;
        private array $bindings;
        private int $offset;
        private int $limit;
        private array $wheres;
        private string $action;

        public function setTable(string $table){
            return $this;
        }
        public function addBinding (string $key, string $value) {
            return $this;
        }
        public function removeBinding (string $key) {
            return $this;
        }
        public function setPaginate (int $limit, int $offset) {
            return $this;
        }
        public function addWhere (string $column, string $operator, string $value) {
            return $this;
        }
        public function delete(){

        }
        public function update(){
            
        }
        public function select(){
            return $this;
        }
        public function compile(){
            
        }
    }
