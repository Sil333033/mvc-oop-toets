<body>
    <h3><?php echo $data['title'] ?></h3>

    <a href="<?php echo URLROOT ?>/richpeople/create">voeg toe</a>

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