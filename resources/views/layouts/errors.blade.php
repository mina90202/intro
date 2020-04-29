
@if(Session::has('contact'))
<script>
    swal('done!', '{{Session::get("contact")}}', 'success' );
</script>
@endif


@if(Session::has('subscribe'))
<script>
    swal('done!', '{{Session::get("subscribe")}}', 'success' );
</script>
@endif
