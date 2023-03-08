<script>

</script>
 <div class="account-bloc">
    <form action="" method="get" class="form-example">
        <div class="items">
            <label for="pseudo">Pseudo actuel :</label>
            <input class="rounded-input" type="text" name="pseudo" id="pseudo" required>
        </div>
        <div class="items">
            <label for="pseudo">Nouveau pseudo :</label>
            <input class="rounded-input" type="text" name="pseudo" id="new-pseudo" required>
        </div>
        <div class="items">
             <label for="password">Mot de passe actuel :</label>
             <input class="rounded-input" type="text" name="password" id="password" required>
             <img id="eye" src="../public/oeil.png" alt="oeil-logo"/>
        </div>
        <div class="items">
            <label for="password">Nouveau mot de passe :</label>
            <input class="rounded-input" type="text" name="password" id="new-password" required>
        </div>         
    </form>
</div>

<style>
    @media (max-width: 700px) {
        .rounded-input {
            width: 100px;
        }
        form {
            font-size: 0.8em;
        }
        .account-bloc {
            margin-left : 10px;
        }
    }

    label {
        font-size: 40px;
    }
</style>