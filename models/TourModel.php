<?php
require_once "./commons/env.php";

class TourModel {

    public static function getAllTours() {
        global $conn;
        $sql = "SELECT * FROM tours ORDER BY tour_id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getTourById($id) {
        global $conn;
        $sql = "SELECT * FROM tours WHERE tour_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function addTour($category_id, $tour_name, $description, $price, $discount, $duration_days, $status) {
        global $conn;
        $sql = "INSERT INTO tours (category_id, tour_name, description, price, discount, duration_days, status)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$category_id, $tour_name, $description, $price, $discount, $duration_days, $status]);
    }

    public static function updateTour($id, $category_id, $tour_name, $description, $price, $discount, $duration_days, $status) {
        global $conn;
        $sql = "UPDATE tours 
                SET category_id=?, tour_name=?, description=?, price=?, discount=?, duration_days=?, status=?
                WHERE tour_id=?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$category_id, $tour_name, $description, $price, $discount, $duration_days, $status, $id]);
    }

    public static function deleteTour($id) {
        global $conn;
        $sql = "DELETE FROM tours WHERE tour_id=?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>
