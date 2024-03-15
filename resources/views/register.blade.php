<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <h1>Sign Up</h1>
    <form action="/register"method="POST">
        @csrf

        <label for="">Name</label>
        <input type="text" name="name">
        @error('name')
            <span>{{ $message }}</span>
        @enderror


        <label form="">Email</label>
        <input type='text' name="email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror


        <label for="">Password</label>
        <input type="password" name="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror


        <label for="">Birthday</label>
        <input type="date" name="birthday">
        @error('birthday')
            <span>{{ $message }}</span>
        @enderror




        <button type="submit">Create Account</button>


    </form>
</div>
