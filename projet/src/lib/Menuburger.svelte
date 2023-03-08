<script>
    import {link} from 'svelte-spa-router'
    import {fade} from 'svelte/transition'


</script>
<section in:fade="{{duration: 500}}">
    <ul id="menu-wrapper">
        <li><a href="/" use:link>Accueil</a></li>
        <li>Amis</li>
        <li><a href="/public" use:link>Histoires publiques</a></li>
        <li>Partages</li>
        <li><a href="/sign_in" use:link>Se connecter</a></li>
    </ul>
</section>

<style>
    section {
        background-color: #f0f0f0;
        opacity: 0.8;
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100vh;
    }

    ul {
        display: flex;
        flex-direction: column;
        margin-top: 30px;
    }

    li {
       margin-bottom: 8%;
    }

    a:hover {
        color:rgb(181,44,59) ;
        cursor: pointer;
    }



</style>