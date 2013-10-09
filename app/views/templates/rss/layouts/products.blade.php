@extends('templates.rss.layout')

@section('content')

<style type="text/css">

    .asd {
        border-radius: 4px 4px 4px 4px;
        /*border-width: 1px;*/
        /*box-shadow: none;*/
        border: 1px solid #DDDDDD;
        border-top: none;
    }

    .asd>li {
        border-top: 1px solid #DDDDDD;
    }

</style>

<br/>
<br/>
<br/>
<div class="row">
    <div class="col-md-3">

@include('templates.rss.menu')
@yield('leftmenu')

    </div>

    <div class="col-md-6">
        <h3>Łyżka głęboka</h3>
        <br/>
        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
    </div>
</div>
<br/>
<br/>
<br/>
<br/>

@stop