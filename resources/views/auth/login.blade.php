<form action="{{ route('login.authenticate') }}" method="POST">
    @csrf
    <label for="username">Email</label>
    <input type="emil" name="email" id="email">
    <label for="username">password</label>
    <input type="password" name="password" id="password">
    <button>Login</button>
</form>