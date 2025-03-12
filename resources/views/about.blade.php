@extends('layout')
@section('title', 'About')
@section('head')
    <style>
        .wave-1 {
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z' opacity='.25' class='shape-fill'%3E%3C/path%3E%3Cpath d='M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z' opacity='.5' class='shape-fill'%3E%3C/path%3E%3Cpath d='M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z' class='shape-fill'%3E%3C/path%3E%3C/svg%3E") no-repeat;
            background-size: cover;
            animation: wave 15s linear infinite;
        }

        .wave-2 {
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z' class='shape-fill'%3E%3C/path%3E%3C/svg%3E") no-repeat;
            background-size: cover;
            animation: wave 20s linear infinite;
        }

        @keyframes wave {
            0% {
                background-position-x: 0;
            }

            100% {
                background-position-x: 1000px;
            }
        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles:before,
        .circles:after {
            content: '';
            position: absolute;
            border-radius: 50%;
            animation-duration: 6s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .circles:before {
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            left: -150px;
            top: 10%;
            animation-name: float-left;
        }

        .circles:after {
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.03);
            right: -250px;
            bottom: 5%;
            animation-name: float-right;
        }

        @keyframes float-left {
            0% {
                transform: translateX(0) rotate(0deg);
            }

            100% {
                transform: translateX(400px) rotate(360deg);
            }
        }

        @keyframes float-right {
            0% {
                transform: translateX(0) rotate(0deg);
            }

            100% {
                transform: translateX(-400px) rotate(-360deg);
            }
        }
    </style>
@endsection

@section('title', 'About Us')
@section('description', 'Learn about EcoHydrate, our mission, and our sustainable water bottle production process')

@section('content')
    <div class="h-screen">
        <div class="bg-black relative overflow-hidden h-screen">
            <div class="absolute inset-0 overflow-hidden">
                <div class="wave-1 absolute -bottom-12 left-0 w-full h-32 opacity-10"></div>
                <div class="wave-2 absolute -bottom-12 left-0 w-full h-48 opacity-5"></div>
                <div class="circles"></div>
            </div>

            <div
                class="container mx-auto px-4 py-16 sm:px-6 lg:px-8 h-screen flex flex-col items-center justify-center relative z-10">
                <div class="text-center hero-content">
                    <h1 class="text-6xl sm:text-7xl md:text-8xl font-extrabold tracking-tight text-white mb-2 split-text">
                        Our Mission
                    </h1>
                    <div class="w-24 h-1 bg-[#fcd34d] mx-auto my-8 line-animation"></div>
                    <p class="mt-2 max-w-3xl font-medium mx-auto text-xl sm:text-2xl md:text-3xl text-white/90 fade-in">
                        Revolutionizing hydration through sustainable innovation since 2020
                    </p>
                </div>
            </div>
        </div>

        <div class="py-16 bg-gray-50 our-values">
            <div
                class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center text-center h-screen">
                <div class="text-center mb-12">
                    <h2 class="text-base text-black font-semibold tracking-wide uppercase">Our Values</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Core Principles That Drive Us
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div
                            class="w-12 h-12 bg-black rounded-full flex items-center justify-center text-white mb-5">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Sustainable Innovation</h3>
                        <p class="text-gray-600">
                            We push the boundaries of eco-friendly technology, using 100% recyclable stainless steel and
                            biodegradable packaging.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div
                            class="w-12 h-12 bg-black rounded-full flex items-center justify-center text-white mb-5">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Premium Durability</h3>
                        <p class="text-gray-600">
                            We engineer products to last a lifetime, using aerospace-grade materials and rigorous testing
                            standards.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div
                            class="w-12 h-12 bg-black rounded-full flex items-center justify-center text-white mb-5">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Ethical Manufacturing</h3>
                        <p class="text-gray-600">
                            We maintain fair labor practices and partner with factories that share our commitment to worker
                            welfare and environmental responsibility.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-16 bg-white our-process">
            <div
                class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center text-center h-screen">
                <div class="text-center mb-16">
                    <h2 class="text-base text-black font-semibold tracking-wide uppercase">Our Process</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Engineering Excellence
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div
                            class="mx-auto w-16 h-16 bg-black rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">
                            1
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Advanced Design</h3>
                        <p class="text-gray-600">
                            Our engineers create precision 3D models optimized for insulation, ergonomics, and durability.
                        </p>
                    </div>

                    <div class="text-center">
                        <div
                            class="mx-auto w-16 h-16 bg-black rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">
                            2
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Material Sourcing</h3>
                        <p class="text-gray-600">
                            We use 18/8 food-grade stainless steel and BPA-free silicone seals from certified suppliers.
                        </p>
                    </div>

                    <div class="text-center">
                        <div
                            class="mx-auto w-16 h-16 bg-black rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">
                            3
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Precision Manufacturing</h3>
                        <p class="text-gray-600">
                            State-of-the-art facilities craft each bottle with laser welding and vacuum insulation
                            technology.
                        </p>
                    </div>

                    <div class="text-center">
                        <div
                            class="mx-auto w-16 h-16 bg-black rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">
                            4
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Quality Assurance</h3>
                        <p class="text-gray-600">
                            Every bottle undergoes 12-point inspection including pressure, leak, and thermal testing.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-black">
            <div class="container mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                        <span class="block">Ready to make a sustainable switch?</span>
                        <span class="block text-[#fcd34d]">Join the hydration revolution.</span>
                    </h2>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="{{ route('collection') }}"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-black bg-white hover:bg-gray-50">
                                Explore Our Bottles
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            gsap.registerPlugin(ScrollTrigger);

            let splitTextInstance;
            if (typeof SplitText !== 'undefined') {
                splitTextInstance = new SplitText(".split-text", {
                    type: "chars,words"
                });
                const chars = splitTextInstance.chars;

                gsap.from(chars, {
                    opacity: 0,
                    y: 50,
                    stagger: 0.03,
                    duration: 1,
                    ease: "back.out(1.7)"
                });
            } else {
                gsap.from(".split-text", {
                    opacity: 0,
                    y: 50,
                    duration: 1,
                    ease: "back.out(1.7)"
                });
            }

            gsap.from(".line-animation", {
                width: 0,
                duration: 1.5,
                delay: 0.5,
                ease: "power2.out"
            });

            gsap.from(".fade-in", {
                opacity: 0,
                duration: 1.5,
                delay: 0.8,
                ease: "power2.out"
            });

            gsap.to(".wave-1", {
                backgroundPositionX: 1000,
                repeat: -1,
                duration: 15,
                ease: "none"
            });

            gsap.to(".wave-2", {
                backgroundPositionX: 1000,
                repeat: -1,
                duration: 20,
                ease: "none"
            });

            const valueCards = document.querySelectorAll('.bg-white.p-6.rounded-lg');
            gsap.from(valueCards, {
                y: 50,
                opacity: 0,
                duration: 0.8,
                stagger: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".our-values",
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });

            const valueIcons = document.querySelectorAll('.w-12.h-12.bg-black');
            gsap.from(valueIcons, {
                scale: 0,
                rotation: 180,
                duration: 0.8,
                stagger: 0.2,
                ease: "back.out(1.7)",
                scrollTrigger: {
                    trigger: ".our-values",
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });

            const processSteps = document.querySelectorAll('.mx-auto.w-16.h-16');
            gsap.from(processSteps, {
                scale: 0,
                opacity: 0,
                stagger: 0.2,
                duration: 0.6,
                ease: "back.out(1.7)",
                scrollTrigger: {
                    trigger: ".our-process",
                    start: "top 70%",
                    toggleActions: "play none none none"
                }
            });

            const processTexts = document.querySelectorAll('.our-process .text-center');
            gsap.from(processTexts, {
                y: 30,
                opacity: 0,
                stagger: 0.2,
                duration: 0.8,
                delay: 0.3,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".our-process",
                    start: "top 70%",
                    toggleActions: "play none none none"
                }
            });

            gsap.from(".bg-black h2 span", {
                y: 30,
                opacity: 0,
                stagger: 0.3,
                duration: 0.8,
                delay: 2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".bg-black",
                    start: "top+=1500 90%",
                    toggleActions: "play none none none"
                }
            });

            gsap.from(".bg-black .inline-flex", {
                scale: 0.8,
                opacity: 0,
                duration: 0.8,
                delay: 2,
                ease: "back.out(1.7)",
                scrollTrigger: {
                    trigger: ".bg-black",
                    start: "top+=1500 90%",
                    toggleActions: "play none none none"
                }
            });

            gsap.to(".hero-content", {
                yPercent: -30,
                ease: "none",
                scrollTrigger: {
                    trigger: ".bg-gradient-to-r",
                    start: "top top",
                    end: "bottom top",
                    scrub: true
                }
            });

            gsap.to(".circles:before", {
                x: 400,
                rotation: 360,
                duration: 20,
                repeat: -1,
                ease: "none"
            });

            gsap.to(".circles:after", {
                x: -400,
                rotation: -360,
                duration: 25,
                repeat: -1,
                ease: "none"
            });

            document.querySelector('.py-16.bg-gray-50').classList.add('our-values');
            document.querySelector('.py-16.bg-white').classList.add('our-process');

            gsap.utils.toArray('.text-center.mb-12').forEach(header => {
                gsap.from(header.children, {
                    y: 30,
                    opacity: 0,
                    stagger: 0.2,
                    duration: 0.8,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: header,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });
            });
        });
    </script>
@endsection