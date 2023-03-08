<script>
// @ts-nocheck

  import {fade} from 'svelte/transition';
  import Navbar from './Navbar.svelte';
  import NonLoggedNavbar from './NonLoggedNavbar.svelte';
  import { slide } from 'svelte/transition';

  function fadeSlide(node, options) {
		const slideTrans = slide(node, options)
		return {
			duration: options.duration,
			css: t => `
				${slideTrans.css(t)}
				opacity: ${t};
			`
		};
	}
  
</script>

<NonLoggedNavbar />


<main in:fade="{{duration: 500}}" class="public">
    <article transition:fadeSlide="{{duration: 1500}}" >
        <h2 class="titre-histoire">L'ours des bois</h2>
        <p class="aperçu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et luctus lorem. Etiam sit amet semper sapien. Duis facilisis, dui nec porta viverra, ipsum leo aliquet arcu, vitae suscipit sem elit id tortor. Ut ullamcorper ante sed efficitur ullamcorper. Morbi imperdiet pellentesque neque, et commodo ligula scelerisque quis. Vivamus nec neque vel diam vestibulum egestas a non tellus.</p>
        <button class="more">Lire plus</button>
    </article>
    

    <article transition:fadeSlide="{{duration: 1500}}" >
        <h2 class="titre-histoire">Il était un chausson</h2>
        <p class="aperçu">Phasellus rutrum, elit a sodales laoreet, sem ex consequat sapien, id laoreet metus dui sed nisi. Suspendisse aliquet nisl velit, nec sollicitudin orci dapibus eget. Curabitur rhoncus lectus non pellentesque sodales. Sed finibus nibh sagittis elit ultrices vulputate. Phasellus ex ipsum, iaculis eu tempus eu, vestibulum in dolor. Nunc sit amet accumsan dui. Proin viverra...</p>
        <button class="more">Lire plus</button>
    </article>

    <article transition:fadeSlide="{{duration: 1500}}" >
        <h2 class="titre-histoire">Le petit crocus</h2>
        <p class="aperçu">Sed cursus lacinia vehicula. Aenean ornare libero sed sem venenatis, convallis finibus ipsum luctus. Nulla aliquam tortor vitae euismod interdum. Etiam tincidunt nibh et dapibus sagittis. In fringilla, dolor in ornare gravida, ipsum lorem vestibulum tortor, sed tristique nisl nulla eget quam. Vivamus interdum rutrum dui, vel convallis lectus. Aenean varius vestibulum odio, a lobortis elit venenatis at.</p>
        <button class="more">Lire plus</button>
    </article>

    <article transition:fadeSlide="{{duration: 1500}}" >
        <h2 class="titre-histoire">Le cumin et l'ananas</h2>
        <p class="aperçu">Maecenas ornare lobortis euismod. Nunc in cursus dui. Sed quis nunc mauris. Aliquam a tortor urna. Aenean in suscipit tellus. Sed tristique lobortis urna. Vivamus at nibh quis lorem scelerisque efficitur. Maecenas vel accumsan sapien, in porta magna. Donec tristique sodales tortor vel elementum. Vestibulum sollicitudin erat mauris, commodo mattis ex efficitur quis.</p>
        <button class="more">Lire plus</button>
    </article>
    
</main>

<style>

  /* histoires publiques */
  @media (max-width: 700px) {
    .public {
      flex-direction: column;
      margin-left: 20%;
    }
  }

  @media (max-width: 500px) {
    article {
      margin-right: 500px;
    }
        
  }

  @media (min-width : 701px) AND (max-width: 1400px) {
    .public {
      flex-direction: row;
      flex-wrap: wrap;
    }
  }

  .public {
    margin-top: -30px;
    display: flex;
    justify-content: space-around;
  }
  
  .titre-histoire {
    font-size: 35px;
    font-weight: bolder;
    padding-bottom: 18px;
  }
  
  .aperçu {
    font-size: 21px;
    text-align: left;
    font-weight: 600;
    line-height: 110%;
    padding-bottom: 25px;
  }
  
  article {
    display: inline-flex;
    flex-direction: column;
    justify-content: center;
    margin-top: 150px;
    background-color: rgba(255, 255, 255, .6);
    border-radius: 25px;
    padding: 20px;
    padding-bottom: 25px;
    width: 300px;

  }
  
  .more {
    background-color: rgba(219, 64, 55, .9);
    border-radius: 25px;
    border-color: #707070;
    color: white;
    height: 45px;
    width: 140px;
    margin-left: 25%;
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