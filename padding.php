<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CSS Padding填充</title>
    <style>
        div.a {
            width: 220px;
            padding: 10px;
            background-color: yellow;
            border: 5px solid green;
            margin: 0px;
            padding-top: 25px;
            padding-right: 50px;
            padding-bottom: 25px;
            padding-left: 50px;
        }
        
        div.b {
            width: 220px;
            padding: 10px;
            background-color: red;
            border: 5px solid blue;
            margin: 0px;
            padding: 25px 50px 25px 50px;
        }
    </style>
</head>

<body>
    <div class="a">我是第一个元素块.</div>
    <div class="b">我是第二个元素块.</div>
    <div>
        <ul>
            <li>CSS Padding（填充）属性定义元素边框与元素内容之间的空间。</li>
<li>当元素的 Padding（填充）（内边距）被清除时，所"释放"的区域将会受到元素背景颜色的填充。</li>
<li>单独使用填充属性可以改变上下左右的填充。</li>
<li>CSS padding 属性可以使用长度值或百分比值，但与 margin 属性不同，它不允许使用负值。</li>
        </ul>
</div>

属性	说明
padding	使用缩写属性设置在一个声明中的所有填充属性
padding-bottom	设置元素的底部填充
padding-left	设置元素的左部填充
padding-right	设置元素的右部填充
padding-top	设置元素的顶部填充
</body>

</html>
