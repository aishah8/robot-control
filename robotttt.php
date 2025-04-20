<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Base Control</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
     background: url('dd.jpg') no-repeat center center/cover; 
     background-size: cover;
     background-attachment: fixed;
        }



        .container {
            text-align: center;
            background: linear-gradient(135deg, #6a11cb, #2575fc); 
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: white;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        button {
            padding: 15px 30px;
            font-size: 16px;
            cursor: pointer;
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #34495e;
        }

        button:active {
            background-color: #1a242f;
            transform: translateY(-3px); 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Control Robot Base</h1>
        <form action="robotttt.php" method="post">
            <button name="direction" value="forward">Forward</button>
            <div style="display: flex; justify-content: space-between;">
                <button name="direction" value="left">Left</button>
                <button name="direction" value="stop">Stop</button>
                <button name="direction" value="right">Right</button>
            </div>
            <button name="direction" value="backward">Backward</button>
        </form>
    </div>
</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $direction = $_POST['direction'];
        $conn = new mysqli('localhost', 'root', '', 'project');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO directions_4 (direction) VALUES ('$direction')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Direction saved: $direction</p>";
        } else {
            echo "Error: " . $conn->error;
        }
        $conn->close();
    }
    ?>
</body>
</html>