<?php require_once '../Models/ModelHome.php' ?>
<script src="../Controleurs/openHome.js"></script>

<section style="position:fixed;">
    <?php require_once 'VueHeader.php' ?>
    <table>
        <tr>
            <td class="part1">

            </td>
            <td class="part2">
                <?php require_once '../Controleurs/ControleurAlert.php' ?>
                <div class="centre">
                <form action="" method="post">
                    <label>Identifiant ou Email</label>
                    <br>
                    <input class="LogInput" type="text" name="username" autofocus/>
                    <br><br><br>
                    <label>Mot de passe</label>
                    <br>
                    <input class="LogInput" type="password" name="password">
                    <br><br><br>
                    <button type="submit" class="login">Se connecter</button>
                    <br>
                </form>
                    <br><br>
                    <a href="VueRegister.php" class="register">Creer un compte</a>
                </div>
            </td>
        </tr>
    </table>
</section>
</body>