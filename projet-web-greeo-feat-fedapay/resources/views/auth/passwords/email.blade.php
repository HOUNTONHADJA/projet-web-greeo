<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <input type="email" name="email" placeholder="Votre email">
    <button type="submit">Envoyer le lien</button>
</form>
