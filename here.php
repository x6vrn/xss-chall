<?php
// التحقق من وجود المدخل
$input = isset($_GET['input']) ? $_GET['input'] : '';

// إذا كان هناك إدخال يبدأ بـ javascript:alert، سيظهر في التحذير
if (strpos($input, 'javascript:alert') === 0) {
    // عرض التنبيه بدون إظهار الفلاق في السورس
    echo "<script>alert('".base64_encode('BBJ{WOW&2BBJ}')."');</script>";
    $input = ''; // تنظيف المدخل بعد عرض التنبيه
}

// تشفير كل المدخلات
$input = htmlspecialchars($input);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBJ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
        }

        .container {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
        }

        button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #4cae4c;
        }

        p {
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Challenge</h1>
    <form method="GET" action="here.php">
        <label for="input">input your website:</label>
        <input type="text" id="input" name="input" value="<?php echo $input; ?>" placeholder="....">
        <button type="submit">Submit</button>
    </form>

    <p>Result:</p>
    <p><?php echo "WELCOME " . $input; ?></p>
</div>

</body>
</html>
