<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $data['title'] ?></h3>


    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Vermogen</th>
                <th>leeftijd</th>
                <th>Bedrijf</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $data['rows'] ?>
        </tbody>
    </table>
</body>
</html>