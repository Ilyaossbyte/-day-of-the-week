<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Определение дня недели рождения</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: white; 
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            margin-bottom: 20px; /* Отступ снизу между карточками */
        }

        h1 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 10px;
            display: block;
            font-size: 16px;
        }

        input[type="date"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            border: none;
            color: white;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result-card {
            background: #e7f3fe;
            border: 1px solid #b3d7ff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            color: #333;
            font-weight: bold;
            display: <?php echo (isset($_POST['dateOfBirth'])) ? 'block' : 'none'; ?>; /* Показываем карточку результата, если отправлена форма */
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Узнайте, в какой день недели вы родились</h1>
        <form method="post">
            <label for="dateOfBirth">Введите вашу дату рождения:</label>
            <input type="date" id="dateOfBirth" name="dateOfBirth" required>
            <input type="submit" value="Узнать">
        </form>
    </div>

    <div class="result-card">

<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dateOfBirth = $_POST['dateOfBirth'];

            // Преобразуем дату в массив
            $dateParts = explode('-', $dateOfBirth);
            $year = $dateParts[0];
            $month = $dateParts[1];
            $day = $dateParts[2];

            // Вычисляем номер дня недели (0 = воскресенье, 6 = суббота)
            $dayIndex = date('w', strtotime("$year-$month-$day"));

            // Массив с названиями дней недели на русском
            $daysOfWeek = [
                'Воскресенье',
                'Понедельник',
                'Вторник',
                'Среда',
                'Четверг',
                'Пятница',
                'Суббота',
            ];

            // Получаем название дня недели
            $dayOfWeek = $daysOfWeek[$dayIndex];

            echo "Вы родились в день недели: " . $dayOfWeek;
        }
?>


    </div>
</body>
</html>
