@extends("master")


@section("content")

<a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">Edit</a>

<p>Nama: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>
<p>created_at: {{ $user->created_at }}</p>
<p>updated_at: {{ $user->updated_at }}</p>

<a href="{{ route('user.index') }}" class="btn btn-secondary">Back</a>
@endsection
