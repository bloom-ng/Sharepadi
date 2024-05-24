<x-dashboard page="wallet">
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
    <div class="w-full overflow-x-hidden border-t flex flex-col flex-grow">
        <main class="w-full flex-grow py-6 px-6 lg:px-24">
            <h1 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Add Funds</h1>
            <p class="montserrat-thin font-thin text-[24px]">Add money into your wallet</p>

            <form method="POST" action="/user/fund-wallet"
                class="flex flex-wrap gap-2 justify-between items-center my-4 w-full">
                @csrf
                <input type="text" name="amount" placeholder="Amount"
                    class="italic montserrat-thin rounded-full px-8 py-2 border border-red-100 lg:w-[570px]">

                <button class="rounded-full px-6 py-2 bg-[#F48857] text-white lg:w-[160px]" type="submit">Pay</button>
            </form>
            <hr class="border-[#F48857] lg:w-[70%] justify-self-end">
            <table class="w-full self-center mt-12">
                <thead>
                    <tr class="montserrat-bold font-semibold text-[15px]">
                        <td>ID</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->reference_id }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaction->updated_at)->format('jS F, Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaction->updated_at)->format('H:i') }}</td>
                            <td>{{ $transaction->amount }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </main>
    </div>
</x-dashboard>
