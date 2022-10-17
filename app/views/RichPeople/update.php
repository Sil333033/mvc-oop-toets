<h3><?= $data['title']; ?></h3>

<form action="<?= URLROOT; ?>/richpeople/update" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <label for="text">Naam:</label>
                    <input type="text" name="Name" value="<?= $data['record']->Name; ?>">
                </td>
            </tr>
            <tr> 
                <td>
                    <label for="text">Vermogen:</label>
                    <input type="text" name="Networth" value="<?= $data['record']->Networth; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="text">leeftijd:</label>
                    <input type="number" name="Age" value="<?= $data['record']->Age; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="text">Bedrijf:</label>
                    <input type="text" name="MyCompany" value="<?= $data['record']->MyCompany; ?>">
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="Id" value="<?php echo $data['record']->Id ?>"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                
            </tr>
        </tbody>
    </table>
</form>