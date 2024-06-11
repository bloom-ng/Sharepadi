<div id="contactModal" class="hidden relative flex flex-row justify-center">
    <div class="flex flex-row justify-center fixed inset-0 z-30 pt-6">
        <div class="absolute inset-0 bg-gray-800 bg-opacity-75"></div>
        <div class="flex flex-col items-center hide-scrollbar overflow-auto w-full z-40">
            <div class="flex flex-col items-center rounded-[34px] h-fit bg-[#F0F0F0] pt-12 pb-4 px-8 md:px-24 lg:px-24">
                <div class="flex flex-row justify-between gap-24">
                    <h2 class="montserrat-bold text-[19px] xl:text-[32px] mb-8">
                        Contact Us
                    </h2>
                    <button id="closeContactModal" class="-mt-8">
                        <img src="/images/close.png" class="w-6" alt="" />
                    </button>
                </div>

                <form method="POST" action="/contact" class="w-full flex flex-col items-center">
                    @csrf
                    {{-- //border-[#FFEEE7] --}}
                    <div
                        class="flex items-center justify-center border border-[#FFEEE7] rounded-full max-w-[419px] w-full mb-8">
                        <span>
                            <svg width="27" height="25" viewBox="0 0 27 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="27" height="25" fill="url(#pattern0_1695_41)" />
                                <defs>
                                    <pattern id="pattern0_1695_41" patternContentUnits="objectBoundingBox"
                                        width="1" height="1">
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
                                required />
                            @error('name')
                                <div class="text-[#F48857] montserrat-thin italic mb-4"></div>
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
                                    <pattern id="pattern0_563_849" patternContentUnits="objectBoundingBox"
                                        width="1" height="1">
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
                                required />
                            @error('email')
                                <div class="text-[#F48857] montserrat-thin italic mb-4"></div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-center max-w-[419px] w-full mb-8">
                        {{-- <span>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="27" height="27" fill="url(#pattern0_563_870)" />
                                <defs>
                                    <pattern id="pattern0_563_870" patternContentUnits="objectBoundingBox"
                                        width="1" height="1">
                                        <use xlink:href="#image0_563_870" transform="scale(0.0104167)" />
                                    </pattern>
                                    <image id="image0_563_870" width="96" height="96"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </span> --}}
                        <div class="w-full">
                            {{-- <label for="Message_to_us" class="block text-sm font-medium text-gray-700">Your message to
                                us...</label> --}}
                            <textarea id="Message_to_us" name="Message_to_us" rows="4" placeholder="Your message to us..."
                                class="w-full p-2 border border-4 border-[#FFEEE7] rounded-3xl bg-transparent montserrat-light italic text-[14px]"
                                required></textarea>
                            <div class="text-[#F48857] montserrat-thin italic mb-4"></div>
                        </div>
                    </div>

                    <button type="submit"
                        class="bg-[#F48857] text-white px-4 rounded-full w-full text-center font-extrabold max-w-[419px] py-[19px] md:mb-8 lg:mb-12">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
