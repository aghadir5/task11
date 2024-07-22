<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تحكم بالروبوت</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        h2 {
            margin-bottom: 20px;
        }
        .btn {
            padding: 15px 30px;
            font-size: 18px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .btn:active {
            transform: scale(0.95);
        }
        .btn:nth-child(1) {
            background-color: #ff6b6b;
            color: #fff;
        }
        .btn:nth-child(2) {
            background-color: #4ecdc4;
            color: #fff;
        }
        .btn:nth-child(3) {
            background-color: #ffe66d;
            color: #fff;
        }
        .btn:nth-child(4) {
            background-color: #1a535c;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>تحكم بالروبوت</h2>
        <form action="control.php" method="post">
            <button class="btn" type="submit" name="direction" value="يسار">يسار</button>
            <button class="btn" type="submit" name="direction" value="يمين">يمين</button>
            <button class="btn" type="submit" name="direction" value="خلف">خلف</button>
            <button class="btn" type="submit" name="direction" value="أمام">أمام</button>
            <button class="btn" type="submit" name="direction" value="توقف ">  توقف</button>
        </form>
    </div>
</body>
</html>