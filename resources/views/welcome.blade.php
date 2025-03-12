@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="h-screen">
        <div class="bg-black">
            <div
                class="container mx-auto px-4 py-24 sm:px-6 lg:px-8 flex flex-col items-center justify-center text-center h-screen">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">
                    <span class="block">EcoHydrate Bottles</span>
                    <span class="block text-[#fcd34d] mt-3">Hydration Elevated</span>
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-xl text-white">
                    Premium reusable bottles crafted with innovative technology for sustainable hydration.
                </p>
                <div class="mt-10">
                    <a href="{{ route('collection') }}"
                        class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                        Explore Our Bottles
                    </a>
                </div>
            </div>
        </div>

        <div class="py-16 bg-white">
            <div
                class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center text-center min-h-screen ">
                <div class="lg:text-center">
                    <h2 class="text-base text-black font-semibold tracking-wide uppercase">Our Commitment</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Designed for Excellence
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Each bottle engineered with cutting-edge technology and sustainable materials.
                    </p>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                        <div class="pt-6">
                            <div class="bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div
                                        class="flex items-center justify-center h-12 w-12 rounded-md bg-black text-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 15c4.67 4.667 12 1.5 12-4.5V5.5M3 15v4.5A1.5 1.5 0 004.5 21h15a1.5 1.5 0 001.5-1.5V15M3 15h18m0-4.5c-4.5 0-4.5-6-9-6s-4.5 6-9 6" />
                                        </svg>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">24h Temperature
                                        Control</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Double-walled vacuum insulation maintains temperatures for hours. Cold stays cold,
                                        hot stays hot.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div
                                        class="flex items-center justify-center h-12 w-12 rounded-md bg-black text-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Eco-Conscious Design
                                    </h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Made from 100% recyclable stainless steel. Reduce single-use plastic waste with
                                        every refill.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div
                                        class="flex items-center justify-center h-12 w-12 rounded-md bg-black text-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Leak-Proof Guarantee
                                    </h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Precision-engineered lid with silicone seal keeps liquids secure in any position or
                                        activity.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            gsap.registerPlugin(ScrollTrigger);

            const heroTimeline = gsap.timeline();

            heroTimeline
                .from(".bg-black", {
                    opacity: 0,
                    duration: 1,
                    ease: "power2.out"
                })
                .from("h1 span:first-child", {
                    y: 50,
                    opacity: 0,
                    duration: 0.8,
                    ease: "back.out(1.7)"
                })
                .from("h1 span:last-child", {
                    y: 30,
                    opacity: 0,
                    duration: 0.8,
                    ease: "back.out(1.7)"
                }, "-=0.4")
                .from(".bg-black p", {
                    y: 20,
                    opacity: 0,
                    duration: 0.7,
                    ease: "power2.out"
                }, "-=0.2")
                .from(".bg-black .mt-10 a", {
                    scale: 0.8,
                    opacity: 0,
                    duration: 0.5,
                    ease: "power1.out"
                }, "-=0.3");

            gsap.from(".lg\\:text-center h2", {
                opacity: 0,
                y: 30,
                duration: 0.8,
                scrollTrigger: {
                    trigger: ".lg\\:text-center",
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });

            gsap.from(".lg\\:text-center p.mt-2", {
                opacity: 0,
                y: 30,
                duration: 0.8,
                delay: 0.2,
                scrollTrigger: {
                    trigger: ".lg\\:text-center",
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });

            gsap.from(".lg\\:text-center p.mt-4", {
                opacity: 0,
                y: 30,
                duration: 0.8,
                delay: 0.4,
                scrollTrigger: {
                    trigger: ".lg\\:text-center",
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });

            gsap.from(".pt-6", {
                opacity: 0,
                y: 50,
                duration: 0.8,
                stagger: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".grid",
                    start: "top 75%",
                    toggleActions: "play none none none"
                }
            });

            gsap.from(".pt-6 .flex", {
                scale: 0,
                rotation: -180,
                duration: 0.8,
                stagger: 0.2,
                ease: "back.out(1.7)",
                scrollTrigger: {
                    trigger: ".grid",
                    start: "top 75%",
                    toggleActions: "play none none none"
                }
            });

            const exploreButton = document.querySelector('.bg-gradient-to-r .mt-10 a');
            if (exploreButton) {
                exploreButton.addEventListener('mouseenter', () => {
                    gsap.to(exploreButton, {
                        scale: 1.05,
                        duration: 0.3,
                        ease: "power1.out"
                    });
                });

                exploreButton.addEventListener('mouseleave', () => {
                    gsap.to(exploreButton, {
                        scale: 1,
                        duration: 0.3,
                        ease: "power1.out"
                    });
                });
            }

            document.querySelectorAll('.pt-6').forEach(card => {
                card.addEventListener('mouseenter', () => {
                    gsap.to(card, {
                        y: -10,
                        boxShadow: "0 10px 30px rgba(0, 0, 0, 0.1)",
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });

                card.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        y: 0,
                        boxShadow: "0 0 0 rgba(0, 0, 0, 0)",
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });
            });
        });
    </script>
@endsection
