@extends('layout')
@section('title', 'Collections')
@section('head')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colorOptions = document.querySelectorAll('.color-option');
            const productImage = document.getElementById('product-image');
            const pageBackground = document.getElementById('page-background');
            const productCard = document.querySelector('.md\\:w-1\\/2.bg-white');
            const colorSection = document.querySelector('.mb-8:nth-child(1)');
            const priceSection = document.querySelector('.mb-8:nth-child(2)');
            const shopSection = document.querySelector('.mb-8:nth-child(3)');
            const contactSection = document.querySelector('div:nth-child(4)');

            const colorData = {
                'white': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozCoastalMistFreeSip-SC-1080x1080-f521e30_1.png?v=1732127825&width=1000&height=1000&crop=center',
                    background: 'bg-pink-200'
                },
                'green': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/products/Neo_Sage_24oz_SC-4000x4000-c38c18a.png?v=1718293383&width=1000&height=1000&crop=center',
                    background: 'bg-green-50'
                },
                'blue': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24oz_Blue_Oasis_-_SC-1080x1080-f521e30.png?v=1732131245&width=1000&height=1000&crop=center',
                    background: 'bg-blue-100'
                },
                'pink': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/Crown_Jewel_24oz_Freesip_SC-1080x1080-f521e30.png?v=1732131458&width=1000&height=1000&crop=center',
                    background: 'bg-pink-300'
                },
                'teal': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24oz_80s_Ski_Slope_FreeSip_-_SC-1080x1080-f521e30.png?v=1732131485&width=1000&height=1000&crop=center',
                    background: 'bg-blue-200'
                },
                'gray': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24oz_Freesip_SC_Template-1080x1080-f521e30.png?v=1732131399&width=1000&height=1000&crop=center',
                    background: 'bg-gray-100'
                },
                'brown': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozDownToEarthSC-1080x1080-f521e30.png?v=1732129024&width=1000&height=1000&crop=center',
                    background: 'bg-[#d2c9b6]'
                },
                'calm': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozCW-SC-1080x1080-f521e30.png?v=1732129178&width=1000&height=1000&crop=center',
                    background: 'bg-[#e1e8e9]'
                },
                'green-house': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozGreen-SC-1080x1080-f521e30.png?v=1732131998&width=1000&height=1000&crop=center',
                    background: 'bg-[#a9baa4]'
                }
                ,
                'sunny': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozSunnyDazeFreeSip-SC-1080x1080-f521e30_1.png?v=1732127841&width=1000&height=1000&crop=center',
                    background: 'bg-[#fceabf]'
                },
                'orange': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozCitrusCrushFreeSip-SC-1080x1080-f521e30_1.png?v=1732127886&width=1000&height=1000&crop=center',
                    background: 'bg-[#ffb594]'
                }
                
                ,
                'dessert': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/products/Water_in_the_Desert_24oz_SC-4000x4000-c38c18a.png?v=1717000536&width=1000&height=1000&crop=center',
                    background: 'bg-[#e5ceb7]'
                }
                ,
                'pink2': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/products/Can_You_See_Me_24oz_SC-4000x4000-c38c18a.png?v=1717000536&width=1000&height=1000&crop=center',
                    background: 'bg-[#fccdd3]'
                }
                ,
                'lemon': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozYellowFreeSip-SC-1080x1080-f521e30.png?v=1717000536&width=1000&height=1000&crop=center',
                    background: 'bg-[#f2f0c7]'
                }
                ,
                'night': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozBlueFreeSip-SC_2be4d9b4-9921-49ee-aae9-ba295e96a643.png?v=1717000536&width=1000&height=1000&crop=center',
                    background: 'bg-[#a5acd4]'
                }
                ,
                'dark': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/products/FreeSip-Three-Quarter-24oz-SS-1080x1080-Very-Very-Dark.png?v=1717000536&width=1000&height=1000&crop=center',
                    background: 'bg-[#dbdbdb]'
                }
                ,
                'shy': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/products/FreeSip-Three-Quarter-24oz-SS-1080x1080-Shy-Marshmallow.png?v=1717000536&width=1000&height=1000&crop=center',
                    background: 'bg-[#e5e5e5]'
                }
                ,
                'blue-jay': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24oz_Blue_Jay_-_SC_1.png?v=1740082080&width=1000&height=1000&crop=center',
                    background: 'bg-[#dcdcf9]'
                }
                ,
                'grid': {
                    image: 'https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24oz_Off_the_Grid_-_SC_1.png?v=1740082353&width=1000&height=1000&crop=center',
                    background: 'bg-[#d5dbd9]'
                }

            };

            gsap.set([productImage, productCard], {
                autoAlpha: 0,
                y: 20
            });
            gsap.set([colorSection, priceSection, shopSection, contactSection], {
                autoAlpha: 0,
                y: 10
            });

            const tl = gsap.timeline();

            tl.to(productImage, {
                    autoAlpha: 1,
                    y: 0,
                })
                .to(productCard, {
                    duration: 0.8,
                    autoAlpha: 1,
                    y: 0,
                    ease: "power3.out"
                }, "-=0.5")
                .to(colorSection, {
                    duration: 0.5,
                    autoAlpha: 1,
                    y: 0,
                    ease: "power2.out"
                }, "-=0.3")
                .to(priceSection, {
                    duration: 0.5,
                    autoAlpha: 1,
                    y: 0,
                    ease: "power2.out"
                }, "-=0.3")
                .to(shopSection, {
                    duration: 0.5,
                    autoAlpha: 1,
                    y: 0,
                    ease: "power2.out"
                }, "-=0.3")
                .to(contactSection, {
                    duration: 0.5,
                    autoAlpha: 1,
                    y: 0,
                    ease: "power2.out"
                }, "-=0.3");


            document.querySelector('.color-option[data-color="white"]').classList.add('ring-2', 'ring-offset-2',
                'ring-gray-800');

            colorOptions.forEach(option => {
                option.addEventListener('click', function() {
                    colorOptions.forEach(opt => {
                        opt.classList.remove('ring-2', 'ring-offset-2', 'ring-gray-800');
                        gsap.to(opt, {
                            scale: 1,
                            duration: 0.2,
                            ease: "power1.out"
                        });
                    });

                    this.classList.add('ring-2', 'ring-offset-2', 'ring-gray-800');
                    gsap.to(this, {
                        scale: 1.2,
                        duration: 0.3,
                        ease: "back.out(1.5)"
                    });

                    const color = this.getAttribute('data-color');
                    productImage.src = colorData[color].image;
                    pageBackground.className = '';
                    pageBackground.classList.add('min-h-screen', 'transition-colors',
                        'duration-500', colorData[color].background, 'flex', 'justify-center',
                        'items-center');
                });
            });

            const actionButtons = document.querySelectorAll(
                'a.flex.items-center.justify-center, a.flex.items-center.gap-3');

            actionButtons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    gsap.to(this, {
                        scale: 1.03,
                        duration: 0.2,
                        ease: "power1.out"
                    });
                });

                button.addEventListener('mouseleave', function() {
                    gsap.to(this, {
                        scale: 1,
                        duration: 0.2,
                        ease: "power1.out"
                    });
                });
            });
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection

@section('content')
    <div id="page-background"
        class=" bg-pink-200 transition-colors duration-500 min-h-screen flex justify-center items-center">
        <div class="container mx-auto px-4 py-20">
            <div class="flex flex-col md:flex-row gap-8 items-center justify-center">
                <div class="flex flex-col items-center justify-center md:w-1/2">
                    <div class="relative">
                        <img id="product-image"
                            src="https://cdn.shopify.com/s/files/1/0439/2537/3087/files/24ozCoastalMistFreeSip-SC-1080x1080-f521e30_1.png?v=1732127825&width=1000&height=1000&crop=center"
                            alt="FreeSip water bottle" class="max-h-[75vh] object-contain transition-all duration-500">
                    </div>
                </div>

                <div class="md:w-1/2 bg-white rounded-lg shadow-sm p-8">
                    <div class="mb-8">
                        <span class="font-bold text-gray-800 block mb-3">COLOR</span>
                        <div class="flex flex-wrap gap-3">
                            <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color: #e6eadc;" data-color="white"></button>
                            <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color: #a1b56c;" data-color="green"></button>
                            <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color: #4a92a8;" data-color="blue"></button>
                            <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color: #b05a7a;" data-color="pink"></button>
                            <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color: #1eb5a8;" data-color="teal"></button>
                            <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color: #d6d6d6;" data-color="gray"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color: #a39482;" data-color="brown"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#b8c8cb;" data-color="calm"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#6a7666;" data-color="green-house"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#fceabf;" data-color="sunny"></button>
                                
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#ef7843;" data-color="orange"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#f2e2c7;" data-color="dessert"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#ff76ae;" data-color="pink2"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#efe34b;" data-color="lemon"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#3a3160;" data-color="night"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#000000;" data-color="dark"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#ffffff;" data-color="shy"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#61619e;" data-color="blue-jay"></button>
                                <button
                                class="color-option w-8 h-8 rounded-full border border-gray-200 hover:scale-110 transition-transform duration-200"
                                style="background-color:#626466;" data-color="grid"></button>
                                
                        </div>
                    </div>

                    <div class="mb-8">
                        <div class="text-2xl font-bold text-gray-900 mb-4">Rp 349.000</div>
                    </div>

                    <div class="mb-8">
                        <h3 class="font-bold text-gray-800 mb-3">SHOP ON</h3>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="#"
                                class="flex items-center justify-center gap-2 border border-gray-300 rounded-lg py-2 px-4 hover:bg-gray-50 transition-colors duration-200">
                                <?xml version="1.0" encoding="utf-8"?><svg class="h-5 w-auto flex-shrink-0" version="1.1"
                                    id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 109.59 122.88"
                                    style="enable-background:new 0 0 109.59 122.88" xml:space="preserve">
                                    <style type="text/css">
                                        <![CDATA[
                                        .st0 {
                                            fill: #EE4D2D;
                                        }
                                        ]]>
                                    </style>
                                    <g>
                                        <path class="st0"
                                            d="M74.98,91.98C76.15,82.36,69.96,76.22,53.6,71c-7.92-2.7-11.66-6.24-11.57-11.12 c0.33-5.4,5.36-9.34,12.04-9.47c4.63,0.09,9.77,1.22,14.76,4.56c0.59,0.37,1.01,0.32,1.35-0.2c0.46-0.74,1.61-2.53,2-3.17 c0.26-0.42,0.31-0.96-0.35-1.44c-0.95-0.7-3.6-2.13-5.03-2.72c-3.88-1.62-8.23-2.64-12.86-2.63c-9.77,0.04-17.47,6.22-18.12,14.47 c-0.42,5.95,2.53,10.79,8.86,14.47c1.34,0.78,8.6,3.67,11.49,4.57c9.08,2.83,13.8,7.9,12.69,13.81c-1.01,5.36-6.65,8.83-14.43,8.93 c-6.17-0.24-11.71-2.75-16.02-6.1c-0.11-0.08-0.65-0.5-0.72-0.56c-0.53-0.42-1.11-0.39-1.47,0.15c-0.26,0.4-1.92,2.8-2.34,3.43 c-0.39,0.55-0.18,0.86,0.23,1.2c1.8,1.5,4.18,3.14,5.81,3.97c4.47,2.28,9.32,3.53,14.48,3.72c3.32,0.22,7.5-0.49,10.63-1.81 C70.63,102.67,74.25,97.92,74.98,91.98L74.98,91.98z M54.79,7.18c-10.59,0-19.22,9.98-19.62,22.47h39.25 C74.01,17.16,65.38,7.18,54.79,7.18L54.79,7.18z M94.99,122.88l-0.41,0l-80.82-0.01h0c-5.5-0.21-9.54-4.66-10.09-10.19l-0.05-1 l-3.61-79.5v0C0,32.12,0,32.06,0,32c0-1.28,1.03-2.33,2.3-2.35l0,0h25.48C28.41,13.15,40.26,0,54.79,0s26.39,13.15,27.01,29.65 h25.4h0.04c1.3,0,2.35,1.05,2.35,2.35c0,0.04,0,0.08,0,0.12v0l-3.96,79.81l-0.04,0.68C105.12,118.21,100.59,122.73,94.99,122.88 L94.99,122.88z" />
                                    </g>
                                </svg>
                                <span>Shopee</span>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center gap-2 border border-gray-300 rounded-lg py-2 px-4 hover:bg-gray-50 transition-colors duration-200">
                                <img src="https://cdn.brandfetch.io/idoruRsDhk/theme/dark/symbol.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                                    alt="Tokopedia" class="h-5 w-auto flex-shrink-0">
                                <span>Tokopedia</span>
                            </a>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-bold text-gray-800 mb-3">CONTACT US</h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-gray-900">
                                <i class="fa-brands fa-line text-green-500 text-xl w-6"></i>
                                <span>@freesip_indo</span>
                            </a>
                            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-gray-900">
                                <i class="fa-brands fa-instagram text-pink-600 text-xl w-6"></i>
                                <span>@freesip.indonesia</span>
                            </a>
                            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-gray-900">
                                <i class="fa-solid fa-envelope text-blue-500 text-xl w-6"></i>
                                <span>info@freesip.co.id</span>
                            </a>
                            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-gray-900">
                                <i class="fa-brands fa-whatsapp text-green-600 text-xl w-6"></i>
                                <span>+62 812-3456-7890</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
