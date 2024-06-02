<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- Include Tailwind CSS -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

        <link rel="stylesheet" href="{{ asset('css/font.css') }}" />

        <!-- Include Poppins Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <!-- Include Mont Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
        />
    </head>

    <body>
        @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "green",
                stopOnFocus: true,
                ariaLive: "polite",
                onClick: function () {},
            }).showToast();
        </script>
        @endif @if (session('error'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "red",
                stopOnFocus: true,
                ariaLive: "polite",
                onClick: function () {},
            }).showToast();
        </script>
        @endif
        <div class="hidden md:block">
            <div
                class="bg-white text-lg text-black flex flex-row justify-between gap-12 py-6 px-20"
            >
                <div>
                    <a href="">
                        <img
                            class="w-44"
                            src="/images/sharepadi-rebrand-02.png"
                            alt=""
                        />
                    </a>
                </div>
                <div class="flex justify-between gap-12 montserrat-medium">
                    <a href="#">Contact Us</a>
                    <div id="dropdownButton7" class="relative">
                        <div onclick="toggleDropdown7()">
                            <a href="#">Login</a>
                        </div>
                        <x-login> </x-login>
                    </div>

                    <div id="dropdownButton9" class="relative">
                        <div onclick="toggleDropdown9()">
                            <a
                                href="#"
                                class="text-[#F0F0F0] bg-[#F48857] px-10 py-2 -mt-2 rounded-full"
                                >Register</a
                            >
                        </div>
                        <x-register> </x-register>
                    </div>
                </div>
            </div>
        </div>

        <nav
            class="block md:hidden absolute top-0 left-0 right-0 bg-white z-30"
        >
            <section class="container mx-auto px-7 py-8 flex justify-between">
                <a href="/">
                    <div class="logo w-28">
                        <img src="/images/sharepadi-rebrand-02.png" alt="" />
                    </div>
                </a>
                <div class="relative" id="dropdownButton2">
                    <div onclick="toggleDropdown2()" class="flex justify-end">
                        <a href="#"
                            ><img src="/images/dark-menu.svg" alt=""
                        /></a>
                    </div>
                    <div
                        id="dropdown2"
                        class="flex flex-row text-black hidden static pt-4 -ml-[200px] ph1:-ml-[240px] ph2:-ml-[300px] ph3:-ml-[345px] sm:-ml-[562px] z-20"
                    >
                        <div
                            class="flex flex-col bg-white gap-3 montserrat-regular"
                        >
                            <a href="#">Contact Us</a>
                            <div id="dropdownButton5" class="relative pb-2">
                                <div onclick="toggleDropdown5()">
                                    <a href="#">Login</a>
                                </div>
                                <x-mobile-login> </x-mobile-login>
                            </div>
                            <div id="dropdownButton9" class="relative">
                                <div onclick="toggleDropdown9()">
                                    <a
                                        href="#"
                                        class="text-[#F0F0F0] bg-[#F48857] px-10 py-2 -mt-2 rounded-full"
                                        >Register</a
                                    >
                                </div>
                                <x-mobile-register> </x-mobile-register>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </nav>

        <div
            class="relative bg-cover bg-center h-[625px] md:h-screen"
            style="background-image: url('/images/texting-friends-1.png')"
        >
            <div
                class="block absolute z-10 inset-0 bg-[#FFFFFF] bg-opacity-90"
            ></div>
            <div
                class="absolute text-center z-20 sm:mx-8 md:mx-32 lg:mx-64 mt-36 md:mt-20 text-black"
            >
                <h1
                    class="text-[20px] mx-10 leading-[24px] sm:text-[45px] sm:leading-[40px] md:leading-[30px] md:leading-[40px] lg:text-[63px] lg:leading-[55px] montserrat-bold"
                >
                    <span class="text-[#F48857]"
                        >Affordable Advertising Solutions</span
                    >
                    that Make Your Marketing Campaign Hit That Target.
                </h1>
                <p
                    class="montserrat-regular pt-8 pb-12 mx-10 md:mx-[78px] text-[13px] leading-[20px] md:text-[20px] md:leading-[28px]"
                >
                    With SharePadi you can reach a certain demographic, track
                    your campaign metrics and make use of influencer marketing.
                    <span class="montserrat-extra-bold">
                        FROM THE COMFORT OF YOUR HOME.</span
                    >
                </p>
                <div class="pt-14">
                    <a
                        href="#"
                        class="text-[#F0F0F0] montserrat-bold text-base md:text-[30px] bg-[#F48857] px-6 py-3 md:px-12 md:py-4 rounded-full"
                        >Get Started Now</a
                    >
                </div>
            </div>
        </div>
        <div class="text-center pt-6 md:pt-24 pb-28">
            <h1
                class="text-[20px] leading-[20px] md:text-[50px] leading-[54px] montserrat-bold"
            >
                Why choose <span class="text-[#F48857]">SharePadi</span>
            </h1>
        </div>
        <div class="flex flex-col justify-center items-center">
            <div class="pb-32">
                <div
                    class="flex flex-wrap justify-center md:flex-cols gap-32 md:gap-20 px-10 md:px-32"
                >
                    <div
                        class="w-[240px] ph2:w-[295px] ph3:w-[345px] md:w-[500px] text-[12.4px] leading-[16px] md:text-[20px] md:leading-[22px] rounded-[20px] md:rounded-[35px] bg-[#F0F0F0] text-center montserrat-regular pb-8 md:pb-16 pt-20 md:pt-28 px-10 md:px-20"
                    >
                        <div
                            class="flex flex-cols -mt-32 md:-mt-48 justify-center"
                        >
                            <img
                                class="w-24 p-2 border-[12px] md:w-36 md:p-4 md:border-[20px] bg-[#F48857] border border-white rounded-full"
                                src="/images/scope.png"
                                alt=""
                            />
                        </div>

                        <h1
                            class="text-[19px] mx-10 md:mx-1 leading-[20px] md:text-[30px] md:leading-[35px] pt-4 md:pt-10 text-[#F48857] montserrat-bold"
                        >
                            Audience Reach
                        </h1>
                        <p class="pt-2">
                            Extends reach exponentially by leveraging the social
                            networks of diverse users and influencers, reaching
                            targeted audiences organically across various online
                            platforms worldwide.
                        </p>
                    </div>

                    <div
                        class="w-[240px] ph2:w-[295px] ph3:w-[345px] md:w-[500px] text-[12.4px] leading-[16px] md:text-[20px] md:leading-[22px] rounded-[20px] md:rounded-[35px] bg-[#F0F0F0] text-center montserrat-regular pb-8 md:pb-16 pt-20 md:pt-28 px-10 md:px-20"
                    >
                        <div
                            class="flex flex-cols -mt-32 md:-mt-48 justify-center"
                        >
                            <img
                                class="w-24 p-2 border-[12px] md:w-36 md:p-4 md:border-[20px] bg-[#F48857] border border-white rounded-full"
                                src="/images/cost-effectiveness.png"
                                alt=""
                            />
                        </div>

                        <h1
                            class="text-[19px] leading-[20px] md:text-[30px] md:leading-[35px] pt-4 md:pt-10 text-[#F48857] montserrat-bold"
                        >
                            Cost Effectiveness
                        </h1>
                        <p class="pt-2">
                            Offers a cost-effective pay-per-task model, allowing
                            advertisers to set their budgets and pay only for
                            completed social tasks, eliminating wasted ad spend
                            and providing measurable ROI.
                        </p>
                    </div>
                </div>
            </div>
            <div class="pb-32 md:pb-32">
                <div
                    class="flex flex-wrap justify-center md:flex-cols gap-32 md:gap-20 px-10 md:px-32"
                >
                    <div
                        class="w-[240px] ph2:w-[295px] ph3:w-[345px] md:w-[500px] text-[12.4px] leading-[16px] md:text-[20px] md:leading-[22px] rounded-[20px] md:rounded-[35px] bg-[#F0F0F0] text-center montserrat-regular pb-8 md:pb-16 pt-20 md:pt-28 px-10 md:px-20"
                    >
                        <div
                            class="flex flex-cols -mt-32 md:-mt-48 justify-center"
                        >
                            <img
                                class="w-24 p-2 border-[12px] md:w-36 md:p-4 md:border-[20px] bg-[#F48857] border border-white rounded-full"
                                src="/images/target-white.png"
                                alt=""
                            />
                        </div>

                        <h1
                            class="text-[19px] mx-10 md:mx-1 leading-[20px] md:text-[30px] md:leading-[35px] pt-4 md:pt-10 text-[#F48857] montserrat-bold"
                        >
                            Target Options
                        </h1>
                        <p class="pt-2">
                            Provides precise targeting capabilities, enabling
                            advertisers to specify demographics, interests, and
                            preferences to reach niche audiences effectively,
                            increasing engagement and conversion rates.
                        </p>
                    </div>

                    <div
                        class="w-[240px] ph2:w-[295px] ph3:w-[345px] md:w-[500px] text-[12.4px] leading-[16px] md:text-[20px] md:leading-[22px] rounded-[20px] md:rounded-[35px] bg-[#F0F0F0] text-center montserrat-regular pb-8 md:pb-16 pt-20 md:pt-28 px-10 md:px-20"
                    >
                        <div
                            class="flex flex-cols -mt-32 md:-mt-48 justify-center"
                        >
                            <img
                                class="w-24 p-2 border-[12px] md:w-36 md:p-4 md:border-[20px] bg-[#F48857] border border-white rounded-full"
                                src="/images/campaign-training-and-analytics.png"
                                alt=""
                            />
                        </div>

                        <h1
                            class="text-[19px] mx-10 md:mx-1 leading-[20px] md:text-[30px] md:leading-[35px] pt-4 md:pt-10 text-[#F48857] montserrat-bold"
                        >
                            Campaign Tracking & Analytics
                        </h1>
                        <p class="pt-2">
                            Offers robust tracking and analytics tools,
                            providing comprehensive insights into campaign
                            performance, including impressions, clicks,
                            engagement rates, and conversions, allowing for
                            data-driven decision-making and optimization.
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div
                    class="flex flex-wrap justify-center md:flex-cols gap-32 md:gap-20 px-10 md:px-32"
                >
                    <div
                        class="w-[240px] ph2:w-[295px] ph3:w-[345px] md:w-[500px] text-[12.4px] leading-[16px] md:text-[20px] md:leading-[22px] rounded-[20px] md:rounded-[35px] bg-[#F0F0F0] text-center montserrat-regular pb-8 md:pb-16 pt-20 md:pt-28 px-10 md:px-20"
                    >
                        <div
                            class="flex flex-cols -mt-32 md:-mt-48 justify-center"
                        >
                            <img
                                class="w-24 p-2 border-[12px] md:w-36 md:p-4 md:border-[20px] bg-[#F48857] border border-white rounded-full"
                                src="/images/flexibility-and-customisation.png"
                                alt=""
                            />
                        </div>

                        <h1
                            class="text-[19px] leading-[20px] md:text-[30px] md:leading-[35px] pt-4 md:pt-10 text-[#F48857] montserrat-bold"
                        >
                            Flexibility & Customisation
                        </h1>
                        <p class="pt-2">
                            Offers unparalleled flexibility and customization
                            options, allowing advertisers to tailor campaigns to
                            specific goals, adjust targeting parameters, and
                            experiment with various social tasks and messaging
                            formats, optimizing campaign performance and ROI.
                        </p>
                    </div>

                    <div
                        class="w-[240px] ph2:w-[295px] ph3:w-[345px] md:w-[500px] text-[12.4px] leading-[16px] md:text-[20px] md:leading-[22px] rounded-[20px] md:rounded-[35px] bg-[#F0F0F0] text-center montserrat-regular pb-8 md:pb-16 pt-20 md:pt-28 px-10 md:px-20"
                    >
                        <div
                            class="flex flex-cols -mt-32 md:-mt-48 justify-center"
                        >
                            <img
                                class="w-24 p-2 border-[12px] md:w-36 md:p-4 md:border-[20px] bg-[#F48857] border border-white rounded-full"
                                src="/images/authenticity-and-user-engagement.png"
                                alt=""
                            />
                        </div>

                        <h1
                            class="text-[19px] leading-[20px] md:text-[30px] md:leading-[35px] pt-4 md:pt-10 text-[#F48857] montserrat-bold"
                        >
                            Authenticity & User Engagement
                        </h1>
                        <p class="pt-2">
                            Fosters authentic user engagement and advocacy by
                            leveraging the influence of real users and
                            micro-influencers, generating genuine interactions
                            and word-of-mouth referrals that resonate with
                            audiences and build trust in the brand.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-14 flex flex-row justify-center">
            <a
                href="#"
                class="text-[#F0F0F0] montserrat-bold text-base md:text-[30px] bg-[#F48857] px-6 py-3 md:px-12 md:py-4 rounded-full"
                >Get Started Now</a
            >
        </div>

        <div class="text-center pt-16 md:pt-24 pb-12">
            <h1
                class="text-[22px] leading-[20px] md:text-[50px] leading-[54px] montserrat-bold"
            >
                <span class="text-[#F48857]">SharePadi</span> is for...
            </h1>
        </div>

        <!-- component -->
        <div class="block xl:hidden">
            <div class="pb-10">
                <div class="flex flex-row justify-center">
                    <div class="relative bg-[#F48857] w-0.5 h-28">
                        <div
                            class="absolute -ml-[15px] -mt-1 bg-[#F48857] w-8 h-8 rounded-full border border-8 border-white"
                        ></div>
                    </div>
                </div>
                <div>
                    <div class="rounded-lg">
                        <div class="flex flex-row justify-center">
                            <img
                                class="w-64 md:w-[500px] rounded-xl"
                                src="/images/portrait-handsome-african-barista-standing-with-crossed-arms-counter-trendy-coffee-shop.png"
                                alt=""
                            />
                        </div>
                        <div class="pt-10 text-center px-10">
                            <h1
                                class="text-[#F48857] text-[22px] leading-[20px] md:text-[50px] leading-[54px] montserrat-bold"
                            >
                                SMEs
                            </h1>
                            <p
                                class="text-[15px] leading-[23px] md:text-[19px] leading-[31px] montserrat-regular"
                            >
                                SharePadi provides the platform for SMEs to
                                increase their reach and showcase their products
                                and services to new audiences and potential
                                clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-10">
                <div class="flex flex-row justify-center">
                    <div class="relative bg-[#F48857] w-0.5 h-36">
                        <div
                            class="absolute -ml-[15px] mt-10 bg-[#F48857] w-8 h-8 rounded-full border border-8 border-white"
                        ></div>
                    </div>
                </div>
                <div>
                    <div class="rounded-lg">
                        <div class="flex flex-row justify-center">
                            <img
                                class="w-64 md:w-[500px] -mt-1 z-20 rounded-xl"
                                src="/images/content-creator.png"
                                alt=""
                            />
                        </div>
                        <div class="pt-10 text-center px-10">
                            <h1
                                class="text-[#F48857] text-[22px] leading-[20px] md:text-[50px] leading-[54px] montserrat-bold"
                            >
                                Content Creators
                            </h1>
                            <p
                                class="text-[15px] leading-[23px] md:text-[19px] leading-[31px] montserrat-regular"
                            >
                                SharePadi provides content creators with the
                                tools to expand their audience by encouraging
                                shares and engagement on their content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-6">
                <div class="flex flex-row justify-center">
                    <div class="relative bg-[#F48857] w-0.5 h-36">
                        <div
                            class="absolute -ml-[15px] mt-10 bg-[#F48857] w-8 h-8 rounded-full border border-8 border-white"
                        ></div>
                    </div>
                </div>
                <div>
                    <div class="rounded-lg">
                        <div class="flex flex-row justify-center">
                            <img
                                class="w-64 md:w-[500px] -mt-2 rounded-xl"
                                src="/images/guitar-girl.png"
                                alt=""
                            />
                        </div>
                        <div class="pt-10 text-center px-10">
                            <h1
                                class="text-[#F48857] text-[22px] leading-[20px] md:text-[50px] leading-[54px] montserrat-bold"
                            >
                                Musicians
                            </h1>
                            <p
                                class="text-[15px] leading-[23px] md:text-[19px] leading-[31px] montserrat-regular"
                            >
                                By utilising social shares and reviews from real
                                people, artists can significantly enhance their
                                exposure, reaching a wider audience across
                                various social networks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-2">
                <div class="flex flex-row justify-center">
                    <div class="relative bg-[#F48857] w-0.5 h-36">
                        <div
                            class="absolute -ml-[15px] mt-10 bg-[#F48857] w-8 h-8 rounded-full border border-8 border-white"
                        ></div>
                    </div>
                </div>
                <div>
                    <div class="rounded-lg">
                        <div class="flex flex-row justify-center">
                            <img
                                class="w-64 md:w-[500px] -mt-1 z-10 rounded-xl"
                                src="/images/group-of-workers.png"
                                alt=""
                            />
                        </div>
                        <div class="pt-10 text-center px-10">
                            <h1
                                class="text-[#F48857] text-[22px] leading-[20px] md:text-[50px] leading-[54px] montserrat-bold"
                            >
                                Organisations
                            </h1>
                            <p
                                class="text-[15px] leading-[23px] md:text-[19px] leading-[31px] montserrat-regular"
                            >
                                SharePadi helps organisations and corporations
                                of all sizes and fields amplify their brand
                                presence on social media, driving awareness and
                                customer acquisiiton.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-10">
                <div class="flex flex-row justify-center">
                    <div class="relative bg-[#F48857] w-0.5 h-36">
                        <div
                            class="absolute -ml-[15px] mt-10 bg-[#F48857] w-8 h-8 rounded-full border border-8 border-white"
                        ></div>
                    </div>
                </div>
                <div>
                    <div class="rounded-lg">
                        <div class="flex flex-row justify-center">
                            <img
                                class="w-64 md:w-[500px] -mt-1 z-10 rounded-xl"
                                src="/images/female-marketer.png"
                                alt=""
                            />
                        </div>
                        <div class="pt-10 text-center px-10">
                            <h1
                                class="text-[#F48857] text-[22px] leading-[20px] md:text-[50px] leading-[54px] montserrat-bold"
                            >
                                Marketers
                            </h1>
                            <p
                                class="text-[15px] leading-[23px] md:text-[19px] leading-[31px] montserrat-regular"
                            >
                                By targeting specific actions related to their
                                products, marketers can increase the likelihood
                                of conversions through personalized social
                                proof.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden xl:block">
            <div class="container mx-auto w-full h-full">
                <div class="relative wrap overflow-hidden p-10 h-full">
                    <div
                        class="border-2 absolute border-opacity-100 border-[#F48857] h-full border"
                        style="left: 50%"
                    ></div>

                    <!-- left timeline -->
                    <div
                        class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline"
                    >
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 lg:ml-1 2xl:ml-[110px] flex items-center order-1 bg-white w-10 h-10 rounded-full"
                        >
                            <h1 class="mx-auto ont-semibold text-lg text-white">
                                <div
                                    class="z-30 flex items-center order-1 bg-[#F48857] shadow-xl w-4 h-4 rounded-full"
                                >
                                    <h1
                                        class="mx-auto ont-semibold text-lg text-white"
                                    ></h1>
                                </div>
                            </h1>
                        </div>
                        <div class="order-1 rounded-lg shadow-xl w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                                style="
                                    background-image: url('/images/portrait-handsome-african-barista-standing-with-crossed-arms-counter-trendy-coffee-shop.png');
                                "
                            ></div>
                        </div>
                    </div>
                    <!-- left timeline -->
                    <div
                        class="flex justify-between flex-row-reverse items-center w-full left-timeline"
                    >
                        <div class="order-1 w-5/12"></div>

                        <div class="order-1 rounded-lg w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                            >
                                <div
                                    class="pt-2 text-center text-[24px] leading-[30px] montserrat-regular px-12"
                                >
                                    <div
                                        class="text-[32px] text-[#F48857] py-2 montserrat-extra-bold"
                                    >
                                        SMEs
                                    </div>
                                    SharePadi provides the platform for SMEs to
                                    increase their reach and showcase their
                                    products and services to new audiences and
                                    potential clients.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right timeline -->
                    <div
                        class="-mt-64 mb-8 flex justify-between items-center w-full right-timeline"
                    >
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 lg:ml-1 2xl:mr-[110px] flex items-center order-1 bg-white w-10 h-10 rounded-full"
                        >
                            <h1 class="mx-auto ont-semibold text-lg text-white">
                                <div
                                    class="z-30 flex items-center order-1 bg-[#F48857] w-4 h-4 rounded-full"
                                >
                                    <h1
                                        class="mx-auto ont-semibold text-lg text-white"
                                    ></h1>
                                </div>
                            </h1>
                        </div>
                        <div class="order-1 rounded-lg w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                                style="
                                    background-image: url('/images/content-creator.png');
                                "
                            ></div>
                        </div>
                    </div>
                    <!-- right timeline -->
                    <div
                        class="flex justify-between items-center w-full right-timeline"
                    >
                        <div class="order-1 w-5/12"></div>

                        <div class="order-1 rounded-lg w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                            >
                                <div
                                    class="pt-2 text-center text-[24px] leading-[30px] montserrat-regular px-12"
                                >
                                    <div
                                        class="text-[32px] text-[#F48857] pt-6 pt-4 py-2 montserrat-extra-bold"
                                    >
                                        Content Creators
                                    </div>
                                    SharePadi provides content creators with the
                                    tools to expand their audience by
                                    encouraging shares and engagement on their
                                    content.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- left timeline -->
                    <div
                        class="-mt-64 mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline"
                    >
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 lg:ml-1 2xl:ml-[110px] flex items-center order-1 bg-white w-10 h-10 rounded-full"
                        >
                            <h1 class="mx-auto ont-semibold text-lg text-white">
                                <div
                                    class="z-30 flex items-center order-1 bg-[#F48857] shadow-xl w-4 h-4 rounded-full"
                                >
                                    <h1
                                        class="mx-auto ont-semibold text-lg text-white"
                                    ></h1>
                                </div>
                            </h1>
                        </div>
                        <div class="order-1 rounded-lg shadow-xl w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                                style="
                                    background-image: url('/images/jazz-girl.png');
                                "
                            ></div>
                        </div>
                    </div>
                    <!-- left timeline -->
                    <div
                        class="flex justify-between flex-row-reverse items-center w-full left-timeline"
                    >
                        <div class="order-1 w-5/12"></div>

                        <div class="order-1 rounded-lg w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                            >
                                <div
                                    class="pt-2 text-center text-[24px] leading-[30px] montserrat-regular px-12"
                                >
                                    <div
                                        class="text-[32px] text-[#F48857] pt-4 py-2 montserrat-extra-bold"
                                    >
                                        Musicians
                                    </div>
                                    By utilising social shares and reviews from
                                    real people, artists can significantly
                                    enhance their exposure, reaching a wider
                                    audience across various social networks.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- right timeline -->
                    <div
                        class="-mt-60 mb-8 flex justify-between items-center w-full right-timeline"
                    >
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 lg:ml-1 2xl:mr-[110px] flex items-center order-1 bg-white w-10 h-10 rounded-full"
                        >
                            <h1 class="mx-auto ont-semibold text-lg text-white">
                                <div
                                    class="z-30 flex items-center order-1 bg-[#F48857] w-4 h-4 rounded-full"
                                >
                                    <h1
                                        class="mx-auto ont-semibold text-lg text-white"
                                    ></h1>
                                </div>
                            </h1>
                        </div>
                        <div class="order-1 rounded-lg w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                                style="
                                    background-image: url('/images/group-of-workers.png');
                                "
                            ></div>
                        </div>
                    </div>
                    <!-- right timeline -->
                    <div
                        class="flex justify-between items-center w-full right-timeline"
                    >
                        <div class="order-1 w-5/12"></div>

                        <div class="order-1 rounded-lg w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                            >
                                <div
                                    class="pt-2 text-center text-[24px] leading-[30px] montserrat-regular px-12"
                                >
                                    <div
                                        class="text-[32px] text-[#F48857] pt-6 pt-4 py-2 montserrat-extra-bold"
                                    >
                                        Organisations
                                    </div>
                                    SharePadi helps organisations and
                                    corporations of all sizes and fields amplify
                                    their brand presence on social media,
                                    driving awareness and customer acquisiiton.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- left timeline -->
                    <div
                        class="-mt-60 -mb-6 flex justify-between flex-row-reverse items-center w-full left-timeline"
                    >
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 lg:ml-1 2xl:ml-[110px] flex items-center order-1 bg-white w-10 h-10 rounded-full"
                        >
                            <h1 class="mx-auto ont-semibold text-lg text-white">
                                <div
                                    class="z-30 flex items-center order-1 bg-[#F48857] w-4 h-4 rounded-full"
                                >
                                    <h1
                                        class="mx-auto ont-semibold text-lg text-white"
                                    ></h1>
                                </div>
                            </h1>
                        </div>
                        <div class="order-1 rounded-lg w-/1">
                            <div
                                class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                                style="
                                    background-image: url('/images/female-marketer.png');
                                "
                            ></div>
                        </div>
                    </div>
                    <!-- left timeline -->

                    <!-- <div
                    class="flex justify-between flex-row-reverse items-center w-full left-timeline"
                >
                    <div class="order-1 w-5/12"></div>

                    <div class="order-1 rounded-lg w-/1">
                        <div
                            class="bg-cover bg-no-repeat bg-center rounded-xl w-[85%] h-[172px] md:w-[87%] md:h-[250px] lg:w-[500px] lg:h-[250px]"
                        >
                            <div
                                class="pt-2 text-center text-[24px] leading-[30px] montserrat-regular px-12"
                            >
                                <div
                                    class="text-[32px] text-[#F48857] pt-4 py-2 montserrat-extra-bold"
                                >
                                    Marketers
                                </div>
                                By targeting specific actions related to their
                                products, marketers can increase the likelihood
                                of conversions through personalized social
                                proof.
                            </div>
                        </div>
                    </div>
                </div> -->
                </div>
                <div class="flex flex-col w-1/2 px-24 mt-4">
                    <div
                        class="pt-2 text-center text-[24px] leading-[30px] montserrat-regular px-12"
                    >
                        <div
                            class="text-[32px] text-[#F48857] pt-4 py-2 montserrat-extra-bold"
                        >
                            Marketers
                        </div>
                        By targeting specific actions related to their products,
                        marketers can increase the likelihood of conversions
                        through personalized social proof.
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden md:block text-center text-[45px] pt-16 pb-8">
            <h1 class="montserrat-bold text-[#F48857]">FAQ</h1>
        </div>
        <div class="block md:hidden text-center pt-16 md:pt-24 pb-12">
            <h1
                class="text-[22px] leading-[20px] md:text-[50px] leading-[54px] text-[#F48857] montserrat-bold"
            >
                FAQ
            </h1>
        </div>

        <div class="px-8 md:px-20">
            <div class="pb-6">
                <div
                    class="px-8 md:px-14 rounded-3xl py-5 md:py-10 bg-[#F0F0F0] flex flex-row gap-8 justify-between relative"
                >
                    <h1
                        class="z-20 text-[12px] leading-[15px] md:text-[30px] md:leading-[30px] montserrat-bold"
                    >
                        How can SharePadi help my business stand out in a
                        crowded market?
                    </h1>
                    <img
                        class="z-20 w-8 h-7"
                        src="/images/sort-up.png"
                        alt=""
                    />
                    <!-- <div
                    class="z-10 left-0 px-8 md:px-14 rounded-br-3xl absolute hidden bg-[#F0F0F0] pt-24 text-[24px] leading-[30px] montserrat-regular"
                >
                    Absolutely! SharePadi caters to businesses of all sizes,
                    offering flexible solutions tailored to your specific needs
                    and budget. Whether you're a budding startup looking to
                    establish your presence or a well-established enterprise
                    seeking to expand your reach, SharePadi provides a scalable
                    advertising platform that adapts to your growth trajectory.
                    With customizable campaigns and transparent pricing models,
                    you can achieve your marketing objectives efficiently,
                    regardless of your company's size or industry.
                </div> -->
                </div>
            </div>

            <div class="pb-6">
                <div
                    class="px-8 md:px-14 rounded-3xl py-5 md:py-10 bg-[#F0F0F0] flex flex-row gap-8 justify-between relative"
                >
                    <h1
                        class="z-20 text-[12px] leading-[15px] md:text-[30px] md:leading-[30px] montserrat-bold"
                    >
                        What measures does SharePadi take to ensure the
                        authenticity and credibility of social tasks performed
                        by users?
                    </h1>
                    <img
                        class="z-20 w-8 h-7"
                        src="/images/sort-up.png"
                        alt=""
                    />
                </div>
            </div>

            <div class="pb-6">
                <div
                    class="px-8 md:px-14 rounded-3xl py-5 md:py-10 bg-[#F0F0F0] flex flex-row gap-8 justify-between relative"
                >
                    <h1
                        class="z-20 text-[12px] leading-[15px] md:text-[30px] md:leading-[30px] montserrat-bold"
                    >
                        Can SharePadi help me reach specific target demographics
                        or niche audiences?
                    </h1>
                    <img
                        class="z-20 w-8 h-7"
                        src="/images/sort-up.png"
                        alt=""
                    />
                </div>
            </div>

            <div class="pb-6">
                <div
                    class="px-8 md:px-14 rounded-3xl py-5 md:py-10 bg-[#F0F0F0] flex flex-row gap-8 justify-between relative"
                >
                    <h1
                        class="z-20 text-[12px] leading-[15px] md:text-[30px] md:leading-[30px] montserrat-bold"
                    >
                        How does SharePadi ensure that my advertising campaigns
                        deliver tangible results and ROI?
                    </h1>
                    <img
                        class="z-20 w-8 h-7"
                        src="/images/sort-up.png"
                        alt=""
                    />
                </div>
            </div>

            <div class="pb-6">
                <div
                    class="px-8 md:px-14 rounded-3xl py-5 md:py-10 bg-[#F0F0F0] flex flex-col justify-between relative"
                    id="dropdownButton"
                >
                    <div
                        onclick="toggleDropdown()"
                        class="flex gap-8 justify-between flex-row"
                    >
                        <h1
                            class="z-20 text-[12px] leading-[15px] md:text-[30px] md:leading-[30px] montserrat-bold"
                        >
                            Is SharePadi suitable for businesses of all sizes,
                            including startups and larger enterprises?
                        </h1>

                        <img
                            class="z-20 w-8 h-7"
                            src="/images/sort-up.png"
                            alt=""
                        />
                    </div>

                    <div class="flex flex-col">
                        <div
                            id="dropdown"
                            class="z-10 left-0 px-8 md:px-14 rounded-br-3xl static hidden bg-[#F0F0F0] pt-20 md:pt-16 text-[10px] leading-[13px] md:text-[24px] leading-[30px] md: montserrat-regular"
                        >
                            Absolutely! SharePadi caters to businesses of all
                            sizes, offering flexible solutions tailored to your
                            specific needs and budget. Whether you're a budding
                            startup looking to establish your presence or a
                            well-established enterprise seeking to expand your
                            reach, SharePadi provides a scalable advertising
                            platform that adapts to your growth trajectory. With
                            customizable campaigns and transparent pricing
                            models, you can achieve your marketing objectives
                            efficiently, regardless of your company's size or
                            industry.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-20">
            <div class="bg-[#F0F0F0] py-20 px-12 md:px-56">
                <h1
                    class="text-[20px] leading-[30px] md:text-[63px] md:leading-[65px] text-center montserrat-extra-bold"
                >
                    Let’s take your brand to the
                    <span class="text-[#F48857]">NEXT LEVEL!</span>
                </h1>
                <div class="flex flex-row justify-center pt-14 montserrat-bold">
                    <a
                        href="#"
                        class="text-[#F0F0F0] text-[15px] md:text-[25px] bg-[#F48857] px-8 md:px-12 py-2 -mt-2 rounded-full"
                        >Register Now</a
                    >
                </div>
            </div>
        </div>
        <div class="hidden md:block">
            <div class="px-20 bg-[#F0F0F0] montserrat-medium text-xs">
                <div class="flex flex-row justify-between">
                    <div class="pb-16">
                        SharePadi is created by BLOOM DIGITAL MEDIA LTD.  2024.
                        All Rights Reserved
                    </div>
                    <div>
                        <div class="flex justify-end w-20">
                            <a
                                href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                target="_blank"
                                ><img
                                    src="/images/Instagram2.svg"
                                    alt="Instagram Link"
                            /></a>
                            <a
                                href="https://x.com/bloomdigitmedia?s=20"
                                target="_blank"
                                ><img
                                    src="/images/TwitterX.svg"
                                    alt="X Link" /></a
                            ><a
                                href="https://www.facebook.com/bloomdigitmedia/"
                                target="_blank"
                                ><img
                                    src="/images/Facebook2.png"
                                    alt="Facebook Link"
                            /></a>
                            <a
                                href="https://www.linkedin.com/company/bloom-digital-media-nigeria/"
                                target="_blank"
                                ><img
                                    src="/images/LinkedIn2.png"
                                    alt="LinkedIn Link"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block md:hidden">
            <div
                class="px-[75px] text-center pb-10 bg-[#F0F0F0] montserrat-medium text-xs"
            >
                <div class="flex flex-col justify-between">
                    <div class="pb-5">
                        SharePadi is created by BLOOM DIGITAL MEDIA LTD.
                    </div>
                    <div class="pb-8">  2024. All Rights Reserved</div>
                    <div class="flex justify-center">
                        <div class="flex justify-end w-24">
                            <a
                                href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                target="_blank"
                                ><img
                                    src="/images/Instagram2.svg"
                                    alt="Instagram Link"
                            /></a>
                            <a
                                href="https://x.com/bloomdigitmedia?s=20"
                                target="_blank"
                                ><img
                                    src="/images/TwitterX.svg"
                                    alt="X Link" /></a
                            ><a
                                href="https://www.facebook.com/bloomdigitmedia/"
                                target="_blank"
                                ><img
                                    src="/images/Facebook2.png"
                                    alt="Facebook Link"
                            /></a>
                            <a
                                href="https://www.linkedin.com/company/bloom-digital-media-nigeria/"
                                target="_blank"
                                ><img
                                    src="/images/LinkedIn2.png"
                                    alt="LinkedIn Link"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggleDropdown() {
                let dropdown = document.querySelector(
                    "#dropdownButton #dropdown"
                );
                dropdown.classList.toggle("hidden");
            } // Add event listener to hide dropdown when clicking outside
            document.addEventListener("click", function (event) {
                // Check if the click event target is not inside the dropdown
                if (
                    !event.target.closest("#dropdown") &&
                    !event.target.closest("#dropdownButton")
                ) {
                    let dropdown = document.querySelector(
                        "#dropdownButton #dropdown"
                    );
                    dropdown.classList.add("hidden");
                }
            });

            function toggleDropdown2() {
                let dropdown2 = document.querySelector(
                    "#dropdownButton2 #dropdown2"
                );
                dropdown2.classList.toggle("hidden");
            }

            function toggleDropdown5() {
                let dropdown5 = document.querySelector(
                    "#dropdownButton5 #dropdown5"
                );
                dropdown5.classList.toggle("hidden");
            }

            function toggleDropdown7() {
                let dropdown7 = document.querySelector(
                    "#dropdownButton7 #dropdown7"
                );
                dropdown7.classList.toggle("hidden");
            }

            function toggleDropdown9() {
                let dropdown9 = document.querySelector(
                    "#dropdownButton9 #dropdown9"
                );
                dropdown9.classList.toggle("hidden");
            }

            function toggleDropdown8() {
                let dropdown8 = document.querySelector(
                    "#dropdownButton8 #dropdown8"
                );
                dropdown8.classList.toggle("hidden");
            }

            // Add event listener to hide dropdown when clicking outside
            document.addEventListener("click", function (event) {
                // Check if the click event target is not inside the dropdown
                if (
                    !event.target.closest("#dropdown7") &&
                    !event.target.closest("#dropdownButton7")
                ) {
                    let dropdown7 = document.querySelector(
                        "#dropdownButton7 #dropdown7"
                    );
                    dropdown7.classList.add("hidden");
                }
                if (
                    !event.target.closest("#dropdown8") &&
                    !event.target.closest("#dropdownButton8")
                ) {
                    let dropdown8 = document.querySelector(
                        "#dropdownButton8 #dropdown8"
                    );
                    dropdown8.classList.add("hidden");
                }
                if (
                    !event.target.closest("#dropdown2") &&
                    !event.target.closest("#dropdownButton2")
                ) {
                    let dropdown2 = document.querySelector(
                        "#dropdownButton2 #dropdown2"
                    );
                    dropdown2.classList.add("hidden");
                }
                if (
                    !event.target.closest("#dropdown5") &&
                    !event.target.closest("#dropdownButton5")
                ) {
                    let dropdown5 = document.querySelector(
                        "#dropdownButton5 #dropdown5"
                    );
                    dropdown5.classList.add("hidden");
                }
                if (
                    !event.target.closest("#dropdown9") &&
                    !event.target.closest("#dropdownButton9")
                ) {
                    let dropdown9 = document.querySelector(
                        "#dropdownButton9 #dropdown9"
                    );
                    dropdown9.classList.add("hidden");
                }
            });

            function togglePassword() {
                const passwordInput = document.getElementById("password");
                const eyeIcon = document.getElementById("eyeIcon");
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    // eyeIcon.innerHTML =
                    //     '<svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" id="eye"><path d="M1664 960q-152-236-381-353 61 104 61 225 0 185-131.5 316.5T896 1280t-316.5-131.5T448 832q0-121 61-225-229 117-381 353 133 205 333.5 326.5T896 1408t434.5-121.5T1664 960zM944 576q0-20-14-34t-34-14q-125 0-214.5 89.5T592 832q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm848 384q0 34-20 69-140 230-376.5 368.5T896 1536t-499.5-139T20 1029Q0 994 0 960t20-69q140-229 376.5-368T896 384t499.5 139T1772 891q20 35 20 69z"></path></svg>';
                } else {
                    passwordInput.type = "password";
                    // eyeIcon.innerHTML =
                    //     '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="25" id="eye"><path d="M1664 960q-152-236-381-353 61 104 61 225 0 185-131.5 316.5T896 1280t-316.5-131.5T448 832q0-121 61-225-229 117-381 353 133 205 333.5 326.5T896 1408t434.5-121.5T1664 960zM944 576q0-20-14-34t-34-14q-125 0-214.5 89.5T592 832q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm848 384q0 34-20 69-140 230-376.5 368.5T896 1536t-499.5-139T20 1029Q0 994 0 960t20-69q140-229 376.5-368T896 384t499.5 139T1772 891q20 35 20 69z"></path></svg>';
                }
            }

            function toggleConfirmPassword() {
                const passwordInput = document.getElementById(
                    "password_confirmation"
                );
                const eyeIcon = document.getElementById("confirm_eyeIcon");
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    // eyeIcon.innerHTML =
                    //     '<svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" id="eye"><path d="M1664 960q-152-236-381-353 61 104 61 225 0 185-131.5 316.5T896 1280t-316.5-131.5T448 832q0-121 61-225-229 117-381 353 133 205 333.5 326.5T896 1408t434.5-121.5T1664 960zM944 576q0-20-14-34t-34-14q-125 0-214.5 89.5T592 832q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm848 384q0 34-20 69-140 230-376.5 368.5T896 1536t-499.5-139T20 1029Q0 994 0 960t20-69q140-229 376.5-368T896 384t499.5 139T1772 891q20 35 20 69z"></path></svg>';
                } else {
                    passwordInput.type = "password";
                    // eyeIcon.innerHTML =
                    //     '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="25" id="eye"><path d="M1664 960q-152-236-381-353 61 104 61 225 0 185-131.5 316.5T896 1280t-316.5-131.5T448 832q0-121 61-225-229 117-381 353 133 205 333.5 326.5T896 1408t434.5-121.5T1664 960zM944 576q0-20-14-34t-34-14q-125 0-214.5 89.5T592 832q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm848 384q0 34-20 69-140 230-376.5 368.5T896 1536t-499.5-139T20 1029Q0 994 0 960t20-69q140-229 376.5-368T896 384t499.5 139T1772 891q20 35 20 69z"></path></svg>';
                }
            }
        </script>
    </body>
</html>
