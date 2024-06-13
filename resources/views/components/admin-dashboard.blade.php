<!DOCTYPE html>
<html lang="en">
{{-- {{$page == "newsletters" ? "active-nav-link" : ""}} --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <link rel="icon" type="image/png" href="/images/favicon.png" />

    <title>SharePadi - Admin Dashboard</title>


    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #F0F0F0;
        }

        .active-nav-link {
            background: #FFEEE7;
        }

        /*
        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        } */
    </style>
</head>

<body class="font-family-karla flex">

    <aside class="bg-sidebar relative h-screen w-64 hidden sm:block">
        <div class="p-6 bg-[#F48857]">
            <a href="index.html" class="">
                <img src="/images/Sharepadi_White.png" alt="SharePadi_logo">
            </a>
        </div>
        <nav class="text-black text-base font-semibold pt-3">
            <a href="/admin/dashboard"
                class="flex items-center {{ $page == 'dashboard' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <span class="mr-3">
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="52" height="52" fill="url(#pattern0_563_556)" />
                        <defs>
                            <pattern id="pattern0_563_556" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_563_556" transform="scale(0.0104167)" />
                            </pattern>
                            <image id="image0_563_556" width="96" height="96"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACoElEQVR4nO2cW24TQRBFvZWIwCogHxCW4O6woXSZLIDnVgJhERD2kIc8UyX506ixCD8GhFIzfTt1j9S/0a0+025bVZnFghBCCCGEEEIIIYSQ/0Dl5KVK/mAlf9eSzCRv77P0599Il1ryey3p+KHlcmM4zU9M8pf7Fmb/WiVfDKtXj3vP5cpY0pFJup28SLkr9mZc5We95nJl94TNWKT8LnZ9ujzsLZc7VvKn2YuUu2IvesvlSr3YmhUpu6Wr/KKXXP4CSvrYvFBJ73rJ5U79Ste6UJN02UsufwGStX2hWXvJNYWALcJadJKLAoQCeAI8aX3EjR9B7TffeAdQgDW8hAG+7qUhrgCEHzwlfQsroDYjWhepkt8EFpCOWxep5eR5WAG7YtN5uyLT5/2ZAgnYnC0PrKQrpMaHRRJQqW24uiEzFnc9yvLpn/KEE1CpT+M8Xah0vn6dH/0tS0gBv6idoNqMqF8PnX4nqEn+qiW/3Xfh7iO0AAQMYPMpQCiAJyAqFvoSBpjBtIgCkGYwLZoAtBlMiyQAcQbTIglAnMG0KAJQZzAtjADQGUyLIgB4NnRsnqvkcQ4BkIUaaK/aX0DrImW3eulVBxKQIHvVYQSg9qrdQRawAexVhxKA2Kt2B10AWq/anR4EIPWq3elJwIOk9cYbBbTffOMJoIBm9HQCFKBX7U4PAgagXrU76AJGsF51KAEDYK86lAAD7FWHEaCgveo4AgpmrzqMAAv0viBMAYLwD+R8X9C2tYTIJ2CLsChAKIAnYEpaP2HGj6D2m2/B7wDU9wUpYi5/AajvCyqYudxBncFU0FwTCMCcwVTQXJOAOoNpoLncQZ3B3IDmmgTUGcwRNNckoM5grkFzTQbqDKaC5iKEEEIIIYQQQgghi5D8AFw9eIA5hOpGAAAAAElFTkSuQmCC" />
                        </defs>
                    </svg>
                </span>
                Dashboard
            </a>
            <a href="/admin/campaigns"
                class="flex items-center {{ $page == 'campaigns' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <span class="mr-3">
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="52" height="52" fill="url(#pattern0_563_442)" />
                        <defs>
                            <pattern id="pattern0_563_442" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_563_442" transform="scale(0.0104167)" />
                            </pattern>
                            <image id="image0_563_442" width="96" height="96"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAEeUlEQVR4nO2dS4gcZRDHP42PqBfRHIMi3nziCxQS9aIEDOilq1oTFA8GRTDiReLBQchO1WYT1qghRCI+8CBevYm5qAdPPg4KoqIRgyDRTKZqdkk0afkmGxlnN9ndmZ6ub6brB99tl63+/7vqe2x3dQiO4ziO4ziO4ziO4ziLKA5su1in4XZleDKOuWZ2T/FhtmbxTzqlEQXWJj4ojG8pw1/KWPQOIfxdGJ4vGvddVN5frTlFo3Fhm7MNSrA3Ctwv+lJDCD4q9mSXWcc+1gjnNwoDC8GRlYi+yASGt62vYezoTOd3CsGMMB4eRPT+0Sa41/qakkd25bcIw5QS/FiG6H2l6D3r60uS+ZnsOiV8UQm+K1v0vjL0k/W1JkNrF16vhC8pwTejFL0vA06GOtPhLeuFcLsyfi6Ep6sSvneEutHe/ei6DuE2S9FrZ0BrT3aVEjwe19/C+Le16LUw4Njsw1f+JzrBSWuha2OAULZ14U4/YS1uLQ3QBEQdawOKma1XzM08dm2Hsju0mW+SadginD8nDK8o4T5l+EAZDp3r960FTdqAeAAlnD8gjC/0ihnX3sL4mzDMDxu4JiBqcgZ019uM+5WxNerANQFRkzJAKH9WGaWqwDUBUZMwIJ6TK8OrVQeuCYiahAHK0LAIXBMQ1dwAIbxfGE65AWhkAMMXVneO1j0D4t1vGbjW3YBRTrzqBiyPMHzpBqBlBuAfbgAazgEjXv2ozwHLZoDp5KUJTKyrGfH5olIzwA3AVRoQKwa8UTSeWOsGsGE2EHxS7N10qWcAW5qA+9wAtpwP4JRwdrPPAWxail53A9jQAMZv3QA2LEOEc24AWxoA6gawl6Bl75QwITvhJcZrngFsuAydgpvcAB7TJaifBeEw4n9cNLJLhjbAj6Nx1WUn1v1SzoEWMsD/IcMrN6A9ld0QykQIv6qiXoZz3wA29bvk6xgYJZx1A9DOAH8sBW0zIBJfgPMShHYGtKdxoxD+43MA2hgQUcKX3QC0M6AowgWxsYWvgtDGgLN0mtnTStj2ZSjaGBCZ4+yaeM6hDMd9H4DVG3CWorH58jPvDnTfF/ONGBu9pqoEt7oBWH0G/K93g2dAYWZARBg7ozhDEW9VsDKU4ftRHmId82YdyxpwqKpTxJa3q1mMEL5TlQG9HG8+crU3bOoaADstDOil1i3LujvkhAJvxaZ9DDuE8etaNO1Tzh9KyQCLtpWxF2mwYtjNWKi6cSvjD6VnAOO7wYo4GY6DAUu2Lib4pQwDYtPvYMkwm7Ew7s27CQ5aX8NQm7GQCGPdvn6YzVhI9AMO3ZZsBAeV8M8lhD/SZnwmmQ84DLMZC4kTRVbKb+s2HSTM4udMYraElBh0MyaEp61jnwiUs6cGzICj1rFPBJ0m3DWQAQSfWsc+EcSaKAw/D1CCtlvHPjGc+c7WKsRnPJzEEm5SiM8PKeH7KxMf5jsMd1vHPJlfnSOcPd+RsDD86uJXcEAnhG/Gg6+FPtJHlfGzWPPjIy3BcRzHcRzHcRzHcZxQL/4FTO+Is5sl4I4AAAAASUVORK5CYII=" />
                        </defs>
                    </svg>
                </span>
                Campaigns
            </a>
            <!-- <a href="/admin/wallet"
                class="flex items-center {{ $page == 'wallet' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <span class="mr-3">
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="52" height="52" fill="url(#pattern0_563_457)" />
                        <defs>
                            <pattern id="pattern0_563_457" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_563_457" transform="scale(0.0104167)" />
                            </pattern>
                            <image id="image0_563_457" width="96" height="96"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAGkElEQVR4nO1d36tURRyfwn4S/bJAs57qPwh6KbpEYmaWQp3vd+s+VCQGpUUv3Qhkg677nTVvdssgqafeLKg3QQLJfOjJfmgEahqJBOJV153vRoneie/Zm15jd+/ee+acmbM7H/jCZffumZnv55w5M/P5zneUioiIiIiIiIiIiIiICAjNzcmdXMMVhmAjE37MGr9hjQeMhqOs4YzR+I9Y+2/5DA+0/we2p7+p4Qq5hu92lAZ2IrmhRfAkE25jgp8N4TRrtFlMrmE0/pRes46rbfX56323Mzi0KLmfCSZZ41RWh/dhDUPwuSFYbq26Sg0r7OTK61oaXmaC3wpwejc70iJcL3VRw9TNGKq8YTSe8Oj4K7spjScM4etSNzXIkD7YEB7z7XDuSgQc5RqsUoOGv97Fewzh174dzP0T8VVLj96tBgGteuUpJjzt26k8f2s0deUZVVbY6sgio0G7GEqyrydB6k4waavJtapMaNBzt7HGfb4dyO5s79lta25VZQCPjy5NJz7+nWadGsEvwb8XGrXkPqPhd+/O0vmYtE3aqEJEq165a5Cdz5dJOC6jOhUSzujkFkP4o2/ncHF2UN5zKgTICGHAXri2LyP81u5Yf41v/yvW8IF3Z2g/ZgjeC2FpYXp4CcDpFuEaL86XF5EIIb6dwP5tqjWeLCucgDKt7XD+9kWhzudaZWUAjbZBWVGrqO31fHdLyqat6b4p84jGRHJ7qhUQnHftoNnliDHhWPszR2UQHC5E7hQHOXUO4dj/y2DCF5zfoZ3LGXNM8oZcnS/SnXMla3x0aaeyjMZP8y6HtyRL3BIAx3NdOU01XMd3puoCeZwN4f68y3HdHiZYl4vzJYIgDwFd9UBjC94rwkjJCDicS7RFs56MOK+s7k2AQOKEXEz2CiNAo23q5CHnBBiCz3wQIJApf5kIMBp2KJeQ/pgJz/oiwFZHFjHBd2UhQLpNpyEuabhgPhW1fddhPFnGBCdLQoDbiVkaV+mZAIGpwyOG8EIpCNC4VbmCBMqGQICANW4qAwFGww/KBSS8O88lZ9UFtlq9utvnhmBXCQi4eK62dnFmAljDY3lVkns7ZlO370QOnO96VNEEpCQQLM9MgNGV13wQYDRclA0W3b5v6eQBQ/h32ARUXs1MwMzOFB9PgJVRTy+xI90FEzABrPHD7AS0twX5IUCntq+X+M2EO0MlwGjY7YKAg54JsL3E75PV5CYm+DVEAmT0mJkAV8FWswURFShajoUaGShkrpSzfVsdBJFQ4UyoITiVuTLOZLsuwkuIcCXUyCgtGAJC7no6rjuFQsBQdkEa3wqoC3L4EiYcC/lJaAX6EvY+DOXOd9fhqerozf2KOAsux/cwNICJmO3eQNzZ7fcyeZsdtV3iiRhsD5YAnU7SNna9xpZkidHwp8cnYDIzAfNZb/FEwPnmZnhwLhHHBwHNOrySmQBZkQyZAJ4JiGpuffaOhSxt59k2U8dHMxMgDfMhyPB8G0uwq5eIU1pBxpckyQu7Xtc73XE5fdwQuD+z4y9XEt4vAwFmDhGnWAIcbl+SrUhlIID7EHGKIoA1Pl7qwCzOdPfh9/1GKefjfDjjPAmU83DxHAngeXQBebTJEH6iXKNJ8HC5CMDpJsHTPgjoNS/JFp6u8UhZCOC2NSTEvVgC4FBuyQAlwV3JCLAyhLbV1TcWRwC+pPKCLHAZjX+4rHCrw/K0K0HkP5P3V6f2uC8n5y1KAskumPvmOe1IELnC4MW8y3ESiDUXJO7d5VYlM0uoyWX76CXn4AUmfFu2wuZTDhwqLP9o3vGiXE5zN/HqB5LaMYBG2yCshzCUb7KOcqajtG6dD6e86dysK0/EdDXoJ13NJRIIJrzfhdqPSV5U5Rsz4vfe4et6cE8QKcsEEh4yZEn7DgSXyDVNWxlwZnR2ZGkbQ41zTRO3DjAJhvDYXIt73pHG4gxmd3TQS264hUD6R8mrGYDTrBMj3CPJaVXp0tcTvpMK5b4dqDOmrw9ltJNB0C/idCTr2KZkoqkGATOJNr4MwKm2LyPcGXIY/YIhcZr97Ghkf3ZEUnKqQcZM4r8Noh6xf4enJiqfiCnDdZ6YZF0nWCcbLfw5Hw6Jhlu6M2JyO8qQ4FQBjo9HGfaMwKvBKllhlcmciyGsXENy90gCJVGthqqbyYpztbWLJeWL9M9M8JFs+ZEDgtIT7whPXzrONv0bjs58t1uSZMjmCPmtsxDxiIiIiIiIiIiIiIgI5Qb/AivT/nslrjXtAAAAAElFTkSuQmCC" />
                        </defs>
                    </svg>

                </span>
                Add Funds
            </a> -->
            <a href="/admin/tutorials"
                class="flex items-center {{ $page == 'tutorials' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <span class="mr-3">
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="52" height="52" fill="url(#pattern0_563_467)" />
                        <defs>
                            <pattern id="pattern0_563_467" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_563_467" transform="scale(0.0104167)" />
                            </pattern>
                            <image id="image0_563_467" width="96" height="96"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>

                </span>
                Tutorials
            </a>
            <a href="/admin/admins"
                class="flex items-center {{ $page == 'admins' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <span class="mr-3">
                    <i class="fa fa-user text-[#F48857] text-5xl mr-2" aria-hidden="true"></i>
                </span>
                Admins
            </a>
            <a href="/admin/users"
                class="flex items-center {{ $page == 'users' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <span class="mr-3">
                    <i class="fa fa-user text-[#F48857] text-5xl mr-2" aria-hidden="true"></i>
                </span>
                Users
            </a>
            <a href="/admin/settings"
                class="flex items-center {{ $page == 'settings' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <span class="mr-3">
                    <svg width="50" height="52" viewBox="0 0 50 52" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M44.4409 28.966C43.514 28.2861 42.9602 27.194 42.9602 26.0435C42.9602 24.893 43.514 23.8009 44.4397 23.1223L48.722 19.9827C49.4045 19.4809 49.6866 18.5982 49.4201 17.7935C48.3177 14.481 46.5743 11.4597 44.2368 8.81152C43.6739 8.1771 42.7665 7.9769 41.9904 8.31751L37.1685 10.4379C36.1181 10.9007 34.8948 10.8344 33.8977 10.2585C32.9018 9.68384 32.2336 8.65942 32.1075 7.51669L31.5277 2.22294C31.4354 1.38052 30.8088 0.694098 29.9794 0.523793C26.6032 -0.166526 23.0554 -0.178226 19.6194 0.510793C18.7847 0.678498 18.1568 1.36492 18.0645 2.21124L17.4899 7.47118C17.3638 8.61522 16.6956 9.63964 15.6972 10.2143C14.7013 10.7889 13.4819 10.8578 12.4276 10.3937L7.57974 8.26161C6.81012 7.921 5.90009 8.1186 5.33718 8.75172C2.99191 11.3895 1.24077 14.4069 0.126635 17.7168C-0.143773 18.5202 0.137035 19.4081 0.822154 19.9112L5.07717 23.0313C6.00539 23.7125 6.55921 24.8046 6.55921 25.9551C6.55921 27.1056 6.0054 28.1976 5.07977 28.8763L0.797453 32.0159C0.114934 32.5177 -0.167173 33.4004 0.099334 34.2051C1.20176 37.5176 2.94511 40.5389 5.28258 43.1871C5.84549 43.8228 6.75552 44.0243 7.52904 43.6811L12.3509 41.5607C13.4013 41.0979 14.6233 41.1642 15.6218 41.7401C16.6176 42.3147 17.2858 43.3392 17.4119 44.4819L17.9917 49.7756C18.084 50.6181 18.7106 51.3045 19.5401 51.4748C21.2483 51.8232 23.0034 52 24.7597 52C26.4732 52 28.2022 51.8271 29.8987 51.4865C30.7334 51.3188 31.3613 50.6324 31.4536 49.786L32.0295 44.5261C32.1556 43.3821 32.8238 42.3576 33.8223 41.783C34.8181 41.2097 36.0388 41.1421 37.0918 41.6036L41.9397 43.7357C42.7119 44.0776 43.6193 43.88 44.1822 43.2456C46.5275 40.6078 48.2787 37.5904 49.3928 34.2805C49.6632 33.4771 49.3824 32.5892 48.6973 32.0861L44.4409 28.966ZM24.7597 35.0995C19.7338 35.0995 15.6595 31.0252 15.6595 25.9993C15.6595 20.9734 19.7338 16.899 24.7597 16.899C29.7856 16.899 33.86 20.9734 33.86 25.9993C33.86 31.0252 29.7856 35.0995 24.7597 35.0995Z"
                            fill="#F48857" />
                    </svg>
                </span>
                Settings
            </a>

            <a href="/admin/faqs"
                class="flex items-center {{ $page == 'faqs' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fa fa-question-circle text-[#F48857] text-5xl mr-2" aria-hidden="true"></i>
                Faqs
            </a>

            <a href="/admin/contacts"
                class="flex items-center {{ $page == 'contacts' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fa fa-comments text-[#F48857] text-5xl mr-2" aria-hidden="true"></i>
                Contact Us
            </a>
        </nav>
        <a href="/admin/logout"
            class="absolute w-full upgrade-btn bottom-0 active-nav-link flex items-center justify-center py-4">
            <i class="fas fa-arrow-circle-right mr-3"></i>
            Logout
        </a>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-[#F0F0F0] py-4 px-6 hidden sm:flex">
            <div class="w-1/2 text-black">
                {{ $my_date }}
            </div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen"
                    class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <!-- <a href="#" class="block px-4 py-2 account-link hover:text-white">Admins</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Users</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Settings</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a> -->
                    <a href="/admin/logout" class="block px-4 py-2 account-link hover:text-white">Logout</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="w-24 md:w-34">
                    <img src="/images/sharepadi-rebrand-02.png" alt="">
                </a>
                <button @click="isOpen = !isOpen" class="text-[#F48857] text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex' : 'hidden'" class="flex flex-col pt-4 text-[#F48857]">
                <a href="/admin/dashboard"
                    class="flex items-center {{ $page == 'dashboard' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i></i>
                    Dashboard
                </a>
                <a href="/admin/campaigns"
                    class="flex items-center {{ $page == 'campaigns' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Campaigns
                </a>
                <a href="/admin/tutorials"
                    class="flex items-center {{ $page == 'tutorials' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-align-left mr-3"></i>
                    Tutorials
                </a>
                <a href="/admin/admins"
                    class="flex items-center {{ $page == 'admins' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fa fa-user mr-3"></i>
                    Admins
                </a>
                <a href="/admin/users"
                    class="flex items-center {{ $page == 'users' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fa fa-user mr-3"></i>
                    Users
                </a>
                <a href="/admin/settings"
                    class="flex items-center {{ $page == 'settings' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Settings
                </a>
                <a href="/admin/faqs"
                    class="flex items-center {{ $page == 'faqs' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fa fa-question-circle mr-3"></i>
                    Faqs
                </a>

                <a href="/admin/contacts"
                    class="flex items-center {{ $page == 'contacts' ? 'active-nav-link' : '' }} opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fa fa-comments mr-3"></i>
                    Contact Us
                </a>
                <a href="/admin/logout" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
            </nav>
        </header>

        {{ $slot }}
        <div class="flex-grow"></div>
        <footer class="relative flex justify-between items-center w-full max-w-screen bg-[#F0F0F0] text-right p-4">
            <p>SharePadi is developed by <a href="https://bloomdigitmedia.com" class="underline text-black">BLOOM
                    DIGITAL MEDIA LTD.</a> 2024. All Rights Reserved</p>
            <div class="flex">
                <a href="https://www.instagram.com/bloom_digitalmedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    target="_blank"><img src="/images/Instagram2.svg" alt="Instagram Link" /></a>
                <a href="https://x.com/bloomdigitmedia?s=20" target="_blank"><img src="/images/TwitterX.svg"
                        alt="X Link" /></a><a href="https://www.facebook.com/bloomdigitmedia/" target="_blank"><img
                        src="/images/Facebook2.png" alt="Facebook Link" /></a>
                <a href="https://www.linkedin.com/company/bloom-digital-media-nigeria/" target="_blank"><img
                        src="/images/LinkedIn2.png" alt="LinkedIn Link" /></a>
            </div>
        </footer>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</body>

</html>
