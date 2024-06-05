<x-dashboard page="account">
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
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow py-6 px-6 lg:px-24">
            <h1 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Account</h1>
            <p class="montserrat-thin font-thin text-[24px]">Manage your account settings</p>
            
            <div class="flex flex-col my-12 items-start">
                <h2 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Profile</h2>
                    <form action="/user/update_profile" method="post" class="flex flex-col gap-6 items-start lg:w-1/2">
                        @csrf
                        <input type="text" placeholder="Name" name="name" class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                        <input type="email" placeholder="Email" name="email" class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                        <button type="submit" class="text-white rounded-full bg-[#F48857] px-6 py-2 font-semibold">Save Changes</button>
                    </form>
            </div>
            
            <div class="flex flex-col my-12 items-start">
                <h2 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Security</h2>
                    <form action="/user/update_password" method="post" class="flex flex-col gap-6 items-start lg:w-1/2">
                        @csrf
                        <input type="password" placeholder="Old Password" name="password" class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                        @error('password')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror

                        <input type="password" placeholder="New Password" name="new_password" class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                        @error('new_password')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror
                        
                        <button type="submit" class="text-white rounded-full bg-[#F48857] px-6 py-2 font-semibold">Change Password</button>
                    </form>
            </div>
            
            <div class="flex flex-col my-12 items-start">
                <h2 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Log Out</h2>
                    <form action="/user/logout" method="GET" class="flex flex-col gap-6 items-start lg:w-1/2">
                        @csrf
                        <button type="submit" class="rounded-full text-[#F48857] border border-[#F48857] px-12 py-2 font-semibold">Sign Out</button>
                    </form>
            </div>
        </main>
    </div>
</x-dashboard>
