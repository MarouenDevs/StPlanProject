 <ul class="topmenu topmenu-responsive" data-toggle="menu">
                    <li >
                        <a href="{{URL::route('home')}}" data-target="#dashboard" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screen"></i></span>
                            <span class="text">Tableau de bord</span>

                        </a>

                    </li>
                    <li >
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-folder5"></i></span>
                            <span class="text">Mes programmes</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Components</li>
                            <li >
                                <a href="{{URL::route('allProgramme')}}">
                                    <span class="text">Liste des programmes</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="component-animation.html">
                                    <span class="text">Ajouter un programme</span>
                                </a>
                            </li>

                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
  <li >
                        <a href="javascript:void(0);" data-target="#components2" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-files"></i></span>
                            <span class="text">Mes Documents</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components2" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Components</li>
                            <li >
                                <a href="component-sortable.html">
                                    <span class="text">Liste documents</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="component-animation.html">
                                    <span class="text">Ajouter un document</span>
                                </a>
                            </li>

                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                </ul>