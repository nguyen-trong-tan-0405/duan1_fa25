<h2>Sửa Tour</h2>
<form action="index.php?act=admin-tour-update" method="POST">
    <input type="hidden" name="tour_id" value="<?= $tour['tour_id'] ?>">

    <label>Danh mục ID:</label><br>
    <input type="number" name="category_id" value="<?= $tour['category_id'] ?>" required><br><br>

    <label>Tên tour:</label><br>
    <input type="text" name="tour_name" value="<?= htmlspecialchars($tour['tour_name']) ?>" required><br><br>

    <label>Mô tả:</label><br>
    <textarea name="description"><?= htmlspecialchars($tour['description']) ?></textarea><br><br>

    <label>Giá:</label><br>
    <input type="number" name="price" value="<?= $tour['price'] ?>" required><br><br>

    <label>Giảm giá (%):</label><br>
    <input type="number" name="discount" value="<?= $tour['discount'] ?>"><br><br>

    <label>Thời lượng (ngày):</label><br>
    <input type="number" name="duration_days" value="<?= $tour['duration_days'] ?>"><br><br>

    <label>Trạng thái:</label><br>
    <select name="status">
        <option value="1" <?= $tour['status'] ? 'selected' : '' ?>>Hiển thị</option>
        <option value="0" <?= !$tour['status'] ? 'selected' : '' ?>>Ẩn</option>
    </select><br><br>

    <button type="submit">Cập nhật</button>
</form>
