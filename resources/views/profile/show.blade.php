<x-profile :user="$user">

    @if($user->all_roles()->contains('Member'))
         @include('_MemberProfile')
    @endif

    @if($user->all_roles()->contains('Instructor'))

            @include('_InstructorProfile')
    @endif

    @if($user->all_roles()->contains('RR'))
            @include('_RRProfile')
    @endif

</x-profile>
