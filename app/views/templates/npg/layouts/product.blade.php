@extends('templates.npg.layout')

@section('content')

<div id="portfolio_tem">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section_header">
                <h3>Oferta Przestronnego apartamentu</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 left_box">
                <div class="big">
                    <img src="/templates/npg/img/folio_item1.png" class="img-responsive">
                    <img src="/templates/npg/img/folio_item2.png" class="img-responsive">
                    <img src="/templates/npg/img/folio_item1.png" class="img-responsive">
                    <img src="/templates/npg/img/folio_item2.png" class="img-responsive">
                </div>
                <div class="thumbs">
                    <div class="thumb">
                        <img src="/templates/npg/img/folio_thumb1.png">
                        <a href="portfolio-item.html#" class="mask">
                            <div class="more">+</div>
                        </a>
                    </div>
                    <div class="thumb">
                        <img src="/templates/npg/img/folio_thumb2.png">
                        <a href="portfolio-item.html#" class="mask">
                            <div class="more">+</div>
                        </a>
                    </div>
                    <div class="thumb">
                        <img src="/templates/npg/img/folio_thumb1.png">
                        <a href="portfolio-item.html#" class="mask">
                            <div class="more">+</div>
                        </a>
                    </div>
                    <div class="thumb last">
                        <img src="/templates/npg/img/folio_thumb2.png">
                        <a href="portfolio-item.html#" class="mask">
                            <div class="more">+</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 right_box">
                <h2>Lorem Ipsum Item</h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected ones humour, or these random words which don’t look even slightly for believable.</p>

                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected ones humour, or these random words which don’t look even slightly for believable. If you are going to use a passage of Lorem Ipsum, you needs to been sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined. There majority have suffered. If you are going to use a passage of Lorem Ipsum, you needs to been sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected ones humour, or these random words which don’t look even slightly for believable.</p>
            </div>
        </div>
<div id="blog_post">
        <div class="new_comment">
             <h4>Umów się na oglądanie tej oferty</h4>
             <form>
                 <div class="row">
                     <div class="col-sm-6">
                         <input type="text" placeholder="Imię" name="name" class="form-control"/>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" placeholder="Email" name="email" class="form-control"/>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <textarea placeholder="Komentarz" rows="7" class="form-control"></textarea>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <a href="blogpost.html#" class="btn send">Wyślij</a>
                     </div>
                 </div>
             </form>
         </div>
         </div>

    </div>
</div>

@stop