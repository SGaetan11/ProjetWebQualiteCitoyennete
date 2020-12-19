<?php require_once '../Models/ModelRegister.php'?>
<?php require_once 'VueHeader.php' ?>
<div style="height: 12vw"></div>
<?php require_once '../Controleurs/ControleurAlert.php' ?>
<form action="" method="post">
    <br><br>
    <table class="mTable">
        <tr>
            <td class="mTd">
                <label>Nom</label>
                <br>
                <input class="RegInput" type="text" name="lname" value=<?php echo $_REQUEST['lname']; ?>>
            </td>
            <td class="mTd">
                <label>Email</label>
                <br>
                <input class="RegInput" type="text" name="email" value=<?php echo $_REQUEST['email']; ?>>
            </td>
        </tr>
        <tr>
            <td class="mTd">
                <label>Prénom</label>
                <br>
                <input class="RegInput" type="text" name="fname" value=<?php echo $_REQUEST['fname']; ?>>
            </td>
            <td class="mTd">
                <label>Mot de passe</label>
                <br>
                <input class="RegInput" type="password" name="password">
            </td>
        </tr>
        <tr>
            <td class="mTd">
                <label>Date de naissane</label>
                <br>
                <input class="RegInput" type="date" data-date-format="YYYY MM DD" name="bdate" value=<?php echo $_REQUEST['bdate']; ?>>
            </td>
            <td class="mTd">
                <label>Confirmation du mot de passe</label>
                <br>
                <input class="RegInput" type="password" name="password_confirm">
            </td>
        </tr>
        <tr>
            <td class="mTd">
                <label>Genre</label>
                <br>
                <input type="radio" id="masculin" name="genre">
                <label for="Masculin">Masculin</label>
                <br>
                <input type="radio" id="feminin" name="genre">
                <label for="Feminin">Feminin</label>
            </td>
            <td class="mTd">
                <label>N° de téléphone</label>
                <br>
                <input class="RegInput" type="text" name="pnumber" value=<?php echo $_REQUEST['pnumber']; ?>>
            </td>
        </tr>
    </table>
    <br><br>
    <div class="btnReg">
    <button type="submit" class="SubReg">S'inscrire</button>
    </div>
</form>

</body>

</html>