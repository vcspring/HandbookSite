<a href="{{ route('users.show', $user->id) }}">
  <img src="/img/user_avatar/a1.jpg" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>
	{{ $user->name }}
	<p>{{ $user->email }}</p>
</h1>
