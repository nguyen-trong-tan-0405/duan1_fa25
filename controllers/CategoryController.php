<?php
// require_once "./models/TourModel.php";

class CategoryController
{
    public function index()
    {
        include "./views/admin/category/categories.php";
    }

    // public function addForm()
    // {
    //     include "./views/admin/tour_add.php";
    // }

    // public function store()
    // {
    //     $category_id = $_POST['category_id'];
    //     $tour_name = $_POST['tour_name'];
    //     $description = $_POST['description'];
    //     $price = $_POST['price'];
    //     $discount = $_POST['discount'];
    //     $duration_days = $_POST['duration_days'];
    //     $status = $_POST['status'];

    //     TourModel::addTour($category_id, $tour_name, $description, $price, $discount, $duration_days, $status);
    //     header("Location: index.php?act=admin-tour");
    //     exit();
    // }

    // public function editForm()
    // {
    //     $id = $_GET['id'];
    //     $tour = TourModel::getTourById($id);
    //     include "./views/admin/tour_edit.php";
    // }

    // public function update()
    // {
    //     $id = $_POST['tour_id'];
    //     $category_id = $_POST['category_id'];
    //     $tour_name = $_POST['tour_name'];
    //     $description = $_POST['description'];
    //     $price = $_POST['price'];
    //     $discount = $_POST['discount'];
    //     $duration_days = $_POST['duration_days'];
    //     $status = $_POST['status'];

    //     TourModel::updateTour($id, $category_id, $tour_name, $description, $price, $discount, $duration_days, $status);
    //     header("Location: index.php?act=admin-tour");
    //     exit();
    // }

    // public function delete()
    // {
    //     $id = $_GET['id'];
    //     TourModel::deleteTour($id);
    //     header("Location: index.php?act=admin-tour");
    //     exit();
    // }
}
