<!DOCTYPE html>
<html>
<head>
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 50%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
</style>
</head>
<body>
<table id="customers">
    <tbody>
        <tr>
            <th>课程代码</th>
            <th>课程名称</th>
            <th>描述</th>
        </tr>
        <?php foreach (require('php/lesson.php') as $lesson) { ?>
        <tr>
            <td><?php echo $lesson['code']; ?></td>
            <td><a href="<?php echo $lesson['code'] . '.php'; ?>" target="_blank"><?php echo $lesson['name']; ?></a></td>
            <td><?php $lesson['description']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
