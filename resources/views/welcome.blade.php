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
                <!--<img class="" src="https://www.nordic.nl/wp-content/uploads/2020/04/Zomerverblijf-in-een-Zweedse-blokhut-1.jpg" alt=""> --> 
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
            <h2 class="text-5xl py-10 text-stone-600">search</h2>
            <div class="flex h-16 bg-blue-950 items-center justify-center mx-auto rounded-md">
                <input type="text" placeholder="Search..">
            </div>
            <!-- profielendiv voor alle profielen?
        
        -->
            <div class="grid grid-columns-4 gap-8">

        
                <!-- 1 profiel -->
                <div class="w-80 my-8 rounded-md border-solid border-2 pb-5">
                    <div class="h-64 bg-center bg-cover rounded-t-md relative" style="background-image: url('http://placekitten.com/384/320')">
                        <div class="photographer-info absolute bottom-0 ">
                            <span class="ml-4 mb-1 text-white text-lg font-semibold">Naam</span>
                            <div class="flex ml-4">
                                <img class=" object-cover rounded-full w-12 h-12 " src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/255px-Flag_of_the_Netherlands.svg.png" alt="">
                                <div class="flex flex-col ml-2 mb-4 text-white">
                                    <span class="font-semibold">Stad</span>
                                    <span>Land</span>
                                </div>
                            </div>  
                        </div>   
                    </div>
                    <!--uploads views rating -->
                    
                    <div class="flex flex-col items-center mx-auto w-[40%] my-6">
                        
                        <div class=" w-full items-center m-4">
                            <div class="flex">
                                <img class="" src="{{ asset('images/Upload.svg') }}" alt="upload svg">
                                <h3 class="">Uploads</h3>
                            </div>
                            <div class="mx-2 text-center">
                                
                                <span>1234</span>
                            </div>
                        </div>    
                        
                        <div class="flex w-full">
                            <img class="" src="{{ asset('images/View.svg') }}" alt="view svg">
                            <div class="mx-4 text-center">
                                <h3>Views</h3>
                                <span>1234</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="flex flex-col items-center">
                             <div class="text-center">
                                <h3 class="my-2">Rating</h3>
                                <img class="my-2" src="{{ asset('images/Stars.svg') }}" alt="rating svg">
                                <button class="px-8 py-2 border-solid border-2 rounded-md">Visit website</button>
                            </div>
                    </div>

                </div>

                
            </div>
        </section>

        <!-- test test -->
        <!-- About us -->
        <section class="container mx-auto">
            <h2 class="text-5xl py-20 text-stone-600 text-left" >Let Nordic Man be your guide to uncover the unparalleled beauty and cultural richness of Scandinavia.</h2>
            <h3 class="text-2xl text-stone-600 font-bold">Welcome to Nordic Man,</h3>
            <div class="grid grid-cols-2 text-stone-600 text-xl">
                <p class="my-5 mr-5">your gateway to the captivating world of Scandinavian photography. We are a passionate team dedicated to preserving the essence of this mesmerizing region through our lenses. From the breathtaking landscapes of majestic fjords and lush forests to the vibrant cultural celebrations and intimate portraits, we endeavor to capture the heart and soul of Scandinavia in every frame.</p>
                <p class="my-5 mr-5">Our photographers possess a deep appreciation for the Nordic spirit, allowing us to infuse our work with genuine enthusiasm and a unique perspective. With years of experience and an eye for detail, we bring forth the hidden gems of Scandinavia, whether it's the dancing colors of the Northern Lights or the serene presence of wildlife in their natural habitats.</p>
                <p class="my-5 mr-5">Client satisfaction is at the core of our values, and we take pride in delivering photography that surpasses expectations. Whether you seek inspiration, wish to experience the magic of Scandinavia through art, or simply yearn to explore the wonders of this region, we invite you to embark on this visual journey with us.</p>
            </div>
            <div class="flex grid-cols-2">
                <img class="" src="{{ asset('images/Sheep.jpg') }}" alt="">
                <div class="">
                    <h2 class="text-3xl py-16 text-stone-600 text-center">Contact us today to discover the charm of this captivating land through our lens.</h2>
                    <div class="flex flex-col items-center justify-center">
                        <button class="bg-sky-900 text-white px-10 py-4 rounded-full hover:bg-blue-400 my-10 hover:scale-110">Join us now!</button>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- SVG's-->
        <section class="container mx-auto">
            <div class="flex grid-cols-4 justify-between my-20 items-center ">
                <div class="hover:scale-110">
                    <img class="mx-auto h-[144px] w-[144px]" src="{{ asset('images/Compass.svg') }}" alt="">
                    <h2 class="mt-6 text-xl text-gray-800">See and explore new places</h2>
                </div>    
                <div class="hover:scale-110">
                    <img class="mx-auto" src="{{ asset('images/People.svg') }}" alt="">
                    <h2 class="mt-6 text-xl text-gray-800">More than 1 million viewers</h2>
                </div>
                <div class="hover:scale-110">
                    <img class="mx-auto" src="{{ asset('images/UploadCloud.svg') }}" alt="">
                    <h2 class="mt-6 text-xl text-gray-800">Upload your photos</h2>
                </div>
                <div class="hover:scale-110">
                    <img class="mx-auto h-[144px] w-[144px]" src="{{ asset('images/Review.svg') }}" alt="">
                    <h2 class="mt-6 text-xl text-gray-800">Review work from others</h2>
                </div> 
            </div>
        </section>


        <!-- Newsletter Sign up -->
        <section class="w-screen text-center bg-slate-800">
            <div class="">
                <h2 class="text-5xl py-10 text-white">Get new photos every day!</h2>
                <h3 class="text-2xl text-white font-bold">Sign up for the newsletter</h3> 
                <button class="px-16 py-2 bg-white text-blue-950 rounded-sm font-semibold m-10">Sign up</button> 
            </div>    
        </section>

        <!-- waarborg logo's -->
        <section class="container mx-auto">
            <div class="flex grid-cols-4 justify-between my-20 items-center">
                <img class="mx-auto" src="{{ asset('images/PlanetProof.png') }}" alt="">
                <img class="mx-auto" src="{{ asset('images/Thuiswinkel.png') }}" alt="">
                <img class="mx-auto" src="{{ asset('images/Trustpilot.png') }}" alt="">
                <img class="mx-auto" src="{{ asset('images/FSC.png') }}" alt="">
            </div>
        </section>

        <!-- footer -->

    <footer class="w-screen mx-auto bg-gray-500">
        <div class="container mx-auto">
            <div class="text-white flex flex-row justify-start">
                <div class="w-[25%] text-center py-16">
                    <h2 class="text-xl font-bold mb-5">Customer support</h2>
                    <ul class="">
                        <li>
                            <a href="">Contact</a>
                        </li>
                        <li>
                            <a href="">FAQ</a>
                        </li>
                    </ul>
                    
                </div>
                <div class="w-[25%] text-center py-16">
                    <h2 class="text-xl font-bold mb-5">Nordicman</h2>
                    <ul class="">
                        <li>
                            <a href="">About us</a>
                        </li>
                        <li>
                            <a href="">Photographers</a>
                        </li>
                        <li>
                            <a href="">Selection of the week</a>
                        </li>
                        <li>
                            <a href="">Portfolio</a>
                        </li>
                        <li>
                            <a href="">Privacy policy</a>
                        </li>
                    </ul>
                </div>
                <div class="w-[25%] text-center py-16">
                    <h2 class="text-xl font-bold mb-5">Partners</h2>
                    <ul class="">
                        <li>
                            <a href="">Join us</a>
                        </li>
                        <li>
                            <a href="">Supporters</a>
                        </li>
                        <li>
                            <a href="">Advertisments</a> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="container flex justify-center mx-auto">
        <img class="w-[144px] h-[144px]" src="{{ asset('images/Logo.jpg')}}" alt="">
        <img src="{{ asset('images/Socialsvb.svg')}}" alt="">
    </div>

    



</html>
