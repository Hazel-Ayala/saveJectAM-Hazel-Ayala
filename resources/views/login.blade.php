<x-layout>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <h1 class="">Sign in</h1>
    <form action="/login"method='POST'>
        @csrf

        <div>
            <x-input shi="email" titulo="Email" type="text"/>
        </div>


        <div>
            <x-input shi="Password" titulo="Password" type="password"/>
        </div>

        <button type="submit">Log In</button>
    </form>

</x-layout>
