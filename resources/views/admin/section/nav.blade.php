

<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar ps-container ps-theme-default ps-active-y ps-active-x" data-ps-id="2c6f85a0-c663-8362-3eb6-c038a8dd2b48">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="in">
                <li class="sidebar-item selected">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('panel.website')}}" aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">{{$trans['Dashboard']}}</span>

                    </a>

                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-menu"></i>
                        <span class="hide-menu">{{$trans['Menu']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('menus.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu"> {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('menus.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu"> {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-menu"></i>
                        <span class="hide-menu">{{$trans['Page']}}  </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('pages.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('pages.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-cart-outline"></i>
                        <span class="hide-menu">{{$trans['Product']}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('products.create')}}" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu"> {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('products.index')}}" class="sidebar-link">
                                <i class="mdi mdi-cart"></i>
                                <span class="hide-menu"> {{$trans['Manage']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('product.factor.show')}}" class="sidebar-link">
                                <i class="mdi mdi-cart"></i>
                                <span class="hide-menu"> {{$trans['Factor']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-library-books"></i>
                        <span class="hide-menu">{{$trans['Article']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('articles.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('articles.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="hide-menu">{{$trans['New']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('informations.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('informations.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-broom"></i>
                        <span class="hide-menu">{{$trans['Service']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('services.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('services.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-broom"></i>
                        <span class="hide-menu">{{$trans['Portfolio']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('portfolios.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('portfolios.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-broom"></i>
                        <span class="hide-menu">{{$trans['Slider']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('carousells.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('carousells.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-broom"></i>
                        <span class="hide-menu">{{$trans['Partner']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('partners.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('partners.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-broom"></i>
                        <span class="hide-menu">{{$trans['Music']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('musics.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('musics.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-broom"></i>
                        <span class="hide-menu">{{$trans['Job']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('jobs.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('jobs.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">{{$trans['Doctor']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('doctors.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('doctors.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">{{$trans['Customer']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('customers.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('customers.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">{{$trans['Question']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('questions.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('questions.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">{{$trans['User']}} </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('users.create')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu">  {{$trans['Add']}}</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('users.index')}}" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu">  {{$trans['Manage']}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-apps"></i>
                        <span class="hide-menu">{{$trans['Setting']}}</span>
                    </a>

                    <ul aria-expanded="false" class="collapse first-level">


                        <li class="sidebar-item">
                            <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-inbox-arrow-down"></i>
                                <span class="hide-menu">{{$trans['Website']}} </span>
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">
                                <li class="sidebar-item">
                                    <a href="{{route('website.information.show')}}" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> {{$trans['GeneralInformation']}} </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="inbox-email-detail.html" class="sidebar-link">
                                        <i class="mdi mdi-email-alert"></i>
                                        <span class="hide-menu"> {{$trans['ManageEmail']}} </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('show.addon.list')}}" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> {{$trans['AddOnPage']}} </span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="sidebar-item">
                            <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-inbox-arrow-down"></i>
                                <span class="hide-menu">{{$trans['Language']}}</span>
                            </a>
                            <ul aria-expanded="false" class="collapse third-level">
                                <li class="sidebar-item">
                                    <a href="{{route('languages.create')}}" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu">  {{$trans['Add']}} </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('languages.index')}}" class="sidebar-link">
                                        <i class="mdi mdi-email-alert"></i>
                                        <span class="hide-menu">  {{$trans['Manage']}}  </span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="sidebar-item">
                            <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-inbox-arrow-down"></i>
                                <span class="hide-menu"> {{$trans['AdminPanel']}}</span>
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">

                                <li class="sidebar-item">
                                    <a href="{{route('options.show')}}" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> {{$trans['ListFeatureAdmin']}} </span>
                                    </a>
                                </li>



                            </ul>
                        </li>



                    </ul>






                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html" aria-expanded="false">
                        <i class="mdi mdi-adjust text-info"></i>
                        <span class="hide-menu">{{$trans['LogOut']}}</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->

    </div>
    <!-- End Sidebar scroll-->
</aside>