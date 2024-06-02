<div id="dropdown9" class="absolute hidden mt-3 -ml-[14px] z-30">
    <div class="flex flex-col items-center w-[290px] justify-start ">
        <div
            class="flex flex-col items-center rounded-[34px] justify-center h-full basis-full lg:basis-1/2 bg-[#F0F0F0] pt-12 pb-4 px-8 lg:px-28">
            <h2 class="montserrat-bold text-[19px] mb-8">Register an Account</h2>
            <form method="POST" action="{{ route('register') }}" class="w-full flex flex-col items-center">
                @csrf
                {{-- //border-[#FFEEE7] --}}
                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8">
                    <span>
                        <svg width="27" height="25" viewBox="0 0 27 25" fill="none"
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
                    <div class="w-full">
                        <input type="name" id="name" name="name" placeholder="Name"
                            class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                            required>
                        @error('name')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8">
                    <span>
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="27" height="27" fill="url(#pattern0_563_849)" />
                            <defs>
                                <pattern id="pattern0_563_849" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_849" transform="scale(0.0104167)" />
                                </pattern>
                                <image id="image0_563_849" width="96" height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAD7ElEQVR4nO2c24tOURjGnxmMs3HMsUFOSSSFFEq5UEYuRPkHxJALpfkX3LoSSeLOjWJQJFJSkpQoppkcyvkwzDiMMV5tvaSpmfnWYe/17q/nV8/d9+213udde+1377X2BgghhBBCCCGEEEIIIYQQQgZmNoD9AC4BaAXQBUCqXF0AHmvMWewNqYw/AaDHgCGSWJkHx4tMxBYAHw0ELsb0CcC2vM3fB+CXgWDFqDJvmvIyfweAXgNBinH15nEmTOO0A5ckdACYHjMBpw2MLCmZTsYyfyqAHwYCkhJWR9nMEcxBA8FISXUgRgLOGQhESqqzMRLwxEAgUlK1x0jAGgA3DAQjJdNtABsQkY0A7hsITIzrEYDtAGqQA0MB7ALwwkCgYkxvATQDqEMBjNLGOgwELgaejh4CMA4JmKSNfzNghBSs7N7oqN4nJadBO/PTgDFSwAO3MwDmF2XuaIffrgBw2YBJkpMua4x5eNcvPheXrGK6Y8AwiaSs+mv0LFaC8S2vavT3rQYMFE89VSNrA8r1YEJvMIZpEC8NGCoV6p2e9cMj3LAG018nrwBY7jgfNuvSnRgvKesd4lqsF+X+jhnMYKs/WeNzHY43WYP8bsDwviWlyyLKrAorv2AqCaBbOzPFcWfFKQNrzOcBLHDo9wQdQF8rPH4wLsF80GlmpMPxVwK4msD4mwDWOvSzTq9lbxzbCcYnuOfa2SGO1cPdAox/oNVZpdTq79s92wsmJNiHnsG25WD8M89BcS+w3WBiBH8LwDqP0/11hLbf67Q4wqH9VQCuRYo9mJijMCtdlzq0PUbN++zR1he9WI53aG+hVnUxCwNTCfi7W8C15Jup/6lkL+rf0niOR2ncnUO8wcTuUN8RWu/Ql0WDjNDsDFtm7OYwGCnotn+EQ59WA7je5xqz3uPxyKsC4gtGClIbgJ2Oa6lbVZVSo23kUWWVPgHi+ejX+iPyYCSRrjgufvTHkkEeljEBGHz5b16Jl0mDkZItgE8ytlGgKhIgqk41d2yJtspUVQJE9UJfBZqoajK8WawqEyAlEhMAJiD5KBSeAemNEE5B6c2QBOI1AExA8lEoPAPSGyGcgtKbIQnEawCYgOSjUHgGpDdCOAWlN0MSKBifPTkU/niQ7bYIJnszhobCe2tmMBeZAPgOwJYYCdjLBMA3AbtjJCB7E4Sfp4Sz+T26pTIKx3gWwDUBRxCRGayG4GJ+R6zPlf3PJgN7bKQE6s1pZ9+/D7fy26EY0PysaMmVRuPv+krCaWczCiJ7oeEwqyP4vnASjazM2gPggt71dRoYiZKzOjXWFo09WqlJCCGEEEIIIYQQQgghhBBUJb8BOAVQRaxuZE0AAAAASUVORK5CYII=" />
                            </defs>
                        </svg>
                    </span>
                    <div class="w-full">
                        <input type="email" id="email" name="email" placeholder="Email Address"
                            class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                            required>
                        @error('email')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror
                    </div>
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
                @error('password')
                    <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                @enderror

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
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Confirm Password"
                        class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                        required>
                    <span id="confirm_eyeIcon" class="absolute right-4 cursor-pointer"
                        onclick="toggleConfirmPassword()">
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
                @error('confirm_password')
                    <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                @enderror

                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8">
                    <span>
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="27" height="27" fill="url(#pattern0_563_866)" />
                            <defs>
                                <pattern id="pattern0_563_866" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_866" transform="scale(0.0104167)" />
                                </pattern>
                                <image id="image0_563_866" width="96" height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAD9klEQVR4nO2cO2gUQRjHf/GR+CKKRjGi2IiFYmGjlYWCoFhYiKhYitiIwQeInYWdxgeIjbFRRLHQQojGxkIrsVKEIIiKEUk0GgslkejIwBwcm7vLPmb2Zua+H3zN7TL73+9/u/fN3MyAIAiCIAiCIAiCIAiCIAiCIAhCecwHLgJfTfSaz3xFa7sMfAdGjfZ2AmUjMAioRAyaY6HovUBgtAE9wHiNm6nEuDlHn+u7Xv3kBkMX8LBB4pPxBFgegN4g2Ap8zpD8SgwDOzzX6zWzgLPA3xzJVyb+AVdK+sHLo9dbVgPPCyReJeIFsMZDvV6yx5RrynL8BA56ptcr5prXhXIcN4EFnuj1hvXA6xKSryz1GWzpDaK2dxV/zI/mjCbqDaq2V44ibZ/Bhd7ganvlKKbrM7jSG2RtrxxFrT6Da71B1/bKUVT6DGXoLY39wJgHyVUpY6wkvc7Rj/MNDxKqPA3nlNGxUgGHc0ZzCrsOLKxqpxM470HCgjMgr7Dq5FdzyozpNDtx0RuQlUVAnwcJbVkDKiY0O6EtbUCbBwltaQM2eZDQljRgqRmh/OJBQlvGgNnAbuABMOFBIqMzoLtOe93AJWAkY3t6WOEEsAQ43OC8++aJmo6VQH/MBhyt097LnO1tr2pjZoPzVmS4t1UxGzBS55v4I2d7Oum2idoAHfdqtHcopwkukv8odgN07E1xjc4U40S22AUMWbivYAyo9yqqRSMTbPHJYvKDMEDH7ZTX6mzQhv53ywa2J4w5x4ZIXeenYV6DNvrN8aIcb0UD0grdOU0bb4B1Fu5Jr24RAxIsq7MKJRm/jFFFWCwGTJ2z8zFDUj7Q/Po/ildQh1lnlWfOTrPr/+AMaE+0uwF4VaA9PZaTFj139Crw2+L9BGfAvqpknLQwObY/gwnbHCQ+OAMmgMfAWwdJmASempHSWuhR1JY3QJUQ5+oYcE0MKCee1TFgoOqcO2aaOqZjd6TgxF3nqIBiHJhT4x7eVZ1Ta1xKTyITA7BjwpZEctvNb0Sjb6zuXYsB2DHgTCK5a1O8MrpyXktP23SOCiwGEvoPJI4nX0H6lXUr57X0mJIYwNRVMj1me5nNwPvE8bvGBF2yHiuwbKmvrO1qYllIoSzq1YtVSiOWpUTKot5SKXsx3aQHiU6jN1gDhlMsJ7X5p7lrvc6JZUG1cqjXKbFsKaAyhL7m6Yx6nRHLphqqJL3WiWVbGVWiXqvEsrGSaoJeK8SytZhqkt7C+Ly53mSotX0WfN9ecijE2j4LvtfKXYFtCJuZbxFsMaw801t4HqV3tXKgm4KnosMsqhs1c/1D2Ga+12gNQa8gCIIgCIIgCIIgCIIgCIIgCMTFfwDc2gEMx/fpAAAAAElFTkSuQmCC" />
                            </defs>
                        </svg>
                    </span>
                    <div class="w-full">
                        <select type="select" id="country" name="country" placeholder="Country"
                            class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                            required>
                            <option value="nigeria">Nigeria</option>
                            <option value="kenya">Kenya</option>
                            <option value="ghana">Ghana </option>
                        </select>
                        @error('country')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8">
                    <span>
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="27" height="27" fill="url(#pattern0_563_852)" />
                            <defs>
                                <pattern id="pattern0_563_852" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_852" transform="scale(0.0104167)" />
                                </pattern>
                                <image id="image0_563_852" width="96" height="96"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </span>
                    <div class="w-full">
                        <input type="text" id="whatsapp_number" name="whatsapp_number"
                            placeholder="WhatsApp Number"
                            class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                            required>
                        @error('whatsapp_number')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8">
                    <span>
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="27" height="27" fill="url(#pattern0_563_870)" />
                            <defs>
                                <pattern id="pattern0_563_870" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_870" transform="scale(0.0104167)" />
                                </pattern>
                                <image id="image0_563_870" width="96" height="96"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </span>
                    <div class="w-full">
                        <input type="where_did_you_hear" id="where_did_you_hear" name="where_did_you_hear"
                            placeholder="Where Did You Hear About Us?"
                            class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px]" required>
                        @error('where_did_you_hear')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit"
                    class="bg-[#F48857] text-white px-4 rounded-full w-full text-center font-extrabold max-w-[419px] py-[10px] lg:mb-12">Register</button>

                <div class="text-center pt-2 mb-4">
                    <p class="text-black text-[12px] montserrat-regular">Already have an account? </p>

                </div>
                <a href="{{ route('login') }}"
                    class="bg-[#FFEEE7] text-white px-4 rounded-full w-full text-center font-extrabold max-w-[419px] py-[10px] lg:mb-12">Login</a>
            </form>
        </div>
    </div>
</div>