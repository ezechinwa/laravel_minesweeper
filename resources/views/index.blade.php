<x-app-layout>
    <div class="flex flex-col space-y-6">Welcome , {{ auth() !== null && auth()->user() ? auth()->user()->email : "Guest User" }}

        <div class="game_container my-6">
            <div class="shadow bg-white p-3 rounded flex flex-col space-y-10">
                <div class="board"></div>
                <div class="subtext">Mines Left: <span data-mine-count></span></div>
                <div class="mt-10">
                    <a href="/" class="bg-green-500 hover:bg-green-800 text-white py-2 px-4 mb-10">New Game</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
