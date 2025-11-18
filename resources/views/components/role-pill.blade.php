@props(['role'])

<span {{ $attributes->merge(['class' => 'inline-block rounded-full text-sm bg-black text-white px-3 py-0.5 ']) }}>

    @if ( $role->name==="super-admin" )
        <i class="fa-solid fa-user-secret pr-2"></i>
    @elseif( $role->name==="admin" )
        <i class="fa-solid fa-user-shield pr-2"></i>
    @elseif( $role->name==="staff" )
        <i class="fa-solid fa-user-tie pr-2"></i>
    @elseif( $role->name==="client" )
        <i class="fa-solid fa-user pr-2"></i>
    @else
        <i class="fa-solid fa-question pr-2"></i>
    @endif

    @if ( $role )
        {{ $role->name }}
    @else
        No Role
    @endif

 </span>
