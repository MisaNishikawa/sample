@foreach ($followers as $follower)
    <p>{{ $follower->id }}</p>
    <p>{{ $follower->tell }}</p>
    <p>{{ $follower->created_at }}</p>
@endforeach