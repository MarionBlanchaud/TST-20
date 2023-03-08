<script>
import {link} from 'svelte-spa-router'

    const nav_links = [
    {
        "label": "",
        "url": "/",
        "text": "Home",
    },{
        "label": "Accéder à la page des histoires publiques",
        "url": "/public",
        "text": "Histoires publiques",
    },{
        "label": "Se connecter au site",
        "url": "/sign_in",
        "text": "Se connecter",
    },
];


</script>


<nav class="non_logged_navbar">
    <ul id="menu-icon-wrapper">
        <li id="menu-icon"><a href="/menu" use:link><img src="../public/menu-icon.png" alt="menu hamburger"></a></li>
    </ul>
    <ul id="links">
        <li id="histoires-publiques"><a href="/public" use:link >Histoires publiques</a></li>
        
        <li id="amis">Amis</li>
    
        <li><a href="/" use:link ><img id="logo-menu2" src="../public/Logo.png" alt="logo du site TheStoryTeller"></a>
        </li>
        
        <li id="partages">Partages</li>
   
        <li><a href="/sign_in" use:link ><img id="reading2" src="../public/reading.png" alt="personnage en train de lire un livre"
            aria-label="aller vers mon compte, ou se déconnecter"></a></li>
    </ul>      
</nav>


<style>

         a:hover {
            color:rgb(181,44,59) ;
            cursor: pointer;
        }
        #menu-icon {
            display: none;
        }

        #menu-icon-wrapper {
            display: none;
        }

        #amis {
           margin-top: 30px;      
        }
        #partages {
            margin-top: 30px;
        }


        @media (max-width: 700px) {
            nav {  
                height: 100px;
            }
            nav ul {
                display: flex;
                justify-content: space-around;
            }

            #histoires-publiques {
                display: none ;
            }
            #amis {
                display: none ;   
            }
            #partages {
                display: none ;  
            }

            #logo-menu2 {
                width: 110px;
                height: 60px;
                margin-left: 50%;
            }

            #reading2 {
                width: 60px;
                height: 60px;
            }
            #menu-icon {
                display: block;
                margin-left: 30px;
            }

            #menu-icon-wrapper {
                display: block;
            }
        }    

</style>