@extends('templates.rss.layout')

@section('content')

<div class="row">
    <br/>

    <div class="col-md-6">
        {{$content}}
    </div>
    <br/>
    <br/>
    <p style="text-align: justify;">{{Lang::get('label.contactus')}}</p>
    <div class="col-md-6 rss-shadowpanel">

        <br/>
        <br/>

        <form id="send-form">
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="subject" placeholder="{{Lang::get('label.subject')}}"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="name" placeholder="{{Lang::get('label.name')}}"/>
            </div>
            <div class="form-group">
                <input type="email" class="form-control input-lg" name="email" placeholder="{{Lang::get('label.email')}}"/>
            </div>

            <div class="form-group">
                <textarea class="form-control input-lg" name="mailmessage" placeholder="{{Lang::get('label.message')}}"></textarea>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-lg btn-info" id="btn-send-form">{{Lang::get('buttons.send')}}</a>
            </div>
        </form>
        <br/>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#btn-send-form').click(function()
        {
            $.ajax({
                url: "/sendForm.html",
                type: 'post',
                success: function(resp)
                {
                    var response = JSON.parse(resp);

                    $.each($("#send-form div"), function(key, item){
                        $(item).removeClass('has-error');
                    });

                    if($.isEmptyObject(response) == false)
                    {
                        $.each(response, function(key, value){
                            console.log(key, value);
                           $("#send-form :input[name='" + key + "']").parent().addClass('has-error');
                        });
                    }
                    else
                    {
                        $('#send-form').get(0).reset();
                        alert('{{Lang::get('label.send')}}');
                    }
                },
                data: $('#send-form').serialize()
            });
        })
    });
</script>

@stop