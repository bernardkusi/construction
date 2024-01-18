@if(session('message'))
<div>
    <p class="pagemessage">
        {{ session('message') }}
    </p>
</div>
@endif