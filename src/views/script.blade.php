@if ($nonce)
    <script nonce="{{ $nonce }}">
@else
    <script>
@endif
    $(document).ready(function(){
        $('#calendar-{{ $id }}').fullCalendar({!! $options !!});
    });
</script>
