<h3><?= $data['title']; ?></h3>

<form action="<?= URLROOT; ?>/richpeople/create" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <label for="text">Naam:</label>
                    <input type="text" name="Name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="text">Vermogen:</label>
                    <input type="text" name="Networth">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="text">leeftijd:</label>
                    <input type="number" name="Age">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="text">Bedrijf:</label>
                    <input type="text" name="MyCompany">
                </td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </tbody>
    </table>
</form>