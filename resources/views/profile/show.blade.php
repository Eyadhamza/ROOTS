
    @if($user->role =='member')
    @include('_MemberProfile')
    @elseif($user->role =='instructor')
    @include('_InstructorProfile')
    @elseif($user->role =='RR')
    @include('_RRProfile')
    @else
    @include('_ERROR404')
    @endif

