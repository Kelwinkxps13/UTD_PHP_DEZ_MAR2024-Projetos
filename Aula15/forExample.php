<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <select name="" id="">
        <?php for($day=1; $day<32; $day++): ?>

            <option value=""><?= $day; ?></option>

        <?php endfor; ?>
    </select>


    <select name="" id="">

        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
        <option value="">5</option>
        <option value="">6</option>
        <option value="">7</option>
        <option value="">8</option>
        <option value="">9</option>
        <option value="">10</option>
        <option value="">11</option>
        <option value="">12</option>

    </select>

    <select name="" id="">

            <?php for($year=2024; $year>1904; $year--): ?>
                <option><?= $year ?></option>
            <?php endfor; ?>

    </select>
</body>
</html>