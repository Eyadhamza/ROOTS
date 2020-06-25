{{$user->name}}
{{$user->avatar}}
{{$user->role}}
@foreach($user->committees as $committee)
    {{$committee->name}}
@endforeach
{{$user->progress}}

@foreach($user->achievements as $achievement)
    {{$achievement->name}}
    {{$achievement->description}}
@endforeach

@foreach($user->articles as $article)
    {{$article->name}}
    {{$article->description}}
@endforeach
