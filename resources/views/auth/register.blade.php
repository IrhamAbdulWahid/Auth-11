<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <label for="username">name</label>
    <input type="text" name="name" id="name">
    <label for="username">Email</label>
    <input type="emil" name="email" id="email">
    <label for="username">password</label>
    <input type="password" name="password" id="password">
    <label for="username">Konfirmasi password</label>
    <input type="password" name="password_confrim" id="password">
    <button>Register</button>
</form>