<h2>Danh sách Tour</h2>
<a href="index.php?act=admin-tour-add">+ Thêm tour mới</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Danh mục</th>
        <th>Tên Tour</th>
        <th>Giá</th>
        <th>Giảm giá</th>
        <th>Số ngày</th>
        <th>Trạng thái</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($tours as $tour): ?>
    <tr>
        <td><?= $tour['tour_id'] ?></td>
        <td><?= $tour['category_id'] ?></td>
        <td><?= htmlspecialchars($tour['tour_name']) ?></td>
        <td><?= number_format($tour['price']) ?> VNĐ</td>
        <td><?= $tour['discount'] ?>%</td>
        <td><?= $tour['duration_days'] ?> ngày</td>
        <td><?= $tour['status'] ? 'Hiển thị' : 'Ẩn' ?></td>
        <td><?= htmlspecialchars($tour['description']) ?></td>
        <td>
            <a href="index.php?act=admin-tour-edit&id=<?= $tour['tour_id'] ?>">Sửa</a> |
            <a onclick="return confirm('Xóa tour này?')" href="index.php?act=admin-tour-delete&id=<?= $tour['tour_id'] ?>">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
