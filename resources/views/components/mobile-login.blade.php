<div id="dropdown5" class="absolute hidden mt-3 -ml-[14px] z-30">
    <div class="flex flex-col items-center w-[290px] justify-start">
        <div
            class="flex flex-col items-center rounded-[34px] justify-center h-full lg:basis-1/2 bg-[#F0F0F0] pt-12 pb-4 px-8 lg:px-28"
        >
            <h2 class="montserrat-bold text-[19px] mb-8">
                Login to Your Account
            </h2>
            <form
                method="POST"
                action="{{ route('login') }}"
                class="w-full flex flex-col items-center"
            >
                @csrf
                {{-- //border-[#FFEEE7] --}}
                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8"
                >
                    <span
                        ><svg
                            width="27"
                            height="25"
                            viewBox="0 0 27 25"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                            <rect
                                width="27"
                                height="25"
                                fill="url(#pattern0_1695_41)"
                            />
                            <defs>
                                <pattern
                                    id="pattern0_1695_41"
                                    patternContentUnits="objectBoundingBox"
                                    width="1"
                                    height="1"
                                >
                                    <use
                                        xlink:href="#image0_1695_41"
                                        transform="matrix(0.00964506 0 0 0.0104167 0.037037 0)"
                                    />
                                </pattern>
                                <image
                                    id="image0_1695_41"
                                    width="96"
                                    height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAADkElEQVR4nO2dzUtUURiHHzTKoKDaZQV9QIs+doXWqtrVqhCEiqD+hj4kKQiMWhSRhpDVX9B3bvuAaNOHixKpFgWaLdIswQyzojcOvpIJU6Pj3PPOnPeBB2R0vDO/M/fec895zx1wHMdxHMdxHMexSQVQCzQCN4Au4DPwXf2sj10HjgI1+hynQJYAp4BeQKboO31utbfC1FkEtALfphH8ZMP/uAAs9IbIj3qgfwaCn2wfUOeNkJtZ+qmXItsCVHpD/M1coD2D8Me9BVR5I4xRqT0bydh23euSpzVC+OM2p55+fcTwx61LuavZb6AB+lLtorYaCH9izygpFgMjBoKfeLGW1BXzaQOhyyRPkggVOk4jxuxJZQCv1kDYksONJECjgaAlhw0kwE0DQUsOr5EAXQaClhx2kgCfDAQtOfxIAowaCFr+cT1Q9ngDRMYPQZHxk3BkYky+SJ5eJQEsX4gdIQFqDAQtOdxAAlgdjOtOZTAOrVgTYzaRENYmZEZSm5BBywXFiOdJkIU6IR47/A/AAhKlLnL4v4CdJE5LxAY4F/vNWylNvB4h/DtepPuHKi2YzSr8MBwyZ8L2Hcb2hOYMjvnhsOPl6f85MfcVqbezyz/q+XdRW2boYm1E+/nJdjULoVor1nqmObbTpFfdToFUaNFUg5aOdOrM2qgafn6hvzuio5rJDKw5juM4juM4juMEtgKXgFfAcIShZpkhh/U9tAFbSqFpVwH3DQQnRfIusAKjbAYGDIQkGawh2IQxlhtZ9S4ZOaB7uxnuGQhFMvYBRthmIAyJpIkT82UDQUgkL2KA1waCkEi+xABfDAQhkRzCAJK40ZHEjc4PAyFIJMN7j46FCmeJZKg1ik6ngSAkks8xwBUDQUgkwyhpdPYZCEIiuRcDzNP+sCTmEDAfI7QZCEQyNtx209QXLZTyzJdM0a/AMoxx3EAwkpHHMEi4E/kjA+FIkX1o+a7rS4H3BkKSItmrh1vTrNYrRCnDueA1lAjrjd6QQ6ZpWCCyjhJc3fLMQHhSoE9LeZVNOFmdAH4aCFKmsaIyrNqcTRkQaoY6DIQqedqhr7msCGu2DgBvDQQsOXwD7C/39WXhsLQHeGIg8HEfA7tTXMC9Fjgbaa8I2zyjr8FhrJt3WG+iUayvMryt2/DQ82AlsAM4pAVQ7Xqo6Navrx2cEO6gPtatf9OuzzkIbLdc0ew4juM4juM4DsnxGx79oWD887scAAAAAElFTkSuQmCC"
                                />
                            </defs>
                        </svg>
                    </span>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Email Address"
                        class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                        required
                    />
                </div>
                <div
                    class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8 relative"
                >
                    <span>
                        <svg
                            width="27"
                            height="26"
                            viewBox="0 0 27 26"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                            <rect
                                width="27"
                                height="25.2"
                                fill="url(#pattern0_563_839)"
                            />
                            <defs>
                                <pattern
                                    id="pattern0_563_839"
                                    patternContentUnits="objectBoundingBox"
                                    width="1"
                                    height="1"
                                >
                                    <use
                                        xlink:href="#image0_563_839"
                                        transform="matrix(0.00972222 0 0 0.0104167 0.0333333 0)"
                                    />
                                </pattern>
                                <image
                                    id="image0_563_839"
                                    width="96"
                                    height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAFSklEQVR4nO2dS4wVRRSGP3FiHBghKKKS+MABZ4cGfLAjLjFOfIAT0OhKXaoIBmVGY4gYNS4UYmKMJsYIIkLALWp04ULE+EAWKtEoJOrwijvnGpkyFQ8J4lR339tV1ae7+kv+zc3t2/85dbu7uupUN7S0tOhnGrAUeALYBRwETgJ/iU7KZzvlOzfJNi0lmQdsAo4Apksdlm3tb7R0yYXAFmCih8SfLfsbm4HZbSsUYyVw1EPiz9Y4sKJtBDd98q83gfUycG7bEP/lfGBPhOSf1m7ZZwv//vOLJH8S+BwYBZYBQ8AM0ZB8NirfmSzYCO2RQP5p5xSwFRjs4u+6ANhWoCFeSv0QWJmToO+BxSV+/3rgh5x93EmizJaeiSsxez11He1vfJDTO0qyi7olJ/n22uCLvpxGsD2jpLgU+DPjtBPiHzk743Q0kdod86aMC+7igPu9IePC/AyJME3GacwUejvC/rc79v1LKgN4SzP6+YMR9r8w4yiwR0jj2eAIfl9ED184PKwnAXY5gt8Q0cOTDg87SICDjuCXRfRws8PDARLghCP4BRE9XOPwcIwE6DiCH4joYSDjfqDxuO5GU/WRbOBGiY9kAzdKfCQbuFHiI9nAjRIfyQZulPhINnCjxEeygRslPtQHPhdYLgNlW2XQ7pBMJU6IxuWzfTKkvV62mevRR2MoEvi1wJgk9FTGNnmy234m5SqLevDRSFyBnwfcBXxaIuF5ssPQDwL9bQP8PznjARPfzb4aj1GuxlN1gk3bANUn2aR6BDxcsHDWVCTr7WkaiK1CfkVBgk1BveG5Mq/y5L+nIKmmS73blPL1zQqSaXrUq9ScpxQk0ZSUvSOvJcuVX3BNQdkYhqkZlwC/K0ie8SS7avMyasI5wIcKkmY8a6/Epp57FSTLBNLdKKdfyrxNQ3UEmI5ixhQkyQSWnVtQyfSMuk9f6sgCi9VTrBNeLTdPrtJHXzouR7o6Hggc+E7g6gI+BjNK4H3pfhRyIFCwfwNre/CzruR0Zpa+Rhk3Bvy3rS3h67GAvpagiI0BTztl2R3Im6ph668CBNjxtGhvfqALs53gV8G8QGM+2z163BHA36QsOK+c4UCH+CqPHu8J5PEWFDAaKLiFHj0OBfL4OApwrTwvq4EIa8LKypZKVo5r0XNZ9Xu+Sw/h0T6dq3IOBQpuvkePg4E82qevVE6oksIRjx5XBfJoY68cHw9XNVPoHY8eQ1VlqFhX3AkY3JWKb8TUNMDxQMEZGdXUOhSh5tEGPwcM0ABrSnhbF9jbTzS4G2rOuOV/tMfkhy6LUdEN3RY4SCPaU3BCxn7n/UieYjxiTVX1W6eAn9BTkuqq5lZEDNgU8BPTyx0o4OLIJYh5xPJhpzvn0PD5YKO4Ab5EES8m2ADPoYglCTbAIpQR6zSURwwP36KQNZGCvyDDw6xIHh5CIQOBx4WM6PYMDyOR1grYckiVuJ5I61PfOR5vf1GPL3zrVvZNfWqZFWllzGF5sMdM0Uik5P+acwpUwX0REmEqks9SmWDYZTyfKEiW8ayPqBGXR7ogm0iyb2u9ippxa4OWqd5Gw94VUydtpMbY68HrCpJoetRbdVmamkVf4IlxE7AgoFFPTHlNQVJNQb3ZpOSfxh7Kzyq/ME/KOb/2p5289QShl7OaHvRHSm/ctn3qjxUk/cybrCtIkOFIYzgu/SZDJ40+5eQxU1bZHIuY+KMyqql+YC0mM4BHAs+sfSOTKWrH87VwHfCCLH8t+/BuW73wvMY53LowRwqgxmRN1n7gR+lJdUQn5LP9Ui44JtvYSZqWlha08g+a29VzLOm7pwAAAABJRU5ErkJggg=="
                                />
                            </defs>
                        </svg>
                    </span>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        class="w-full p-2 border-none bg-transparent montserrat-light italic text-[14px] active:border-none"
                        required
                    />
                    <span
                        id="eyeIcon"
                        class="absolute right-4 cursor-pointer"
                        onclick="togglePassword()"
                    >
                        <svg
                            width="25"
                            height="25"
                            viewBox="0 0 25 25"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                            <rect
                                y="0.933594"
                                width="25"
                                height="23.3333"
                                fill="url(#pattern0_563_841)"
                            />
                            <defs>
                                <pattern
                                    id="pattern0_563_841"
                                    patternContentUnits="objectBoundingBox"
                                    width="1"
                                    height="1"
                                >
                                    <use
                                        xlink:href="#image0_563_841"
                                        transform="matrix(0.00972222 0 0 0.0104167 0.0333333 0)"
                                    />
                                </pattern>
                                <image
                                    id="image0_563_841"
                                    width="96"
                                    height="96"
                                    xlink:href="data:image/png;base64,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"
                                />
                            </defs>
                        </svg>
                    </span>
                </div>
                <button
                    type="submit"
                    class="bg-[#F48857] text-[#F0F0F0] px-4 rounded-full w-full text-center font-extrabold max-w-[419px] py-[10px] lg:mb-12"
                >
                    Login
                </button>

                <div class="text-center pt-2 mb-4">
                    <p class="text-black text-[12px] montserrat-regular">
                        Don't have an account?
                    </p>
                </div>
                <a
                    href="{{ route('register') }}"
                    class="bg-[#FFEEE7] text-white px-4 rounded-full w-full text-center font-extrabold max-w-[419px] py-[10px] lg:mb-12"
                    >Sign Up</a
                >
            </form>
        </div>
    </div>
</div>
