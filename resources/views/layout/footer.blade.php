<footer class="footer_section section_wrapper section_wrapper" >
        <div class="footer_top_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text_widget footer_widget">
                        <div class="footer_widget_title"><h2>About Sports Mag</h2></div>

                         <div class="footer_widget_content">Collaborativelyadministrate empowered marketsplug-and-play networks. Dynamic procrastinate after.marketsplug-and-play networks. Dynamic procrastinate users after. Dynamic procrastinateafter. marketsplug-and-play networks. Dynamic procrastinate users after...
                        </div>
                        </div><!--text_widget-->
                    </div><!--col-xs-3-->

                    <div class="col-md-6">
                        <div class="footer_widget">
                            <div class="footer_widget_title"><h2>Categories</h2></div>
                            <div class="footer_menu_item ">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="nav navbar-nav ">
                                        @foreach ($categories as $categorie)
                                        <li><a href="categories/{{$categorie->id}}/{{$categorie->alias}}">{{$categorie->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div><!--col-sm-4-->
                              </div><!--row-->
                          </div><!--footer_menu_item-->
                        </div><!--footer_widget-->
                    </div><!--col-xs-6-->


                </div><!--row-->
            </div><!--container-->
        </div><!--footer_top_section-->
        <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

        <div class="copyright-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                                Editor: Joshep guinter Grunt
                        </div><!--col-xs-3-->
                        <div class="col-md-6">
                            <div class="copyright">
                            © Copyright 2015 - Sports News Mag.com. Design by: <a href="https://uiCookies.com" title="uiCookies">uiCookies</a>
                            </div>
                        </div><!--col-xs-6-->
                        <div class="col-md-3">
                            Sports News Magazine
                        </div><!--col-xs-3-->
                    </div><!--row-->
                </div><!--container-->
            </div><!--copyright-section-->
    </footer>
