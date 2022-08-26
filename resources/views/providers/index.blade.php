@extends('layouts.app')
@section('content')

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CRM Contacts | UBold - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="styles/style/img/favicon.ico">

    <!-- Bootstrap css -->
    <link href="styles/style/min/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="styles/style/min/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <!-- icons -->
    <link href="styles/style/min/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="styles/style/js/head.js"></script>

</head>

<!-- body start -->
<body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

<!-- Begin page -->
<div id="wrapper">




    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="h-100" data-simplebar>

            <!-- User box -->
            <div class="user-box text-center">
                <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                     class="rounded-circle avatar-md">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                       data-bs-toggle="dropdown">Geneva Kennedy</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user me-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings me-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock me-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out me-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </div>
                <p class="text-muted">Admin Head</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="#sidebarDashboards" data-bs-toggle="collapse">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span class="badge bg-info rounded-pill float-end">4</span>
                            <span> Dashboards </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="dashboard-2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="dashboard-3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="dashboard-4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title mt-2">Apps</li>

                    <li>
                        <a href="apps-calendar.html">
                            <i class="mdi mdi-calendar"></i>
                            <span> Calendar </span>
                        </a>
                    </li>

                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> Chat </span>
                        </a>
                    </li>

                    <li>
                        <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                            <i class="mdi mdi-cart-outline"></i>
                            <span> Ecommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="ecommerce-dashboard.html">Dashboard</a>
                                </li>
                                <li>
                                    <a href="ecommerce-products.html">Products</a>
                                </li>
                                <li>
                                    <a href="ecommerce-product-detail.html">Product Detail</a>
                                </li>
                                <li>
                                    <a href="ecommerce-product-edit.html">Add Product</a>
                                </li>
                                <li>
                                    <a href="ecommerce-customers.html">Customers</a>
                                </li>
                                <li>
                                    <a href="ecommerce-orders.html">Orders</a>
                                </li>
                                <li>
                                    <a href="ecommerce-order-detail.html">Order Detail</a>
                                </li>
                                <li>
                                    <a href="ecommerce-sellers.html">Sellers</a>
                                </li>
                                <li>
                                    <a href="ecommerce-cart.html">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="ecommerce-checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarCrm" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span> CRM </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCrm">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="crm-dashboard.html">Dashboard</a>
                                </li>
                                <li>
                                    <a href="crm-contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="crm-opportunities.html">Opportunities</a>
                                </li>
                                <li>
                                    <a href="crm-leads.html">Leads</a>
                                </li>
                                <li>
                                    <a href="crm-customers.html">Customers</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarEmail" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="email-inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="email-read.html">Read Email</a>
                                </li>
                                <li>
                                    <a href="email-compose.html">Compose Email</a>
                                </li>
                                <li>
                                    <a href="email-templates.html">Email Templates</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="apps-social-feed.html">
                            <span class="badge bg-primary float-end">Hot</span>
                            <i class="mdi mdi-rss"></i>
                            <span> Social Feed </span>
                        </a>
                    </li>

                    <li>
                        <a href="apps-companies.html">
                            <i class="mdi mdi-domain"></i>
                            <span> Companies </span>
                        </a>
                    </li>

                    <li>
                        <a href="#sidebarProjects" data-bs-toggle="collapse">
                            <i class="mdi mdi-briefcase-check-outline"></i>
                            <span> Projects </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProjects">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="project-list.html">List</a>
                                </li>
                                <li>
                                    <a href="project-detail.html">Detail</a>
                                </li>
                                <li>
                                    <a href="project-create.html">Create Project</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarTasks" data-bs-toggle="collapse">
                            <i class="mdi mdi-clipboard-multiple-outline"></i>
                            <span> Tasks </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTasks">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="task-list.html">List</a>
                                </li>
                                <li>
                                    <a href="task-details.html">Details</a>
                                </li>
                                <li>
                                    <a href="task-kanban-board.html">Kanban Board</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarContacts" data-bs-toggle="collapse">
                            <i class="mdi mdi-book-account-outline"></i>
                            <span> Contacts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarContacts">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="contacts-list.html">Members List</a>
                                </li>
                                <li>
                                    <a href="contacts-profile.html">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarTickets" data-bs-toggle="collapse">
                            <i class="mdi mdi-lifebuoy"></i>
                            <span> Tickets </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTickets">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="tickets-list.html">List</a>
                                </li>
                                <li>
                                    <a href="tickets-detail.html">Detail</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="apps-file-manager.html">
                            <i class="mdi mdi-folder-star-outline"></i>
                            <span> File Manager </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Custom</li>

                    <li>
                        <a href="#sidebarAuth" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-circle-outline"></i>
                            <span> Auth Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarAuth">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="auth-login.html">Log In</a>
                                </li>
                                <li>
                                    <a href="auth-login-2.html">Log In 2</a>
                                </li>
                                <li>
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li>
                                    <a href="auth-register-2.html">Register 2</a>
                                </li>
                                <li>
                                    <a href="auth-signin-signup.html">Signin - Signup</a>
                                </li>
                                <li>
                                    <a href="auth-signin-signup-2.html">Signin - Signup 2</a>
                                </li>
                                <li>
                                    <a href="auth-recoverpw.html">Recover Password</a>
                                </li>
                                <li>
                                    <a href="auth-recoverpw-2.html">Recover Password 2</a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                                </li>
                                <li>
                                    <a href="auth-logout.html">Logout</a>
                                </li>
                                <li>
                                    <a href="auth-logout-2.html">Logout 2</a>
                                </li>
                                <li>
                                    <a href="auth-confirm-mail.html">Confirm Mail</a>
                                </li>
                                <li>
                                    <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarExpages" data-bs-toggle="collapse">
                            <i class="mdi mdi-text-box-multiple-outline"></i>
                            <span> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarExpages">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="pages-starter.html">Starter</a>
                                </li>
                                <li>
                                    <a href="pages-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="pages-sitemap.html">Sitemap</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-faqs.html">FAQs</a>
                                </li>
                                <li>
                                    <a href="pages-search-results.html">Search Results</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-maintenance.html">Maintenance</a>
                                </li>
                                <li>
                                    <a href="pages-coming-soon.html">Coming Soon</a>
                                </li>
                                <li>
                                    <a href="pages-gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="pages-404.html">Error 404</a>
                                </li>
                                <li>
                                    <a href="pages-404-two.html">Error 404 Two</a>
                                </li>
                                <li>
                                    <a href="pages-404-alt.html">Error 404-alt</a>
                                </li>
                                <li>
                                    <a href="pages-500.html">Error 500</a>
                                </li>
                                <li>
                                    <a href="pages-500-two.html">Error 500 Two</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarLayouts" data-bs-toggle="collapse">
                            <i class="mdi mdi-cellphone-link"></i>
                            <span class="badge bg-info float-end">New</span>
                            <span> Layouts </span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="layouts-horizontal.html">Horizontal</a>
                                </li>
                                <li>
                                    <a href="layouts-detached.html">Detached</a>
                                </li>
                                <li>
                                    <a href="layouts-two-column.html">Two Column Menu</a>
                                </li>
                                <li>
                                    <a href="layouts-two-tone-icons.html">Two Tones Icons</a>
                                </li>
                                <li>
                                    <a href="layouts-preloader.html">Preloader</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title mt-2">Components</li>

                    <li>
                        <a href="#sidebarBaseui" data-bs-toggle="collapse">
                            <i class="mdi mdi-black-mesa"></i>
                            <span> Base UI </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarBaseui">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-avatars.html">Avatars</a>
                                </li>
                                <li>
                                    <a href="ui-portlets.html">Portlets</a>
                                </li>
                                <li>
                                    <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="ui-offcanvas.html">Offcanvas</a>
                                </li>
                                <li>
                                    <a href="ui-placeholders.html">Placeholders</a>
                                </li>
                                <li>
                                    <a href="ui-spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="ui-images.html">Images</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="ui-video.html">Embed Video</a>
                                </li>
                                <li>
                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="ui-ribbons.html">Ribbons</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips-popovers.html">Tooltips & Popovers</a>
                                </li>
                                <li>
                                    <a href="ui-general.html">General UI</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarExtendedui" data-bs-toggle="collapse">
                            <i class="mdi mdi-layers-outline"></i>
                            <span class="badge bg-primary float-end">Hot</span>
                            <span> Extended UI </span>
                        </a>
                        <div class="collapse" id="sidebarExtendedui">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="extended-nestable.html">Nestable List</a>
                                </li>
                                <li>
                                    <a href="extended-range-slider.html">Range Slider</a>
                                </li>
                                <li>
                                    <a href="extended-dragula.html">Dragula</a>
                                </li>
                                <li>
                                    <a href="extended-animation.html">Animation</a>
                                </li>
                                <li>
                                    <a href="extended-sweet-alert.html">Sweet Alert</a>
                                </li>
                                <li>
                                    <a href="extended-tour.html">Tour Page</a>
                                </li>
                                <li>
                                    <a href="extended-scrollspy.html">Scrollspy</a>
                                </li>
                                <li>
                                    <a href="extended-loading-buttons.html">Loading Buttons</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="widgets.html">
                            <i class="mdi mdi-gift-outline"></i>
                            <span> Widgets </span>
                        </a>
                    </li>

                    <li>
                        <a href="#sidebarIcons" data-bs-toggle="collapse">
                            <i class="mdi mdi-bullseye"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="icons-material-symbols.html">Material Symbols </a>
                                </li>
                                <li>
                                    <a href="icons-two-tone.html">Two Tone Icons</a>
                                </li>
                                <li>
                                    <a href="icons-feather.html">Feather Icons</a>
                                </li>
                                <li>
                                    <a href="icons-mdi.html">Material Design Icons</a>
                                </li>
                                <li>
                                    <a href="icons-dripicons.html">Dripicons</a>
                                </li>
                                <li>
                                    <a href="icons-font-awesome.html">Font Awesome 5</a>
                                </li>
                                <li>
                                    <a href="icons-themify.html">Themify</a>
                                </li>
                                <li>
                                    <a href="icons-simple-line.html">Simple Line</a>
                                </li>
                                <li>
                                    <a href="icons-weather.html">Weather</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarForms" data-bs-toggle="collapse">
                            <i class="mdi mdi-bookmark-multiple-outline"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="forms-elements.html">General Elements</a>
                                </li>
                                <li>
                                    <a href="forms-advanced.html">Advanced</a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="forms-pickers.html">Pickers</a>
                                </li>
                                <li>
                                    <a href="forms-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="forms-masks.html">Masks</a>
                                </li>
                                <li>
                                    <a href="forms-quilljs.html">Quilljs Editor</a>
                                </li>
                                <li>
                                    <a href="forms-file-uploads.html">File Uploads</a>
                                </li>
                                <li>
                                    <a href="forms-x-editable.html">X Editable</a>
                                </li>
                                <li>
                                    <a href="forms-image-crop.html">Image Crop</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarTables" data-bs-toggle="collapse">
                            <i class="mdi mdi-table"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatables.html">Data Tables</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Editable Tables</a>
                                </li>
                                <li>
                                    <a href="tables-responsive.html">Responsive Tables</a>
                                </li>
                                <li>
                                    <a href="tables-footables.html">FooTable</a>
                                </li>
                                <li>
                                    <a href="tables-bootstrap.html">Bootstrap Tables</a>
                                </li>
                                <li>
                                    <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                </li>
                                <li>
                                    <a href="tables-jsgrid.html">JsGrid Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarCharts" data-bs-toggle="collapse">
                            <i class="mdi mdi-poll"></i>
                            <span> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="charts-apex.html">Apex Charts</a>
                                </li>
                                <li>
                                    <a href="charts-flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="charts-morris.html">Morris Charts</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">Chartjs Charts</a>
                                </li>
                                <li>
                                    <a href="charts-peity.html">Peity Charts</a>
                                </li>
                                <li>
                                    <a href="charts-chartist.html">Chartist Charts</a>
                                </li>
                                <li>
                                    <a href="charts-c3.html">C3 Charts</a>
                                </li>
                                <li>
                                    <a href="charts-sparklines.html">Sparklines Charts</a>
                                </li>
                                <li>
                                    <a href="charts-knob.html">Jquery Knob Charts</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarMaps" data-bs-toggle="collapse">
                            <i class="mdi mdi-map-outline"></i>
                            <span> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a href="maps-mapael.html">Mapael Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                            <i class="mdi mdi-share-variant"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultilevel">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                        Second Level <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarMultilevel2">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                        Third Level <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarMultilevel3">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                                    Item 2 <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMultilevel4">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="javascript: void(0);">Item 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                    <li class="breadcrumb-item active">Contacts</li>
                                </ol>
                            </div>
                            <h4 class="page-title"> Lista de empleados</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between mb-2">
                                    <div class="col-auto">
                                        <form>
                                            <div class="mb-2">
                                                <label for="inputPassword2" class="visually-hidden">Buscar</label>
                                                <input type="search" class="form-control" id="inputPassword2" placeholder="Buscar...">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            <button  <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                            <a href="{{ route('providers.create') }}" class="btn"><i class="mdi mdi-plus-circle me-1"></i>Crear nuevo Proveedor</a>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id de Proveedor  </th>
                                                <th>Nombre del proveedor</th>
                                                <th>NIT</th>
                                                <th>Tipo de negocio</th>
                                                <th>Teléfono</th>
                                                <th>Dirección</th>
                                                <th>Localidad</th>
                                                <th>Método de transporte</th>
                                                <th>acciones </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($providers as $provider)
                                                <tr>
                                                    <td>{{$provider->id}}</td>
                                                    <td>{{$provider->provider_name}}</td>
                                                    <td>{{$provider->nit}}</td>
                                                    <td>{{$provider->business_type}}</td>
                                                    <td>{{$provider->telephone}}</td>
                                                    <td>{{$provider->address}}</td>
                                                    <td>{{$provider->place}}</td>
                                                    <td>{{$provider->metod_conveyance}}</td>
                                                    <td>
                                                        <form action="{{route('providers.destroy',$provider->id)}}" method="post" >
                                                            @csrf
                                                            <a href="{{route('providers.edit', $provider->id)}}">
                                                                <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>

                                                            <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                                                                @method('DELETE')
                                                            </button>
                                                            <a href="{{route('providers.show', $provider->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

                                                            </button>
                                                        </form>


                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                        </div> <!-- end card-->
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="">Coderthemes</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Modal -->
<div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Add Contacts</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter phone number">
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Location</label>
                        <input type="text" class="form-control" id="company" placeholder="Enter location">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Vendor js -->
<script src="styles/style/min/vendor.min.js"></script>

<!-- App js -->
<script src="styles/style/min/app.min.js"></script>

</body>
</html>


@endsection('content')
