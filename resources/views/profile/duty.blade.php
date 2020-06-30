<x-profile :user="$user">

    @if($user->all_roles()->contains('Admin'))
        @include('_AdminDuty')
    @endif
    @if($user->all_roles()->contains('Member'))
        @include('_MemberDuty')
    @endif

    @if($user->all_roles()->contains('Instructor'))

        @include('_InstructorDuty')
    @endif

    @if($user->all_roles()->contains('RR'))
        @include('_RRDuty')
    @endif

</x-profile>
