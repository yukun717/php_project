<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>form表单</title>
    </head>
    <body>
        <form action="test1-houduan.php" method="post">
            姓名：<input type="text" name="name"><br>
            密码：<input type="text" name="passwd"><br>

            上学：
            <select name="school">
                <option value="xiaoxue">小学</option>
                <option value="chuzhong">初中</option>
                <option value="gaozhong">高中</option>
                <option value="daxue">大学</option>
                <option value="shehui">社会</option>
            </select><br>

            兴趣爱好：
            <select name="hobby[]" multiple="multiple" style="heifht=:150px;width:150px;">
                <option value="wu">无爱好</option>
                <option value="sing">唱歌</option>
                <option value="dance">跳舞</option>
                <option value="fo">躺平</option>
                <option value="study">学习</option>
            </select><br>

            性别：
            <input type="radio" name="sex" value="man">男
            <input type="radio" name="sex" value="woman">女
            <br>

            您的技能是：
            <input type="checkbox" name="skills[]" value="php">php
            <input type="checkbox" name="skills[]" value="C#">C#
            <input type="checkbox" name="skills[]" value="java">java
            <br>

            <input type="submit" value="提交">
        </form>
    </body>
</html>