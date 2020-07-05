<x-profile :user="$user">

    @if($user->all_roles()->contains('Admin'))
        @include('_DutyProfilePartials._AdminDuty')
    @endif
    @if($user->all_roles()->contains('Member'))
        @include('_DutyProfilePartials._MemberDuty')
    @endif

    @if($user->all_roles()->contains('Instructor'))

        @include('_DutyProfilePartials._InstructorDuty')
    @endif

    @if($user->all_roles()->contains('RR'))
        @include('_DutyProfilePartials._RRDuty')
    @endif

</x-profile>
