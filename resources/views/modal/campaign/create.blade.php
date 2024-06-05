<!-- Modal Structure -->
<div id="campaignModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
    <div
        class="bg-white w-auto px-8 py-6 max-h-[90%] max-w-[90%] md:max-w-[80%] lg:max-w-[60%] xl:max-w-[50%] 2xl:max-w-[40%] overflow-y-scroll rounded-lg">
        <div class="flex justify-between items-start">
            <h2 class="text-[24px] md:text-[32px] font-semibold montserrat-bold">Create a Campaign</h2>
            <button id="closeModal" class="text-black">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="40" height="40" fill="url(#pattern0_563_934)" />
                    <defs>
                        <pattern id="pattern0_563_934" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_563_934" transform="scale(0.0104167)" />
                        </pattern>
                        <image id="image0_563_934" width="96" height="96"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACYUlEQVR4nO2dX2vUQBRHf3b9JmIrPsleS/zWRUXsk+sXahso/WMVIoEJSHFp0j+5c++cA/vWh8k5yWSbDTMSAAAAAAAAAAAAhOKV2uK1pI0q4IOkU0k3kn5J+irpnfLyXtJ3SX8k3UnaSTr2lH8pabj3uZDUKR9dObb7x3sl6aPHgE7/M5jp0yeL0JVj2ne8P9Ye0EGZdoYGInQPyB/KdDTeF1bl+oFBZYjQzZA/lPvf6pzMGFjkCN1M+ePns8cA3+y5KWWI0C2Qf1FcuLCVdLYgwifVj0k6j3RiZYpg0eRnimBR5WeIYNHlR45gWeRHjGDZ5EeKYFnlR4hg2eXXHMFakV9jBGtNfk0RrFX5NUSw1uV7RjDk+0Uw5PtFMOT7RTDk+0Uw5PtFMOT7RTDk+0Uw5PtFMOT7vZHQL/zbtP/hel4JA/LrjtBz5vtF6JHvdyX0yPeL0CP/ebEFXzWXPLaAF5BPhArkD1wJ/vIHIvjLH4iwnI5HEX7YIx6s1fDKSwrsCU81ieAof4IIj8Se8Xk+ERzlTxBhJvaCv2QRwVH+BBH2sOZvuFu+ovrJnyBCwfPthW3rV0INr45sW41Qg/xmI9Qkv7kINcpvJkLN8tNHiCA/bYRI8tNFiCg/TYTI8sNHyCA/bIRM8sNFOGLZSk3LVh56BPiW7Mx/yusx46rxq7Ipy/Vmlb90Orpdez+BcaHq38nlL4lw57Ghw88G5M+djsaNHFbneM8S9q1t4HDjtYHDFGFXpqNxHvwi6a3yclhuuLflmHee8v9lUzZ1aIWDWjbxAQAAAAAAAAAAAM3jL0Cqa8IDDlXqAAAAAElFTkSuQmCC" />
                    </defs>
                </svg>

            </button>
        </div>
        <div class="flex flex-col justify-start items-start my-5">
            <h2 class="text-[18px] md:text-[24px] font-semibold montserrat-semi-bold">Create Type</h2>
            <h2 class="text-black montserrat-thin italic">What campaign will you like to run? ( Tap to select )</h2>
        </div>
        <div class="mt-4">
            <ul class="flex flex-col items-center justify-center md:items-start md:justify-start md:flex-row gap-4">
                <li id="tab1"
                    class="pointer flex flex-col items-start justify-start rounded-lg shadow-sm bg-[#F0F0F0] bg-[#FFEEE7] p-6 max-w-[306px] h-fit md:w-fit w-full">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="56" height="56" fill="url(#pattern0_563_918)" />
                        <defs>
                            <pattern id="pattern0_563_918" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_563_918" transform="scale(0.0104167)" />
                            </pattern>
                            <image id="image0_563_918" width="96" height="96"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAADCElEQVR4nO2dy29NURSHvxoLBga9UQTVsRAz79Y/YM7cUBkyZijRRpWBP4BIDMRAPaaYamvMxONKpBJmS3ayT1LiUvfue9faZ60v+SUdtPfs861z9uP25GwIgiAIgiAI7HASWATeAt8A6TPpb1fzZ53QPqka2AU8HUD4v/IE2Kl9klY5BHweovwmn4CD2idrjd3AxxHIb/Ih7oRfeTRC+U0eKl1s5jisIL9J6vbcc6OHnO/ABWB8AEMdYDZ/1p+Ocd29feBVDzlJfiku9jjGy7YW4DRwO8/B+53HjxdsT6fPNqS2r+R1xAwVMAW8KNQ/dwwU4Pc8B/ZjlGPAl4ID5GzBtl0q2K4ucBSDV35J+ZIHztkB74RO7v9/FG5bKsIkhhjm1wdiNKk7MjPgitNMY4A7BkSIUm5hgFUDIkQpaYqqzpoBEaKUdO7qiPOoI86jjjiPOuI86ojzqCPOo444jzriPOqI86gjzqOOOI864jzqiPOoIwbTBa4Cx4GJnPTztSH861QdMZb7wNa/tHcb8CAKMBz5C8DYBi6a9Dv34g5ARX7DlkJPZKtTo/yGy1EA1OQnDkQBGEh+ev50E/2zOQqAmvxmHIgxgNF2O+uJLgg9+YkrcQegJj+moejJH8sr5hJTYHVqGXDXy58v2DZ1PMsXDOBZvmAAz/IFA3iWLxjAs3zBAJ7lCwYodSKvC8tfGIH8VhXgfGVXfusKMFVI/twI5bemAO8rld+aAtytVH5rCnC2UvmtKcBEpfJbUYCViuW3ogBzFctvRQHO/Ofx0mLtpgHxrSnA+AaPM5UXa73eMRcF6FPC3h7CdwDn8hT1nQHRrb0DHue32G7P3dF8Hpi1xbopgFQedcR51BHnUUecRx1xHnXEedQR51FHnEcdcR51PL+28isG8Pzi1mUMsGhAhCglfS2uzowBEaKUUxhhyYAMGXGeYYg9eYc6cZKutQ0cyNt6dA3IkSEnbbd4BKNMtnw3jSVgHxUwnTc3WK58nbAGvMlPWpsZcIMgCIIgCIIgCIKAavkJu8ghRAGqTIEAAAAASUVORK5CYII=" />
                        </defs>
                    </svg>
                    <h3 class="montserrat-medium my-3 font-semibold text-xl lg:text-2xl">Custom Task</h3>
                    <p class="montserrat-thin italic font-light text-ellipsis">
                        Pay people to 
                        perform any social task you 
                        want.
                        Just input what you 
                        want and let our users 
                        do the magic.
                    </p>
                </li>
                <li id="tab2"
                    class="pointer flex flex-col items-start justify-start rounded-lg shadow-sm bg-[#F0F0F0] p-6 max-w-[306px] h-fit md:w-fit w-full">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="56" height="56" fill="url(#pattern0_563_925)" />
                        <defs>
                            <pattern id="pattern0_563_925" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_563_925" transform="scale(0.0104167)" />
                            </pattern>
                            <image id="image0_563_925" width="96" height="96"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>

                    <h3 class="montserrat-medium my-3 font-semibold text-xl lg:text-2xl">WhatsApp Status Post</h3>
                    <p class="montserrat-thin italic font-light">
                        Pay people to post
                        your ADs on their
                        status till it gets to
                        your dessired views
                    </p>
                </li>
                <li id="tab3"
                    class="pointer flex flex-col items-start justify-start rounded-lg shadow-sm bg-[#F0F0F0] p-6 max-w-[306px] h-fit md:w-fit w-full">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="56" height="56" fill="url(#pattern0_563_932)" />
                        <defs>
                            <pattern id="pattern0_563_932" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_563_932" transform="scale(0.0104167)" />
                            </pattern>
                            <image id="image0_563_932" width="96" height="96"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAFQUlEQVR4nO2d34tVVRTHv+OIpZjkhEo2CjZq0KNUSliQYGoP4u8U/4HAl0hI0yd1HH3wQUkrfNFeCqeMcmQUKUh66SV/IZORL5mJ5WimNo6Jrti0pGG7j/fcc/beZ9271we+IF7m3D3fdc4+e629zhlAURRFUeIwDMAsABsAHARwFsA1AP+wrvH/fQ7gPQAz+WeUkrQD2AbgIgCqU78C6ALwjEahfp4C8CGAOwWMJ0uDAPYAaNNA5GMlgH4PxpOlKwBWaBCyGc5nPQXWbv4uZQgjAfREMJ9Yh/g7FQCtAL6IaD6xTMD1Sog07VCG3k/9ElhZofnEWoZEaeOVSdUB6Odlb3JUOfVQ6lNRu6ckizxpMLWMeZsA08nSViSCKZJdEGA4WbrIS+KmZ5YAsylDLyEBNgowmjK0DglQRdZLOfUZEuCsAKMpQ2eQAFcFGE0ZMolh0yNp/U+OfKDp0QBUjE5BFaM34Yo5KGCupwx1IwE2CDCaMvQuEmCmAKMpQy8gAaQW435JqZuuS4DhZKkTiW3IDAownVhmLBORGHsEGE+sXUh0U/4PAeb/DmAsEmWFgAAsQeLsrtD8nVX/8hJorSg77tHWxP8ZyQ2zscz/UptzH2Y4N0jFWPG0RrzCG45lvDLxbfxlveHmZyxfDT6Stdt81j8Z8KRpWiZyx9qFgrWdTgBPV/1LNAPDuGlqPbeOnOGdtTss8+/T/Jnp7XkxpcKaoiiKoqTEaABvANjOJY1zjndX/MjZvXkWYgH/jFKCFjayu2B+YvKRAwDm87GUOljOS19fWfkpzcrzMQ3A1wHrUscATEUgzGW2FMBXAH4DcC9CoY0K6HsAoxzjXw3gZoTvvwFglW/zJwA4LsBcqqHzAMY5TpwqujY6fd0bzEPPPwswl2rI3EhnOMwv+vzyYX7U1XR89BY8xgc+ghBzY4VK6B3H2Muc+cb4B0wqcZwtZcyfLcBYyqEfHJsyq0se06bMsd4sGoC9AsylGroP4GXHauemoAD8BaCjSAB+EmAw5ZirbXwsNX0GwOhokQDcEmAw1dArji1QEhgAo8X1BoCE66Q13haPGW4IL07Wuyoi4VprjXeBx2OH8mJeMwWg3RpvdwME4NN6AnBbgMmUIVMyHsoTnlvkQwVgIKNU4uSSAKMpQx8FnH5CBsDo9bwBOCXAaMrQW9ZYtzdQAEyGnot9AoymDM2xxtrTQAEwvay5WCPAaMrQlMBJY8gAmO3NXEzmVJ8Eqs0aa3+NqmZsHlVFrestLt8JMJscGpHzpSH2UjUmk3y8xWW5ALPJocdTCUCL0NXQhJxTUG9FQTDmH/H1IqlXBe4BP2eN8Zzn49v4PHZfkYjuEGA6DdFrgXfuRCxDh/IYgG8EGE+stwO/vTdkAAq/1XcMl1RJgPZbY5vfQAGYi5KPG30rsBg32nPxMFQA/q6nGPeo6WifwBvxgQYIwCfwyNKK/2jDuoDTUKgA5K6E5mUcvynlbgUBOB0wZwkRgBMhO6mncxtL7E2cudY4lggOwEJEYDx3qcXKno86xnBMYABMRh6dabxeNyn5dY+mX+fEaw1/h81U7lKWEgAz3mdRMeY53+e5dXsTrwaOc228H8CfPNh7/EjQZf7MJH8fA9jMhcGOnPPoKkEBMONOkk4BzbnmZEuWFm4RLzpnt9eoataSeXmVgv/yBYos0ySgWMvTB/eZkLrBf9JRcdDBy9ZQ5vc6mgUUB4s8V3VPxEqymu0GPY97NQcKmD7AS2lT29EHtUsyio3s4t2qPsf7i/r4s61c/ihdUlYURVEUw79N6Gja0HsyNgAAAABJRU5ErkJggg==" />
                        </defs>
                    </svg>
                    <h3 class="montserrat-medium my-3 font-semibold text-xl lg:text-2xl">WhatsApp Add Up</h3>
                    <p class="montserrat-thin italic font-light">
                        Increase your
                        contacts and views
                        on WhatsApp with
                        our Add Up.
                    </p>
                </li>
            </ul>

            {{-- TAB 1 START --}}
            <div id="tabContent1" class="">
                <form id="formCustomTask" action="/user/campaigns" method="POST" enctype="multipart/form-data"
                    class="mt-5">
                    @csrf
                    <input type="text" value="custom_task" name="type" hidden>
                    <input type="number" name="cost" id="cost" hidden>
                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Task Title</h2>
                        <input type="text" id="title" placeholder="Input Title" name="title"
                            class="mt-1 block w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                        <p class="mt-2 text-sm text-gray-500 montserrat-thin font-light italic">Enter a title that will
                            appear for users to see. Keep it
                            short and simple. <br>
                            For example “Like my YouTube Video“ or “Vote for a person"</p>
                    </div>

                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Actions</h2>
                        <p class="mb-4 text-sm text-gray-500 italic montserrat-thin font-light">You must select all of
                            the
                            actions required with your
                            task. For example, if you need users to like your post,  comment on your post and follow
                            your
                            page, input 3 in the "actions required input field” or if you need users to like only your
                            post,
                            input "1" then select the actions users are going to take. <a href=""
                                class="text-[#F48857] font-semibold">PLEASE
                                WATCH
                                THIS TUTORIAL TO LEARN HOW TO CREATE A TASK PROPERLY.</a>
                        </p>
                        <input type="number" id="actions_number" name="actions_number"
                            placeholder="Number of Actions" min="1"
                            class="mt-1 block w-fit border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">

                        <p class="my-4 montserrat-thin font-light italic">Select the action(s) the users will be
                            performing.</p>

                        <div id="actionsContainer"></div>
                    </div>


                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Instructions</h2>
                        <textarea id="instructions" name="instructions" rows="5" placeholder="Insert Instructions"
                            class="mt-1 block w-full border border-[#F48857] rounded-xl shadow-sm py-2 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm"></textarea>
                        <p class="my-4 text-sm text-gray-500 italic montserrat-thin font-light">Enter a detailed
                            description for the user on how to complete your task. For example, "Make a post on X about
                            my business and upload a screenshot when done" or "Vote for contestant 166 and upload a
                            screenshot when done".<a href="" class="text-[#F48857] font-semibold">WATCH THIS TO
                                LEARN HOW TO
                                CREATE A TASK PROPERLY</a>
                        </p>
                    </div>

                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Task Image/Video (Optional)</h2>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center mt-1 w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                                <div class="flex flex-col items-center justify-center">
                                    <p class="text-sm text-gray-500 italic montserrat-thin font-light">
                                        Upload Task Image/Video</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" name="task_file" />
                            </label>
                        </div>
                        {{-- <input type="file" id="task_image" name="task_image"
                            class="mt-1 block w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic"> --}}
                        <p class="mb-4 text-sm text-gray-500 italic montserrat-thin font-light">If you have an image or
                            video you will like for our user to use for your task, please upload it here.</a>
                        </p>
                    </div>

                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Quantity</h2>
                        <input type="number" id="quantity" name="quantity" min="80"
                            class="mt-1 block w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                        <div class="flex items-center justify-between">
                            <p class="mt-2 text-sm text-gray-500">How many users will you like to complete your task?
                            </p>
                            <p class="text-red-600 font-semibold">Minimum quantity is "80".</p>
                        </div>
                    </div>

                    <div class="my-8 flex flex-row items-center justify-end w-full">
                        <button id="nextCustomTask" type="button"
                            class="w-fit bg-[#F48857] text-white py-2 px-6 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F48857] font-semibold montserrat-medium">
                            Next
                        </button>
                    </div>
                </form>
            </div>
            {{-- TAB 1 END --}}

            {{-- TAB 2 START --}}
            <div id="tabContent2" class="hidden">
                <form id="formWhatsAppStatusPost" action="/user/campaigns" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" value="whatsapp_status_post" name="type" hidden>
                    <input type="text" name="title" value="WhatsApp Status Post" hidden>
                    <input type="number" name="cost" id="cost" hidden>

                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Caption</h2>
                        <p class="my-4 text-sm text-gray-500 italic montserrat-thin font-light">Advert/Status Caption
                            (Ensure it's well detailed and you include either your WhatsApp link or website link so
                            people can reach out to you).</a>
                            <textarea id="caption" name="caption" rows="5" placeholder="Insert Instructions"
                                class="mt-1 block w-full border border-[#F48857] rounded-xl shadow-sm py-2 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm"></textarea>
                        </p>
                    </div>

                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">AD Image/Video (Optional)</h2>

                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center mt-1 w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                                <div class="flex flex-col items-center justify-center">
                                    <p class="text-sm text-gray-500 italic montserrat-thin font-light">
                                        Upload AD Image/Video</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" name="task_file" />
                            </label>
                        </div>
                        <p class="mb-4 text-sm text-gray-500 italic montserrat-thin font-light">If you have an image or
                            video you will like for our user to use for your task, please upload it here.</a>
                        </p>
                    </div>

                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Budget</h2>
                        <input type="number" id="budget" name="budget" min="7000"
                            placeholder="Input Budget"
                            class="mt-1 block w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                        <div class="flex flex-col items-center justify-start">
                            <p class="mt-2 text-sm text-gray-500">
                                What’s the budget you have for this campaign ? The budget you input will determine how
                                many views you’ll get on your AD. Click on next to see an estimate of how many views
                                you’ll be getting.
                            </p>
                            <p class="text-red-600 font-semibold self-end mt-8">Minimum budget is “₦7,000”</p>
                        </div>
                    </div>

                    <div class="my-8 flex flex-row items-center justify-end w-full">
                        <button id="nextWhatsAppStatusPost" type="button"
                            class="w-fit bg-[#F48857] text-white py-2 px-6 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F48857] font-semibold montserrat-medium">
                            Next
                        </button>
                    </div>
                </form>
            </div>
            {{-- TAB 2 END --}}

            {{-- TAB 3 START --}}
            <div id="tabContent3" class="hidden">
                <form id="formWhatsAppAddUp" action="/user/campaigns" method="POST">
                    @csrf
                    <input type="text" value="whatsapp_add_up" name="type" hidden>
                    <input type="text" name="title" value="WhatsApp Add Up" hidden>
                    <input type="number" name="cost" id="cost" hidden>

                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Add Up Link</h2>
                        <input type="text" id="title" placeholder="Input Your Add Up Link" name="add_up_link"
                            class="mt-1 block w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                        <p class="mt-2 text-sm text-gray-500 montserrat-thin font-light italic">
                            Input your add up link in the field above, if you don't have one, head to
                            <a href="https://create.wa.link">https://create.wa.link</a> to create one.
                        </p>
                    </div>

                    <div class="my-8">
                        <select id="gender" name="gender"
                            class="mt-1 block w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                            <option disabled>Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="all">All Genders</option>
                        </select>
                        <p class="mt-2 text-sm text-gray-500 montserrat-thin font-light italic">
                            You can select the kind of gender whether male or female that you want to add you up. For
                            example, if you are selling women fashion items, you can select the Female gender so your
                            add up link will be shown to only females. Select “All Gender” if you want to target all
                            genders.
                        </p>
                    </div>

                    <div class="my-8">
                        <select id="states" name="states"
                            class="mt-1 block w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                            <option disabled>Select Target State(s)</option>
                            @foreach ($states as $state)
                                <option value="{{ $state }}">{{ $state }}</option>
                            @endforeach
                        </select>
                        <p class="mt-2 text-sm text-gray-500 montserrat-thin font-light italic">
                            You can select the states of those you want to add you up. For example, if you are a seller
                            in Abuja, you can select FCT, Nasarawa and Niger States.
                        </p>
                    </div>

                    <div class="my-8">
                        <h2 class="text-xl font-bold mb-2">Quantity</h2>
                        <input type="number" id="quantity" name="quantity" min="100"
                            placeholder="Input Quantity"
                            class="mt-1 block w-full border border-[#F48857] rounded-full shadow-sm py-3 px-3 focus:ring-[#F48857] focus:border-[#F48857] sm:text-sm montserrat-thin italic">
                        <div class="flex items-center justify-between">
                            <p class="mt-2 text-sm text-gray-500">
                                How many people will you like to add you up?
                            </p>
                            <p class="text-red-600 font-semibold self-end">Minimum quantity is “100”</p>
                        </div>
                    </div>

                    <div class="my-8 flex flex-row items-center justify-end w-full">
                        <button id="nextWhatsAppAddUp" type="button"
                            class="w-fit bg-[#F48857] text-white py-2 px-6 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F48857] font-semibold montserrat-medium">
                            Next
                        </button>
                    </div>
                </form>
            </div>
            {{-- TAB 3 END --}}

        </div>
    </div>
</div>


<!-- Pop-up for amount confirmation -->
<div id="confirmationPopup" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
    <div
        class="bg-white w-full px-8 py-6 rounded-[40px] max-w-[90%] md:max-w-[80%] lg:max-w-[60%] xl:max-w-[50%] 2xl:max-w-[40%]">
        <div class="flex justify-between items-start">
            <h2 class="text-[24px] md:text-[28px] font-semibold montserrat-bold">Pricing Calculator</h2>
            <button id="backButton" class="text-black">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="40" height="40" fill="url(#pattern0_563_934)" />
                    <defs>
                        <pattern id="pattern0_563_934" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_563_934" transform="scale(0.0104167)" />
                        </pattern>
                        <image id="image0_563_934" width="96" height="96"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACYUlEQVR4nO2dX2vUQBRHf3b9JmIrPsleS/zWRUXsk+sXahso/WMVIoEJSHFp0j+5c++cA/vWh8k5yWSbDTMSAAAAAAAAAAAAhOKV2uK1pI0q4IOkU0k3kn5J+irpnfLyXtJ3SX8k3UnaSTr2lH8pabj3uZDUKR9dObb7x3sl6aPHgE7/M5jp0yeL0JVj2ne8P9Ye0EGZdoYGInQPyB/KdDTeF1bl+oFBZYjQzZA/lPvf6pzMGFjkCN1M+ePns8cA3+y5KWWI0C2Qf1FcuLCVdLYgwifVj0k6j3RiZYpg0eRnimBR5WeIYNHlR45gWeRHjGDZ5EeKYFnlR4hg2eXXHMFakV9jBGtNfk0RrFX5NUSw1uV7RjDk+0Uw5PtFMOT7RTDk+0Uw5PtFMOT7RTDk+0Uw5PtFMOT7RTDk+0Uw5PtFMOT7vZHQL/zbtP/hel4JA/LrjtBz5vtF6JHvdyX0yPeL0CP/ebEFXzWXPLaAF5BPhArkD1wJ/vIHIvjLH4iwnI5HEX7YIx6s1fDKSwrsCU81ieAof4IIj8Se8Xk+ERzlTxBhJvaCv2QRwVH+BBH2sOZvuFu+ovrJnyBCwfPthW3rV0INr45sW41Qg/xmI9Qkv7kINcpvJkLN8tNHiCA/bYRI8tNFiCg/TYTI8sNHyCA/bIRM8sNFOGLZSk3LVh56BPiW7Mx/yusx46rxq7Ipy/Vmlb90Orpdez+BcaHq38nlL4lw57Ghw88G5M+djsaNHFbneM8S9q1t4HDjtYHDFGFXpqNxHvwi6a3yclhuuLflmHee8v9lUzZ1aIWDWjbxAQAAAAAAAAAAAM3jL0Cqa8IDDlXqAAAAAElFTkSuQmCC" />
                    </defs>
                </svg>
            </button>
        </div>
        <p class="my-6 font-medium montserrat-medium">Summary</p>
        <div class="my-8 bg-[#FFEEE7] rounded-2xl p-6">
            <p class="text-[18px] md:text-[24px] font-semibold montserrat-semi-bold">
                <span id="summaryText"></span>
            </p>
        </div>
        <h2 class="font-semibold montserrat-thin">Estimated Cost: <span id="amountDisplay"
                class="text-[#F48857]"></span></h2>
        <div class="flex justify-between items-center mt-8 mb-4">
            <button type="button" id="backButton"
                class="flex items-center justify-center gap-4 font-semibold montserrat-thin">
                <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="40" height="40" fill="url(#pattern0_563_981)" />
                    <defs>
                        <pattern id="pattern0_563_981" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_563_981" transform="scale(0.0104167)" />
                        </pattern>
                        <image id="image0_563_981" width="96" height="96"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAABV0lEQVR4nO3cQU7CQBgF4HcQt8JeF3hmJN4Kw0ZRL4BpUjZEoSDwD/b7kknYdfJeO0NoaQIAAAAAAAAAAHCaaZLnJK/96D5PhHkdsyTrJJud8a6E64T/8UP42zG/whxG67E/yzd7xqp6kmMOf5NkWT3RMS47lqBGwl/bhGuWnU1f0uzMxx814RcSfiHhFxJ+IeEXEn4h4RcSfiHhFxJ+IeEXEv6N/KppZG8GX0le+vvig0x/uYdr5E8ZvCW5G1JA98SCsHORDAbdA+8eG1FALpLBpwJSenJ1++pB3WXiCshFMlgMKaB7Ys0mnItswvcZyNfQnHXdXxwT/tZD39rQte3p2ANwmBIaoIQGKKEBSmiAEhqghAYooQFKaIASGqCEBiihAUpogL8oNcCf9G5oOVpVT3TsJSyrJ/nfeVVBA7ysowGTndfVzE+5RwoAAAAAAAAAAJAb8A0AZEk4Ja91ygAAAABJRU5ErkJggg==" />
                    </defs>
                </svg>
                Back
            </button>
            <button id="payButton"
                class="bg-[#F48857] px-8 py-2 rounded-full text-white font-semibold montserrat-thin"
                disabled>Pay</button>
        </div>
    </div>
</div>

