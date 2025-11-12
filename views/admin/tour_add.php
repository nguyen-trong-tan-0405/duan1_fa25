<h2>Thêm Tour Mới</h2>
<form action="index.php?act=admin-tour-save" method="POST">
    <label>Danh mục ID:</label><br>
    <input type="number" name="category_id" required><br><br>

    <label>Tên tour:</label><br>
    <input type="text" name="tour_name" required><br><br>

    <label>Mô tả:</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Giá:</label><br>
    <input type="number" name="price" required><br><br>

    <label>Giảm giá (%):</label><br>
    <input type="number" name="discount" value="0"><br><br>

    <label>Thời lượng (ngày):</label><br>
    <input type="number" name="duration_days" value="1"><br><br>

    <label>Trạng thái:</label><br>
    <select name="status">
        <option value="1">Hiển thị</option>
        <option value="0">Ẩn</option>
    </select><br><br>

    <button type="submit">Lưu</button>adadadad
</form>
