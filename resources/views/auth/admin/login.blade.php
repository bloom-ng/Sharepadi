<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/font.css') }}" />

    <!-- Include Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <!-- Include Mont Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    <title>SharePadi - Login</title>
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
                onClick: function() {}
            }).showToast();
        </script>
    @endif
    @if (session('error'))
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
                onClick: function() {}
            }).showToast();
        </script>
    @endif
    <div class="hidden md:block">
        <div class="bg-white text-lg text-black flex flex-row justify-between gap-12 py-6 px-20">
            <div>
                <a href="">
                    <img class="w-44" src="/images/sharepadi-rebrand-02.png" alt="" />
                </a>
            </div>
            <div class="flex justify-between gap-12 montserrat-medium">
                <a href="#">Contact Us</a>
                {{-- <a href="/login">Login</a>
                <a href="#" class="text-[#F0F0F0] bg-[#F48857] px-10 py-2 -mt-2 rounded-full">Register</a> --}}
            </div>
        </div>
    </div>

    <nav class="block md:hidden absolute top-0 left-0 right-0 bg-white z-30">
        <section class="container mx-auto px-7 py-8 flex justify-between">
            <a href="/">
                <div class="logo w-28">
                    <img src="/images/sharepadi-rebrand-02.png" alt="" />
                </div>
            </a>

            <div class="relative" id="dropdownButton2">
                <div onclick="toggleDropdown2()" class="flex">
                    <a href=""><img src="/images/dark-menu.svg" alt="" /></a>
                </div>
                <div id="dropdown2" class="text-black hidden absolute z-20 left-0 top-0">
                    <ul class="bg-white flex flex-col gap-2">
                        <li>
                            <a class="" href="#">Learn</a>
                        </li>
                        <li>
                            <a class="" href="#">For Business</a>
                        </li>
                        <li>
                            <a class="" href="#">Sign In</a>
                        </li>
                        <li>
                            <a class="" href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </nav>

    <div class="flex items-center justify-center w-screen h-screen bg-[#F0F0F0]">
        <div
            class="flex flex-col items-center justify-center px-8 bg-white lg:px-28 shadow rounded-lg py-8 border border-[#FFEEE7] border-[2px]">
            <h2 class="montserrat-bold text-[22px] md:text-[32px] mb-8">Login to Your Account</h2>
            <form method="POST" action="{{ route('admin.login') }}" class="w-full flex flex-col items-center">
                @csrf
                {{-- //border-[#FFEEE7] --}}
                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8">
                    <span><svg width="27" height="25" viewBox="0 0 27 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="27" height="25" fill="url(#pattern0_1695_41)" />
                            <defs>
                                <pattern id="pattern0_1695_41" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_1695_41"
                                        transform="matrix(0.00964506 0 0 0.0104167 0.037037 0)" />
                                </pattern>
                                <image id="image0_1695_41" width="96" height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAADkElEQVR4nO2dzUtUURiHHzTKoKDaZQV9QIs+doXWqtrVqhCEiqD+hj4kKQiMWhSRhpDVX9B3bvuAaNOHixKpFgWaLdIswQyzojcOvpIJU6Pj3PPOnPeBB2R0vDO/M/fec895zx1wHMdxHMdxHMexSQVQCzQCN4Au4DPwXf2sj10HjgI1+hynQJYAp4BeQKboO31utbfC1FkEtALfphH8ZMP/uAAs9IbIj3qgfwaCn2wfUOeNkJtZ+qmXItsCVHpD/M1coD2D8Me9BVR5I4xRqT0bydh23euSpzVC+OM2p55+fcTwx61LuavZb6AB+lLtorYaCH9izygpFgMjBoKfeLGW1BXzaQOhyyRPkggVOk4jxuxJZQCv1kDYksONJECjgaAlhw0kwE0DQUsOr5EAXQaClhx2kgCfDAQtOfxIAowaCFr+cT1Q9ngDRMYPQZHxk3BkYky+SJ5eJQEsX4gdIQFqDAQtOdxAAlgdjOtOZTAOrVgTYzaRENYmZEZSm5BBywXFiOdJkIU6IR47/A/AAhKlLnL4v4CdJE5LxAY4F/vNWylNvB4h/DtepPuHKi2YzSr8MBwyZ8L2Hcb2hOYMjvnhsOPl6f85MfcVqbezyz/q+XdRW2boYm1E+/nJdjULoVor1nqmObbTpFfdToFUaNFUg5aOdOrM2qgafn6hvzuio5rJDKw5juM4juM4juMEtgKXgFfAcIShZpkhh/U9tAFbSqFpVwH3DQQnRfIusAKjbAYGDIQkGawh2IQxlhtZ9S4ZOaB7uxnuGQhFMvYBRthmIAyJpIkT82UDQUgkL2KA1waCkEi+xABfDAQhkRzCAJK40ZHEjc4PAyFIJMN7j46FCmeJZKg1ik6ngSAkks8xwBUDQUgkwyhpdPYZCEIiuRcDzNP+sCTmEDAfI7QZCEQyNtx209QXLZTyzJdM0a/AMoxx3EAwkpHHMEi4E/kjA+FIkX1o+a7rS4H3BkKSItmrh1vTrNYrRCnDueA1lAjrjd6QQ6ZpWCCyjhJc3fLMQHhSoE9LeZVNOFmdAH4aCFKmsaIyrNqcTRkQaoY6DIQqedqhr7msCGu2DgBvDQQsOXwD7C/39WXhsLQHeGIg8HEfA7tTXMC9Fjgbaa8I2zyjr8FhrJt3WG+iUayvMryt2/DQ82AlsAM4pAVQ7Xqo6Navrx2cEO6gPtatf9OuzzkIbLdc0ew4juM4juM4DsnxGx79oWD887scAAAAAElFTkSuQmCC" />
                            </defs>
                        </svg>
                    </span>
                    <input type="email" id="email" name="email" placeholder="Email Address"
                        class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                        required>

                </div>
                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8 relative">
                    <span>
                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="27" height="25.2" fill="url(#pattern0_563_839)" />
                            <defs>
                                <pattern id="pattern0_563_839" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_839"
                                        transform="matrix(0.00972222 0 0 0.0104167 0.0333333 0)" />
                                </pattern>
                                <image id="image0_563_839" width="96" height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAFSklEQVR4nO2dS4wVRRSGP3FiHBghKKKS+MABZ4cGfLAjLjFOfIAT0OhKXaoIBmVGY4gYNS4UYmKMJsYIIkLALWp04ULE+EAWKtEoJOrwijvnGpkyFQ8J4lR339tV1ae7+kv+zc3t2/85dbu7uupUN7S0tOhnGrAUeALYBRwETgJ/iU7KZzvlOzfJNi0lmQdsAo4Apksdlm3tb7R0yYXAFmCih8SfLfsbm4HZbSsUYyVw1EPiz9Y4sKJtBDd98q83gfUycG7bEP/lfGBPhOSf1m7ZZwv//vOLJH8S+BwYBZYBQ8AM0ZB8NirfmSzYCO2RQP5p5xSwFRjs4u+6ANhWoCFeSv0QWJmToO+BxSV+/3rgh5x93EmizJaeiSsxez11He1vfJDTO0qyi7olJ/n22uCLvpxGsD2jpLgU+DPjtBPiHzk743Q0kdod86aMC+7igPu9IePC/AyJME3GacwUejvC/rc79v1LKgN4SzP6+YMR9r8w4yiwR0jj2eAIfl9ED184PKwnAXY5gt8Q0cOTDg87SICDjuCXRfRws8PDARLghCP4BRE9XOPwcIwE6DiCH4joYSDjfqDxuO5GU/WRbOBGiY9kAzdKfCQbuFHiI9nAjRIfyQZulPhINnCjxEeygRslPtQHPhdYLgNlW2XQ7pBMJU6IxuWzfTKkvV62mevRR2MoEvi1wJgk9FTGNnmy234m5SqLevDRSFyBnwfcBXxaIuF5ssPQDwL9bQP8PznjARPfzb4aj1GuxlN1gk3bANUn2aR6BDxcsHDWVCTr7WkaiK1CfkVBgk1BveG5Mq/y5L+nIKmmS73blPL1zQqSaXrUq9ScpxQk0ZSUvSOvJcuVX3BNQdkYhqkZlwC/K0ie8SS7avMyasI5wIcKkmY8a6/Epp57FSTLBNLdKKdfyrxNQ3UEmI5ixhQkyQSWnVtQyfSMuk9f6sgCi9VTrBNeLTdPrtJHXzouR7o6Hggc+E7g6gI+BjNK4H3pfhRyIFCwfwNre/CzruR0Zpa+Rhk3Bvy3rS3h67GAvpagiI0BTztl2R3Im6ph668CBNjxtGhvfqALs53gV8G8QGM+2z163BHA36QsOK+c4UCH+CqPHu8J5PEWFDAaKLiFHj0OBfL4OApwrTwvq4EIa8LKypZKVo5r0XNZ9Xu+Sw/h0T6dq3IOBQpuvkePg4E82qevVE6oksIRjx5XBfJoY68cHw9XNVPoHY8eQ1VlqFhX3AkY3JWKb8TUNMDxQMEZGdXUOhSh5tEGPwcM0ABrSnhbF9jbTzS4G2rOuOV/tMfkhy6LUdEN3RY4SCPaU3BCxn7n/UieYjxiTVX1W6eAn9BTkuqq5lZEDNgU8BPTyx0o4OLIJYh5xPJhpzvn0PD5YKO4Ab5EES8m2ADPoYglCTbAIpQR6zSURwwP36KQNZGCvyDDw6xIHh5CIQOBx4WM6PYMDyOR1grYckiVuJ5I61PfOR5vf1GPL3zrVvZNfWqZFWllzGF5sMdM0Uik5P+acwpUwX0REmEqks9SmWDYZTyfKEiW8ayPqBGXR7ogm0iyb2u9ippxa4OWqd5Gw94VUydtpMbY68HrCpJoetRbdVmamkVf4IlxE7AgoFFPTHlNQVJNQb3ZpOSfxh7Kzyq/ME/KOb/2p5289QShl7OaHvRHSm/ctn3qjxUk/cybrCtIkOFIYzgu/SZDJ40+5eQxU1bZHIuY+KMyqql+YC0mM4BHAs+sfSOTKWrH87VwHfCCLH8t+/BuW73wvMY53LowRwqgxmRN1n7gR+lJdUQn5LP9Ui44JtvYSZqWlha08g+a29VzLOm7pwAAAABJRU5ErkJggg==" />
                            </defs>
                        </svg>
                    </span>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                        required>
                    <span id="eyeIcon" class="absolute right-4 cursor-pointer" onclick="togglePassword()">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect y="0.933594" width="25" height="23.3333" fill="url(#pattern0_563_841)" />
                            <defs>
                                <pattern id="pattern0_563_841" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_841"
                                        transform="matrix(0.00972222 0 0 0.0104167 0.0333333 0)" />
                                </pattern>
                                <image id="image0_563_841" width="96" height="96"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>

                    </span>

                </div>
                <button type="submit"
                    class="bg-[#F48857] text-white px-4 rounded-full w-full text-center font-extrabold max-w-[419px] py-[19px] lg:mb-12">Login</button>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // eyeIcon.innerHTML =
                //     '<svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" id="eye"><path d="M1664 960q-152-236-381-353 61 104 61 225 0 185-131.5 316.5T896 1280t-316.5-131.5T448 832q0-121 61-225-229 117-381 353 133 205 333.5 326.5T896 1408t434.5-121.5T1664 960zM944 576q0-20-14-34t-34-14q-125 0-214.5 89.5T592 832q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm848 384q0 34-20 69-140 230-376.5 368.5T896 1536t-499.5-139T20 1029Q0 994 0 960t20-69q140-229 376.5-368T896 384t499.5 139T1772 891q20 35 20 69z"></path></svg>';
            } else {
                passwordInput.type = 'password';
                // eyeIcon.innerHTML =
                //     '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="25" id="eye"><path d="M1664 960q-152-236-381-353 61 104 61 225 0 185-131.5 316.5T896 1280t-316.5-131.5T448 832q0-121 61-225-229 117-381 353 133 205 333.5 326.5T896 1408t434.5-121.5T1664 960zM944 576q0-20-14-34t-34-14q-125 0-214.5 89.5T592 832q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm848 384q0 34-20 69-140 230-376.5 368.5T896 1536t-499.5-139T20 1029Q0 994 0 960t20-69q140-229 376.5-368T896 384t499.5 139T1772 891q20 35 20 69z"></path></svg>';
            }
        }
    </script>

</body>

</html>
