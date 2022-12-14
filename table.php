<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>表格的CSS</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        table,
        th,
        td {
            border: 1px solid black;
        }
        
        th {
            height: 50px;
            background-color: green;
            color: white;
        }
        /* 表格文字对齐 */
        
        td {
            height: 40px;
            text-align: right;
            vertical-align: bottom;
            padding: 15px;
        }
    </style>
</head>

<body>
    <table>
        <caption>Table 1.1 姓名表</caption>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
        <tr>
            <td>Peter</td>
            <td>Griffin</td>
        </tr>
        <tr>
            <td>Lois</td>
            <td>Griffin</td>
        </tr>
    </table>
</body>

</html>
