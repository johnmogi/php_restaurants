<?php

    require_once './dal.php';

    function getAllRestaurants(){
        $sql = "SELECT * FROM restaurant";
        $restaurants= select($sql);
        return $restaurants;
    }

    function getAllReviews(){
        $sql = "SELECT * FROM review";
        $reviews= select($sql);
        return $reviews;
    }