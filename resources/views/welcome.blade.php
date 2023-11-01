<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Nordicman Home</title>

    </head>


    <body>

<!--
    h-screen w-[92%] mx-auto
    style="background-image: url('https://wereldreizigers.nl/wp-content/uploads/2020/08/bergen-noorwegen.jpg')"
    class="bg-black flex justify-center items-center w-[92%] mx-auto"
-->

        <!--navbar-->
        <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-32" src="https://images-platform.99static.com//bP5vZpnKhdPBXzWicSM0D4xoy1Q=/0x0:1000x1000/fit-in/500x500/99designs-contests-attachments/90/90217/attachment_90217159" alt="logo">
            </div>
            <div class="">
                <ul class="flex items-center gap-[4vw] font-sans font-bold text-stone-600 text-2xl ">
                    <li>
                <ul class="flex items-center gap-[4vw] font-sans font-bold text-stone-600 text-2xl">
                        <a href="#">Portfolio<a>
                    </li>
                    <li>
                        <a href="#">Our photographers<a>
                    </li>
                    <li>
                        <a href="#">About us<a>
                    </li>
                    <li>
                        <a href="#">Contact us<a>
                    </li>
                </ul>
            </div>
            <div>
                <button class="bg-sky-900 text-white px-5 py-2 rounded-full hover:bg-blue-400 hover:scale-110">Sign in</button>
            </div>
        </nav>
        </header>

        <!-- Hero-->
        <section class="min-h-screen flex items-center bg-center bg-cover bg-blend-overlay bg-black/20" style="background-image: url('https://wereldreizigers.nl/wp-content/uploads/2020/08/bergen-noorwegen.jpg')">
            <div class="text-center mx-auto">
                <h1 class="text-5xl font-bold text-white">Share and post your photos of beautiful Scandinavia</h1>
                <button class="bg-sky-900 text-white px-10 py-4 rounded-full hover:bg-blue-400 mt-10 hover:scale-110">Join us now!</button>
            </div>
        </section>


        <!-- Selection of the week https://swiperjs.com/get-started -->
        <section class="container mx-auto">
            
            <h2 class="text-5xl py-20 text-stone-600" >The selection of the week</h2>
            <div class="flex  justify-center items-center" >
                <img class="" src="https://www.nordic.nl/wp-content/uploads/2020/04/Zomerverblijf-in-een-Zweedse-blokhut-1.jpg" alt="">
            </div>
        </section>

        <!-- See more -->
        <section class="container mx-auto">
            <h2 class="text-5xl py-20 text-stone-600  " >See more of Scandinavia</h2>
            <div class="grid grid-cols-4 grid-rows-1 gap-8 text-center font-semibold text-stone-600 text-2xl">
                <div >
                    <img class="object-cover w-96 h-80 drop-shadow-md hover:scale-110" src="https://images.pexels.com/photos/17827719/pexels-photo-17827719/free-photo-of-ijsland.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <p class="py-10">Landscape</p>
                </div>
                <div>
                    <img class="object-cover w-96 h-80 drop-shadow-md hover:scale-110" src="https://images.pexels.com/photos/18796529/pexels-photo-18796529/free-photo-of-stad-trainen-openbaar-vervoer-urban.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <p class="py-10">Cities</p>
                </div>
                <div>
                    <img class="object-cover w-96 h-80 drop-shadow-md hover:scale-110" src="https://images.pexels.com/photos/1809669/pexels-photo-1809669.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <p class="py-10">Animals</p>
                </div>
                <div>
                    <img class="object-cover w-96 h-80 drop-shadow-md hover:scale-110" src="https://images.pexels.com/photos/3617500/pexels-photo-3617500.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <p class="py-10">Northern lights</p>
                </div>
            </div>
        </section>

        <!--Photographers-->
        <section class="container mx-auto">
            <h2 class="text-5xl py-10 text-stone-600">Photographers</h2>
            <div class="flex h-16 bg-blue-950 items-center justify-center mx-auto">
                <input type="text" placeholder="Search..">
            </div>
            <!-- profielendiv voor alle profielen? 

             
             <img class="object-cover w-96 h-64 " src="https://images.pexels.com/photos/5384445/pexels-photo-5384445.jpeg?auto=compress&cs=tinysrgb&w=400">
                        <div class="">
                             land img, Land en stad 
                            <img class=" object-cover rounded-full w-12 h-12 " src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/255px-Flag_of_the_Netherlands.svg.png" alt="">
                            <span class="">land</span>
                            <span>stad</span>
                        </div>
        
        -->
            <div class="grid grid-columns-4 grid-rows-2 gap-8">
                <!-- 1 profiel -->
                <div>
                    <div class="relative w-96 h-64 bg-center bg-cover " style="background-image: url('http://placekitten.com/384/320')">
                        <div class="photographer-info">
                            <span>Naam</span>
                            <div class="flex">
                                <img class=" object-cover rounded-full w-12 h-12 " src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/255px-Flag_of_the_Netherlands.svg.png" alt="">
                                <div class="flex flex-col">
                                    <span>Stad</span>
                                    <span>Land</span>
                                </div>
                            </div>  
                        </div>   
                    </div>

                </div>
            </div>
        </section>

        <!-- test test -->
        <!-- About us -->
        <section>

        </section>

        
        <!-- SVG's-->
        <section>

        </section>


        <!-- Newsletter Sign up -->
        <section>

        </section>

        <!-- waarborg logo's -->
        <section>

        </section>

        <!-- footer -->

    <footer>
        <div class="blauwe-footer"></div>
    </footer>

    



</html>
