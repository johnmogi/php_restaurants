<?php

    require_once './rest-logic.php';

    switch($command) {

        case "getAllReviews":
        $reviews = getAllReviews();
        echo $reviews;
        break;

        case "getAllRestaurants":
            $restaurants = getAllRestaurants();
            echo $restaurants;
            break;
    }