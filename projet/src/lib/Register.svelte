<script>
  
  import {link} from 'svelte-spa-router'
  import NonLoggedNavbar from './NonLoggedNavbar.svelte';
    
</script>

<NonLoggedNavbar />

<div class="register-page">
    <div class="form-bloc">
      <form class="register-form">
        <h3 id="connexion"><b>S'inscrire</b></h3>  
        <input class="input-items" type="text" placeholder="Nom d'utilisateur"/>
        <input class="input-items" type="password" placeholder="Mot de passe"/>    
        <input class="input-items" type="mail" placeholder="mail"/>        
        <a href="/sign_up" use:link ><button class="more">S'inscrire</button></a>
      </form>
    </div>
</div>

<style>
      .more {
    background-color: rgba(219, 64, 55, .9);
    border-radius: 25px;
    border-color: #707070;
    color: white;
    height: 45px;
    width: 140px;
    margin-left: 25%;
    margin-top: 10%;
    font-size: 0.5em;
    font-family: "mrs-eaves", serif;
    border: none;

  }
  
  button:hover {
    background-color: rgba(255, 255, 255, .6);
    border-radius: 25px;
    color: rgba(219, 64, 55, 1);
  }
</style>

