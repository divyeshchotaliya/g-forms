<header class="fixed top-0 left-0 z-[999] w-full border-b bg-white transition-all"
    x-bind:class="$store.sidebar.on ? 'sm:pl-60' : 'sm:pl-0'">
    <div class="mx-auto flex w-full max-w-screen-2xl items-center justify-between space-x-3 p-6 sm:px-12"
        data-aos="fade">
        <div class="flex items-center space-x-6">
            <button x-on:click="$store.sidebar.toggle()">
                <x-icons-light.menu-alt2 />
            </button>
        </div>
    </div>
</header>
