<script>
import Router from "svelte-spa-router";
import {fade} from 'svelte/transition';
import NonLoggedNavbar from "./lib/NonLoggedNavbar.svelte";
import Navbar from "./lib/Navbar.svelte";
import Ilot from "./lib/Ilot.svelte";
import Login from "./lib/Login.svelte";
import Stories from "./lib/Stories.svelte";
import New from "./lib/New.svelte";
import Register from './lib/Register.svelte';
import Account from './lib/Account.svelte';
import Menuburger from "./lib/Menuburger.svelte";


const routes = {

    '/': Ilot ,
    '/public': Stories ,
    '/sign_in': Login,
    '/sign_up': Register ,
    '/my_account' : Account,
    '/menu' : Menuburger
}

	
</script>

<Router {routes} />



<main>


</main>

<style>

</style>
