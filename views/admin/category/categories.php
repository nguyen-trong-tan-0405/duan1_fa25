<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Quản lý Danh mục Tour</title>
    <style>
        /* ===== Reset & base ===== */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Inter, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: #f5f7fb;
            color: #2b2b2b;
            margin: 0;
            padding: 32px;
        }

        /* ===== Container ===== */
        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        /* ===== Header ===== */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .h-title {
            font-size: 22px;
            font-weight: 700;
            color: #0f1724;
        }

        .h-sub {
            color: #64748b;
            font-size: 13px;
        }

        /* ===== Card ===== */
        .card {
            background: #ffffff;
            border-radius: 12px;
            padding: 18px;
            box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
            margin-bottom: 20px;
        }

        /* ===== Table ===== */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .table th,
        .table td {
            padding: 12px 10px;
            text-align: left;
            border-bottom: 1px solid #eef2f7;
            vertical-align: middle;
        }

        .table th {
            color: #475569;
            font-size: 13px;
            font-weight: 600;
        }

        .table td {
            color: #334155;
            font-size: 14px;
        }

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge.show {
            background: #dcfce7;
            color: #166534;
        }

        .badge.hide {
            background: #fee2e2;
            color: #991b1b;
        }

        /* ===== Buttons ===== */
        .btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .btn.primary {
            background: #2563eb;
            color: white;
        }

        .btn.ghost {
            background: transparent;
            color: #334155;
            border: 1px solid #e6eefc;
        }

        .btn.danger {
            background: #ef4444;
            color: white;
        }

        /* ===== Form ===== */
        .form-row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .form-group {
            flex: 1;
            min-width: 240px;
        }

        label {
            display: block;
            font-size: 13px;
            color: #475569;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #e6eefc;
            outline: none;
            font-size: 14px;
            background: #fbfdff;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        /* ===== Thumbnails ===== */
        .thumb {
            width: 72px;
            height: 48px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid #eef2f7;
        }

        /* ===== Messages ===== */
        .alert {
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .alert.success {
            background: #dcfce7;
            color: #065f46;
        }

        .alert.error {
            background: #fee2e2;
            color: #7f1d1d;
        }

        /* ===== Modal (simple) ===== */
        .modal-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(2, 6, 23, 0.5);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 50;
        }

        .modal {
            width: 900px;
            max-width: 95%;
            background: white;
            border-radius: 12px;
            padding: 18px;
            box-shadow: 0 20px 50px rgba(2, 6, 23, 0.3);
        }

        .modal .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .close-x {
            cursor: pointer;
            font-weight: 700;
            padding: 6px 10px;
            border-radius: 8px;
            color: #64748b;
        }

        /* ===== Responsive ===== */
        @media (max-width:760px) {
            .form-row {
                flex-direction: column;
            }

            .table th:nth-child(4),
            .table td:nth-child(4) {
                display: none;
            }

            /* hide some cols */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div>
                <div class="h-title">Quản lý Danh mục Tour</div>
                <div class="h-sub">Thêm, sửa, xóa và quản lý hình ảnh / trạng thái danh mục</div>
            </div>
            <div>
                <button class="btn primary">+ Thêm danh mục</button>
            </div>
        </div>


        <div class="card">
            <h3 style="margin:0 0 8px 0">Danh sách danh mục</h3>

            <table class="table" aria-describedby="Danh sách danh mục">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ảnh</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th style="text-align:right">Hành động</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <div style="text-align:center;color:#94a3b8;font-size:13px;margin-top:8px">
            Hệ thống quản lý danh mục tour — bản demo.
        </div>
    </div>




</body>

</html>