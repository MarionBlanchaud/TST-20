<script>
    import {fade} from 'svelte/transition';
    import {link} from 'svelte-spa-router'
  import NonLoggedNavbar from './NonLoggedNavbar.svelte';
</script>

<NonLoggedNavbar />

<div in:fade="{{duration: 500}}" class="form-bloc">
    <form class="register-form">
      <h3 id="connexion"><b>Se connecter</b></h3>  
      <input class="input-items" type="text" placeholder="Nom d'utilisateur"/>
      <input class="input-items" type="password" placeholder="Mot de passe"/>             
      <button id="co-button">Accéder</button>
      <p class="message">Vous n'avez pas de compte ? <br><a href="/sign_up" use:link alt="Créer un compte">Créer un compte</a></p>
    </form>
</div>


<style>

    h3 {
        margin-left: 8%;
    }
    a {
        padding-left: 17%;
    }
    a:hover {
        color:rgb(181,44,59) ;
        cursor: pointer;
    }

</style>