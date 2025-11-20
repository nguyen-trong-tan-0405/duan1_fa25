<?php
// ======= Require Common =======
require_once './commons/env.php';
require_once './commons/function.php';
require_once './commons/connect-db.php';


// ======= Require Controllers =======
require_once './controllers/ProductController.php';
require_once './controllers/TourController.php'; //  thêm controller tour
require_once './controllers/CategoryController.php'; // thêm controller category

// ======= Require Models =======
require_once './models/ProductModel.php';
require_once './models/TourModel.php'; // ✅ thêm model tour

// ======= Routing =======
$act = $_GET['act'] ?? '/';

// ======= Điều hướng (match-case) =======
match ($act) {
    // Trang chủ
    '/' => (new ProductController())->Home(),

    // ================== QUẢN LÝ TOUR (ADMIN) ==================
    'admin-tour'           => (new TourController())->index(),      // xem danh sách tour
    'admin-tour-add'       => (new TourController())->addForm(),    // hiển thị form thêm
    'admin-tour-save'      => (new TourController())->store(),      // lưu tour mới
    'admin-tour-edit'      => (new TourController())->editForm(),   // hiển thị form sửa
    'admin-tour-update'    => (new TourController())->update(),     // cập nhật tour
    'admin-tour-delete'    => (new TourController())->delete(),     // xóa tour
    'admin-category-tour'  => (new CategoryController())->index(),      // xem danh sách tour

};
