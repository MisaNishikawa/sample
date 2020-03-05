@foreach ( $coments as $coment)
    <p>{{ $coment->id }}</p>
    <p>{{ $coment->body }}</p>
    <p>{{ $coment->created_at }}</p>
    @csrf
@endforeach

  <a href="{{url('coments/create')}}">新規追加</a>