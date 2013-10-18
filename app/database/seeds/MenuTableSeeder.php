<?php

class MenuTableSeeder extends Seeder
{

    public function run()
    {
        $items = array(
            array(
                'title' => 'Oferta',
                'pagelink' => 'oferta.html',
                'lang' => 'pl',
                'layout' => 'home',
                'mainpage' => 1,
                'content' => '
                    <h3>Nasze Produkty</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                        dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                        incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
                        vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum
                        qui dolorem eum fugiat quo voluptas nulla pariatur
                    </p>
                    <a class="btn btn-sm btn-info" href="#">Czytaj więcej</a>
                '
            ),
            array(
                'title' => 'Produkty',
                'pagelink' => 'produkty.html',
                'lang' => 'pl',
                'layout' => 'products',
                'mainpage' => 0,
                'content' => '<h3>Produkty</h3>'
            ),
            array(
                'title' => 'Galeria',
                'pagelink' => 'galeria.html',
                'lang' => 'pl',
                'layout' => 'gallery',
                'mainpage' => 0,
                'content' => '<h3>Galeria</h3>'
            ),
            array(
                'title' => 'Kontakt',
                'pagelink' => 'kontakt.html',
                'lang' => 'pl',
                'layout' => 'contact',
                'mainpage' => 0,
                'content' => '
                        <div>
                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                            <address>
                                <strong>Full Name</strong><br>
                                <a href="mailto:#">first.last@example.com</a>
                            </address>
                        </div>
                        <br/>
                        <iframe width="570" height="230" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                src="https://www.google.pl/maps?t=m&amp;q=4112+La+Cienega+Blvd,+Los+Angeles,+CA+90056,+Stany+Zjednoczone&amp;ie=UTF8&amp;hq=&amp;hnear=4112+La+Cienega+Blvd,+Los+Angeles,+California+90056,+Stany+Zjednoczone&amp;ll=34.012048,-118.373152&amp;spn=0.2358,0.445976&amp;z=12&amp;output=embed"></iframe>
                '
            ),
            array(
                'title' => 'Offer',
                'pagelink' => 'offer.html',
                'lang' => 'gb',
                'mainpage' => 1,
                'layout' => 'home',
                'content' => '
                               <h3>Our Products</h3>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                   ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                   fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                   deserunt mollit anim id est laborum.
                               </p>
                               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                   rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                   explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                   consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                   dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                   incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                   exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
                                   vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum
                                   qui dolorem eum fugiat quo voluptas nulla pariatur
                               </p>
                               <a class="btn btn-sm btn-info" href="#">{{Lang::get(\'buttons.readmore\')}}</a>
                           '
            ),
            array(
                'title' => 'Våra produkter',
                'pagelink' => 'vara-produkter.html',
                'lang' => 'se',
                'mainpage' => 1,
                'layout' => 'home',
                'content' => '
                               <h3>Våra produkter</h3>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                   ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                   fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                   deserunt mollit anim id est laborum.
                               </p>
                               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                   rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                   explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                   consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                   dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                   incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                   exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
                                   vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum
                                   qui dolorem eum fugiat quo voluptas nulla pariatur
                               </p>
                               <a class="btn btn-sm btn-info" href="#">{{Lang::get(\'buttons.readmore\')}}</a>
                           '
            ),
        );

        DB::table('menu')->insert($items);

    }

}