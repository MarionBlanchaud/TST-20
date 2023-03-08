<script>
  import {fade} from "svelte/transition";
  import NonLoggedNavbar from "./NonLoggedNavbar.svelte";
  import Navbar from "../lib/Navbar.svelte"
</script>

<NonLoggedNavbar />

<section in:fade="{{duration: 500}}">
     <div id="ilot">
         <h1>Bienvenue sur</h1>
         <img id="logo-centre" src="../public/Logo.png" alt="logo du site TheStoryTeller">
     </div>
</section>

<style>
    @media (max-width:700px) {
        h1 {
          font-size: 30px;
        }

        #logo-centre {
            max-width: 200px;
        }
        @media (max-width: 700px) {
        #ilot {
            margin-top: 30%;
        }
    }
    }

</style>