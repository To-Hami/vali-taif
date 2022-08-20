@foreach ($admin->roles as $role)
    <h5 ><span class="badge badge-primary"  style="background-color: #0C6476 !important; color: white !important; border: none !important;" >{{ $role->name }}</span></h5>
@endforeach
