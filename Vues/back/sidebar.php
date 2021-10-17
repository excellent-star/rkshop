<div id="sidebar-wrapper" class="waves-effect" data-simplebar>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <!-- <li class="list-header">Main Navigation ---</li> -->
                            <li class="active-link"><a href="index.html"><i class="material-icons">dashboard</i>Dashboard</a></li>
                            <li>
                                <a><i class="material-icons">email</i>Gestion des utilisateurs<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li><a href="mailDetails.html">Mailbox Details</a></li>
                                    <li><a href="compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">business</i>Parametrage<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="?p=<?= $fonction->double_cryptage("family");?>">Famille</a></li>
                                    <li><a href="?p=<?= $fonction->double_cryptage("sub_family");?>">Sous Famille</a></li>
                                    <li><a  href="?p=<?= $fonction->double_cryptage("category");?>">Catégorie</a></li>
                                    <li><a  href="?p=<?= $fonction->double_cryptage("brand");?>">Marque</a></li>
                                    <li><a  href="?p=<?= $fonction->double_cryptage("color");?>">Couleur</a></li>
                                   
                                    
                                    <li><a href="?p=<?= $fonction->double_cryptage("size");?>">Taille</a></li>
                                    <li><a href="?p=<?= $fonction->double_cryptage("shoeSize");?>"> Pointure</a></li>
                                   
                                </ul>
                            </li>
                            <li><a><i class="material-icons">text_format</i>Gestion des articles<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a  href="?p=<?= $fonction->double_cryptage("list_article_page");?>">Listes</a></li>
                                    <li><a href="?p=<?= $fonction->double_cryptage("add_article_page");?>">Ajouter</a></li>
                                    <!-- <li><a href="forms_editor_ck.html">CK Editor</a></li>
                                    <li><a href="forms_emoji.html">Forms Emoji</a></li> -->
                                </ul>
                            </li>
                            

                            
                           
                            <!-- <li class="list-divider"></li> -->
                           
                        </ul>
                        <!-- ./sidebar-nav -->
                    </div>
                    <!-- ./sidebar -->
                </div>
                <!-- ./sidebar-nav -->
            </div>