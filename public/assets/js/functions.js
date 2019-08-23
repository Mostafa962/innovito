/**
| Upload File directly from input field using ajax and FormData with no need to form tag
| Once you choose file it will upload it directly (or any event change happen to input file)
|
| *param  (string)   input_selector        => represents input field class or id
| *param  (string)   hidden_input_name     => represents input name which intended to be handled
| *param  (string)   route                 => represents ajax url to pass request to
| *param  (function) successCallBack(data) => represents ajax success request
| *param  (function) beforesendCallBack()  => represents ajax success request
|
| *return Ajax Response
|
| *ex <input id="input_selector" type="file" name="hidden_input_name" style="display:none"/>
|      var url = "{{route('en.profile.uploadProfileImage')}}";
|      function successProfile(data){ //code here }
**/
function ajaxUploadFileFromInput(input_selector, hidden_input_name, route, beforesendCallBack, successCallBack)
{
    $(input_selector).change(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var myFormData = new FormData();
        var file = $(this)[0].files[0];

        /* Handling when close files window without choosing any of them */
        if(file == "undefined")return ;

        myFormData.append(hidden_input_name, file);
        myFormData.append('_token', CSRF_TOKEN);

        $.ajax({
            url: route,
            method: 'POST',
            processData: false, // important
            contentType: false, // important
            data: myFormData,
            dataType : 'JSON',
            beforeSend: beforesendCallBack,
            success: successCallBack
        });
    });

}
