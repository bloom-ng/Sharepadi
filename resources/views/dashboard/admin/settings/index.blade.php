<!-- Index page -->
<x-admin_dashboard page="settings">
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
    <h1 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Settings</h1>
    <a class="text-white rounded-full bg-[#F48857] px-6 py-2 font-semibold" href="/admin/create-setting">Create</a>
    <table class="w-full self-start mt-12">
        <thead>
            <tr class="montserrat-bold font-semibold text-[15px]">
                <th scope="col" class="text-left">Key</th>
                <th scope="col" class="text-left">Value</th>
                <th scope="col" class="text-left">Action</th>
            </tr>
        </thead>
        <tbody class="pt-12">
            @foreach ($settings as $setting)
            <tr>
                <td class="whitespace-wrap text-left">{{ $setting->key }}</td>
                <td class="whitespace-wrap text-left">{{ $setting->value }}</td>
                <td class="whitespace-wrap text-left"><a class="text-red-500" href="/admin/delete-setting/{{ $setting->id }}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-8">
        {{ $settings->links() }}
    </div>
</main>
</div>
</x-admin_dashboard>
