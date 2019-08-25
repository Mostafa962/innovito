<script>
    $(document).ready(function(){
        $(".media_{{$name}}_select").imagepicker(
            {
                show_label: true
            }
        )
        $( ".media_{{$name}}_select" ).change(function() {
            $('#modal-default-{{$name}}').modal('hide');
            $(".{{$name}}_chosen").html($(" .media_{{$name}}_select option:selected").text());
        });

    });
</script>
