 <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone - HTML Admin Template" class="w-6" src=" {{asset('dist/images/logo.svg')}} ">
                    <span class="hidden xl:block text-white text-lg ml-3"> UOR - NMIS </span> 
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="javascript:;.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                       
                    </li>
                        <li>
                        <li class="side-nav__devider my-6"></li>
                    </li> 


                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="side-menu__title">
                                Manage User
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('user.view')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                                    <div class="side-menu__title"> View users </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('users.add')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user-plus"></i> </div>
                                    <div class="side-menu__title"> Add User </div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <li class="side-nav__devider my-6"></li>
                    </li>
                    <li>
                         <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="command"></i> </div>
                            <div class="side-menu__title">
                                Employee Module
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>

                        <ul class="">
                            <li>
                                <a href="{{ route('attendance.view')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                                    <div class="side-menu__title"> Attendance </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="smile"></i> </div>
                                    <div class="side-menu__title"> Promotion </div>
                                </a>
                            </li>

                              <li>
                                <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user-minus"></i> </div>
                                    <div class="side-menu__title"> Leave </div>
                                </a>
                            </li>
                           
                        </ul>
                        
                    </li>
                       
                     <li>
                        <li class="side-nav__devider my-6"></li>
                    </li>
                    <li>
                        <a href="" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="phone-outgoing"></i> </div>
                            <div class="side-menu__title"> Request Module </div>
                        </a>
                        
                    </li>

                           <li>
                        <li class="side-nav__devider my-6"></li>
                    </li>
                    <li>
                        <a href="" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="frown"></i> </div>
                            <div class="side-menu__title"> Complaint Module </div>
                        </a>
                        
                    </li>

                        <li>
                        <li class="side-nav__devider my-6"></li>
                    </li>
                    <li>
                        <a href="" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="star"></i> </div>
                            <div class="side-menu__title"> Rave Module </div>
                        </a>
                        
                    </li>

                      <li>
                        <li class="side-nav__devider my-6"></li>
                    </li>
                    <li>
                        <a href="" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="instagram"></i> </div>
                            <div class="side-menu__title"> Social Group </div>
                        </a>
                        
                    </li>

                      <li>
                        <li class="side-nav__devider my-6"></li>
                    </li>
                    <li>
                        <a href="" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="smartphone"></i> </div>
                            <div class="side-menu__title"> Mobile App </div>
                        </a>
                        
                    </li>


                </ul>
            </nav>