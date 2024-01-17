<!-- index裡面有del button action=api/del.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 100%;
            /* background-color: lightblue; */
            /* 用背景顏色查看container的寬度 */
        }

        table {
            margin: 0 auto;
            width: 80%;
            font-size: 28px;
        }

        table,
        tr,
        th,
        td {
            text-align: center;
            border: 3px solid lightgoldenrodyellow;
            border-collapse: collapse;
        }

        span {
            background-color: #f2f2f2;
            /* 添加背景颜色 */
            padding: 5px;
            /* 添加内边距 */
            border-radius: 5px;
            /* 添加圆角 */
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center"><span>User</span>List</h3>
        <table>
            <tr>
                <th style="width: 20%;">id</th>
                <th style="width: 35%;">name</th>
                <th>operate</th>
            </tr>
            <?php foreach ($variable as $key => $value) :; ?>
                <!-- # code... -->
                <tr>
                    <td>1</td>
                    <td>Angie</td>
                    <td>
                        <button>edit</button>
                        <button>del</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>