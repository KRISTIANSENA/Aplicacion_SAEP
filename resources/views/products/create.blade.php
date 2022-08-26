@extends('products.index')
@section('content')

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add & Edit Products | UBold - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css-->
    <link href="styles/style/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/style/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/style/css/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="styles/style/css/quill.snow.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Add / Edit Product</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add / Edit Product</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="product-name" class="form-control" placeholder="e.g : Apple iMac">
                                </div>

                                <div class="mb-3">
                                    <label for="product-reference" class="form-label">Reference <span class="text-danger">*</span></label>
                                    <input type="text" id="product-reference" class="form-control" placeholder="e.g : Apple iMac">
                                </div>

                                <div class="mb-3">
                                    <label for="product-description" class="form-label">Product Description <span class="text-danger">*</span></label>
                                    <div id="snow-editor" style="height: 150px;"></div> <!-- end Snow-editor-->
                                </div>

                                <div class="mb-3">
                                    <label for="product-summary" class="form-label">Product Summary</label>
                                    <textarea class="form-control" id="product-summary" rows="3" placeholder="Please enter summary"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="product-category" class="form-label">Categories <span class="text-danger">*</span></label>
                                    <select class="form-control select2" id="product-category">
                                        <option>Select</option>
                                        <optgroup label="Shopping">
                                            <option value="SH1">Shopping 1</option>
                                            <option value="SH2">Shopping 2</option>
                                            <option value="SH3">Shopping 3</option>
                                            <option value="SH4">Shopping 4</option>
                                        </optgroup>
                                        <optgroup label="CRM">
                                            <option value="CRM1">Crm 1</option>
                                            <option value="CRM2">Crm 2</option>
                                            <option value="CRM3">Crm 3</option>
                                            <option value="CRM4">Crm 4</option>
                                        </optgroup>
                                        <optgroup label="eCommerce">
                                            <option value="E1">eCommerce 1</option>
                                            <option value="E2">eCommerce 2</option>
                                            <option value="E3">eCommerce 3</option>
                                            <option value="E4">eCommerce 4</option>
                                        </optgroup>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="product-price">Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="product-price" placeholder="Enter amount">
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2">Status <span class="text-danger">*</span></label>
                                    <br/>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" name="radioInline" value="option1" id="inlineRadio1" checked>
                                            <label class="form-check-label" for="inlineRadio1">Online</label>
                                        </div>
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" name="radioInline" value="option2" id="inlineRadio2">
                                            <label class="form-check-label" for="inlineRadio2">Offline</label>
                                        </div>
                                        <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" name="radioInline" value="option3" id="inlineRadio3">
                                            <label class="form-check-label" for="inlineRadio3">Draft</label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="form-label">Comment</label>
                                    <textarea class="form-control" rows="3" placeholder="Please enter comment"></textarea>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>

                                <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                      data-upload-preview-template="#uploadPreviewTemplate">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>

                                    <div class="dz-message needsclick">
                                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                                        <h3>Drop files here or click to upload.</h3>
                                        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                    </div>
                                </form>

                                <!-- Preview -->
                                <div class="dropzone-previews mt-3" id="file-previews"></div>
                            </div>
                        </div> <!-- end col-->

                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Meta Data</h5>

                                <div class="mb-3">
                                    <label for="product-meta-title" class="form-label">Meta title</label>
                                    <input type="text" class="form-control" id="product-meta-title" placeholder="Enter title">
                                </div>

                                <div class="mb-3">
                                    <label for="product-meta-keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" id="product-meta-keywords" placeholder="Enter keywords">
                                </div>

                                <div>
                                    <label for="product-meta-description" class="form-label">Meta Description </label>
                                    <textarea class="form-control" rows="5" id="product-meta-description" placeholder="Please enter description"></textarea>
                                </div>
                            </div>
                        </div> <!-- end card -->

                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="text-center mb-3">
                            <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                            <button type="button" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                            <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <!-- file preview template -->
                <div class="d-none" id="uploadPreviewTemplate">
                    <div class="card mt-1 mb-0 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                    <p class="mb-0" data-dz-size></p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                        <i class="dripicons-cross"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                    <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                    <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                    <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-0">
            <div class="tab-pane" id="chat-tab" role="tabpanel">

                <form class="search-bar p-3">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>

                <h6 class="fw-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                        <span class="mb-0 mt-1">App Development</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                        <span class="mb-0 mt-1">Office Work</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i>
                        <span class="mb-0 mt-1">Personal Group</span>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item ps-3 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline me-1"></i>
                        <span class="mb-0 mt-1">Freelance</span>
                    </a>
                </div>

                <h6 class="fw-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status busy"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <h6 class="fw-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                <div class="p-2 pb-4">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status busy"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start noti-user-item">
                            <div class="position-relative me-2">
                                <img src="assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                <i class="mdi mdi-circle user-status away"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="text-center mt-3">
                        <a href="javascript:void(0);" class="btn btn-sm btn-white">
                            <i class="mdi mdi-spin mdi-loading me-2"></i>
                            Load more
                        </a>
                    </div>
                </div>

            </div>

            <div class="tab-pane" id="tasks-tab" role="tabpanel">
                <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                <div class="px-2">
                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">App Development<span class="float-end">75%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Database Repair<span class="float-end">37%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Backup Create<span class="float-end">52%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>

                <h6 class="fw-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Sales Reporting<span class="float-end">12%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Redesign Website<span class="float-end">67%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">New Admin Design<span class="float-end">84%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>

                <div class="p-3 mt-2 d-grid">
                    <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Create Task</a>
                </div>

            </div>
            <div class="tab-pane active" id="settings-tab" role="tabpanel">
                <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                    <span class="d-block py-1">Theme Settings</span>
                </h6>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                               id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                               id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Width -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-width" value="fluid" id="fluid-check" checked />
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-width" value="boxed" id="boxed-check" />
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>

                    <!-- Menu positions -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="menu-position" value="fixed" id="fixed-check"
                               checked />
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="menu-position" value="scrollable"
                               id="scrollable-check" />
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light-check" />
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark-check" checked/>
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand-check" />
                        <label class="form-check-label" for="brand-check">Brand</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient-check" />
                        <label class="form-check-label" for="gradient-check">Gradient</label>
                    </div>

                    <!-- size -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                               id="default-size-check" checked />
                        <label class="form-check-label" for="default-size-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                               id="condensed-check" />
                        <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                               id="compact-check" />
                        <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                    </div>

                    <!-- User info -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="sidebar-user" value="fixed" id="sidebaruser-check" />
                        <label class="form-check-label" for="sidebaruser-check">Enable</label>
                    </div>


                    <!-- Topbar -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                               checked />
                        <label class="form-check-label" for="darktopbar-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                        <label class="form-check-label" for="lighttopbar-check">Light</label>
                    </div>


                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                        <a href="https://1.envato.market/uboldadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>

                </div>

            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- App js -->
<script src="styles/style/js/vendor.min.js"></script>

<!-- Select2 js-->
<script src="styles/style/min/select2.min.js"></script>
<!-- Dropzone file uploads-->
<script src="styles/style/min/dropzone.min.js"></script>

<!-- Quill js -->
<script src="styles/style/min/quill.min.js"></script>

<!-- Init js-->
<script src="styles/style/js/form-fileuploads.init.js"></script>

<!-- Init js -->
<script src="styles/style/js/add-product.init.js"></script>

<!-- App js -->
<script src="styles/style/min/app.min.js"></script>

</body>
</html>


@endsection


