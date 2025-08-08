<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="hidden" name="email" value="{{ $email }}">

    <input type="password" name="password" placeholder="Nouveau mot de passe">
    <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe">

    <button type="submit">Réinitialiser le mot de passe</button>
</form>
