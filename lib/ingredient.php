<?php

class Ingredient {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function getIngredient($ingredient_id) {
        $sql = "SELECT * FROM ingredient WHERE id = $ingredient_id";
        $result = mysqli_query($this->connection, $sql);
        $ingredient = mysqli_fetch_array($result);
        return $ingredient;
    }
}