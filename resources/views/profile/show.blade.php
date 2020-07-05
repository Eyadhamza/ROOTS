<x-profile :user="$user">

    @if($user->all_roles()->contains('Admin'))
        @include('_MainProfilePartials._admin-profile')
    @endif
    @if($user->all_roles()->contains('Member'))
         @include('_MainProfilePartials._MemberProfile')
    @endif

    @if($user->all_roles()->contains('Instructor'))

            @include('_MainProfilePartials._InstructorProfile')
    @endif

    @if($user->all_roles()->contains('RR'))
            @include('_MainProfilePartials._RRProfile')
    @endif

</x-profile>
