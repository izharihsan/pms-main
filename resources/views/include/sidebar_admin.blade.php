<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar header -->
    <div class="sidebar-section bg-black bg-opacity-10 border-bottom border-bottom-white border-opacity-10">
        <div class="sidebar-logo d-flex justify-content-center align-items-center">
            <a href="index.html" class="d-inline-flex align-items-center py-2">
                <img src="{{ asset('assets/images/logo_icon.svg')}}" class="sidebar-logo-icon" alt="">
                <img src="{{ asset('assets/images/logo_text_light.svg')}}" class="sidebar-resize-hide ms-3" height="14" alt="">
            </a>

            <div class="sidebar-resize-hide ms-auto">
                <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                    <i class="ph-arrows-left-right"></i>
                </button>

                <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                    <i class="ph-x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- /sidebar header -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Customers -->
        <div class="sidebar-section sidebar-resize-hide dropdown mx-2">
            <a href="#" class="btn btn-link text-body text-start lh-1 dropdown-toggle p-2 my-1 w-100" data-bs-toggle="dropdown" data-color-theme="dark">
                <div class="hstack gap-2 flex-grow-1 my-1">
                    <img src="{{ Auth::user()->avatar }}" class="w-32px h-32px" alt="">
                    <div class="me-auto">
                        <div class="fs-sm text-white opacity-75 mb-1">{{ Auth::user()->company_name }}</div>
                        <div class="fw-semibold">{{ Auth::user()->name }}</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- /customers -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard
                            <span class="d-block fw-normal opacity-50">No pending orders</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.room-management.index') }}" class="nav-link @yield('room_management')">
                        <i class="ph-bed"></i>
                        <span>
                            Room Management
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.rate_plan.index') }}" class="nav-link @yield('rate_plan')">
                        <i class="ph-article"></i>
                        <span>
                            Rate Plan
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.room-rates.index') }}" class="nav-link @yield('room_rates')">
                        <i class="ph-bookmarks-simple"></i>
                        <span>
                            Room Rates
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.room_availability.index') }}" class="nav-link @yield('room_availability')">
                        <i class="ph-book"></i>
                        <span>
                            Room Availability
                        </span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.report.index') }}" class="nav-link @yield('report')">
                        <i class="ph-calendar-check"></i>
                        <span>
                            Report
                        </span>
                    </a>
                </li> --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-layout"></i>
                        <span>Report</span>
                    </a>
                    <ul class="nav-group-sub collapse show" style="">
                        <li class="nav-item"><a href="{{ route('admin.report.activity') }}" class="nav-link @yield('report')">Log Activity</a></li>
                        <li class="nav-item"><a href="{{ route('admin.report.roomRate') }}" class="nav-link @yield('report')">Room Rate</a></li>
                        <li class="nav-item"><a href="{{ route('admin.report.ratePlan') }}" class="nav-link @yield('report')">Rate Plan</a></li>
                        <li class="nav-item"><a href="{{ route('admin.report.roomAvailability') }}" class="nav-link @yield('report')">Room Availability</a></li>
                    </ul>
                </li>

                {{-- <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-layout"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="../../layout_1/full/index.html" class="nav-link">Default layout</a></li>
                        <li class="nav-item"><a href="index.html" class="nav-link active">Layout 2</a></li>
                        <li class="nav-item"><a href="../../layout_3/full/index.html" class="nav-link">Layout 3</a></li>
                        <li class="nav-item"><a href="../../layout_4/full/index.html" class="nav-link">Layout 4</a></li>
                        <li class="nav-item"><a href="../../layout_5/full/index.html" class="nav-link">Layout 5</a></li>
                        <li class="nav-item"><a href="../../layout_6/full/index.html" class="nav-link">Layout 6</a></li>
                        <li class="nav-item"><a href="../../layout_7/full/index.html" class="nav-link disabled">Layout 7 <span class="badge align-self-center ms-auto">Coming soon</span></a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-swatches"></i>
                        <span>Themes</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
                        <li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link disabled">Material <span class="badge align-self-center ms-auto">Coming soon</span></a></li>
                        <li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge align-self-center ms-auto">Coming soon</span></a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-note-blank"></i>
                        <span>Starter kit</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="../seed/layout_static.html" class="nav-link">Static layout</a></li>
                        <li class="nav-item"><a href="../seed/layout_no_header.html" class="nav-link">No header</a></li>
                        <li class="nav-item"><a href="../seed/layout_no_footer.html" class="nav-link">No footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="../seed/layout_fixed_header.html" class="nav-link">Fixed header</a></li>
                        <li class="nav-item"><a href="../seed/layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="../seed/layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1 side</a></li>
                        <li class="nav-item"><a href="../seed/layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2 sides</a></li>
                        <li class="nav-item"><a href="../seed/layout_3_sidebars.html" class="nav-link">3 sidebars</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="../seed/layout_boxed_page.html" class="nav-link">Boxed page</a></li>
                        <li class="nav-item"><a href="../seed/layout_boxed_content.html" class="nav-link">Boxed content</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../../../../docs/other_changelog.html" class="nav-link">
                        <i class="ph-list-numbers"></i>
                        <span>Changelog</span>
                        <span class="badge bg-primary align-self-center rounded-pill ms-auto">4.0</span>
                    </a>
                </li> --}}

                <!-- Layout -->
                {{-- <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Layout</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-layout"></i>
                        <span>Page layouts</span>
                    </a>

                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="layout_static.html" class="nav-link">Static layout</a></li>
                        <li class="nav-item"><a href="layout_no_header.html" class="nav-link">No header</a></li>
                        <li class="nav-item"><a href="layout_no_footer.html" class="nav-link">No footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_fixed_header.html" class="nav-link">Fixed header</a></li>
                        <li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1 side</a></li>
                        <li class="nav-item"><a href="layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2 sides</a></li>
                        <li class="nav-item"><a href="layout_3_sidebars.html" class="nav-link">3 sidebars</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_boxed_page.html" class="nav-link">Boxed page</a></li>
                        <li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-columns"></i>
                        <span>Sidebars</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Main sidebar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="sidebar_default_resizable.html" class="nav-link">Resizable</a></li>
                                <li class="nav-item"><a href="sidebar_default_resized.html" class="nav-link">Resized</a></li>
                                <li class="nav-item"><a href="sidebar_default_collapsible.html" class="nav-link">Collapsible</a></li>
                                <li class="nav-item"><a href="sidebar_default_collapsed.html" class="nav-link">Collapsed</a></li>
                                <li class="nav-item"><a href="sidebar_default_hideable.html" class="nav-link">Hideable</a></li>
                                <li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Hidden</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_default_color_light.html" class="nav-link">Light color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Secondary sidebar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="sidebar_secondary_collapsible.html" class="nav-link">Collapsible</a></li>
                                <li class="nav-item"><a href="sidebar_secondary_collapsed.html" class="nav-link">Collapsed</a></li>
                                <li class="nav-item"><a href="sidebar_secondary_hideable.html" class="nav-link">Hideable</a></li>
                                <li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Right sidebar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="sidebar_right_collapsible.html" class="nav-link">Collapsible</a></li>
                                <li class="nav-item"><a href="sidebar_right_collapsed.html" class="nav-link">Collapsed</a></li>
                                <li class="nav-item"><a href="sidebar_right_hideable.html" class="nav-link">Hideable</a></li>
                                <li class="nav-item"><a href="sidebar_right_hidden.html" class="nav-link">Hidden</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Content sidebar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="sidebar_content_left.html" class="nav-link">Left aligned</a></li>
                                <li class="nav-item"><a href="sidebar_content_left_stretch.html" class="nav-link">Left stretched</a></li>
                                <li class="nav-item"><a href="sidebar_content_left_sections.html" class="nav-link">Left sectioned</a></li>
                                <li class="nav-item"><a href="sidebar_content_right.html" class="nav-link">Right aligned</a></li>
                                <li class="nav-item"><a href="sidebar_content_right_stretch.html" class="nav-link">Right stretched</a></li>
                                <li class="nav-item"><a href="sidebar_content_right_sections.html" class="nav-link">Right sectioned</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_content_color_dark.html" class="nav-link">Dark color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Sticky areas</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="sidebar_sticky_header.html" class="nav-link">Header</a></li>
                                <li class="nav-item"><a href="sidebar_sticky_footer.html" class="nav-link">Footer</a></li>
                                <li class="nav-item"><a href="sidebar_sticky_header_footer.html" class="nav-link">Header and footer</a></li>
                                <li class="nav-item"><a href="sidebar_sticky_custom.html" class="nav-link">Custom elements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-rows"></i>
                        <span>Navbars</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Single navbar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Bottom fixed</a></li>
                                <li class="nav-item"><a href="navbar_single_header_before.html" class="nav-link">Before page header</a></li>
                                <li class="nav-item"><a href="navbar_single_header_before_fixed.html" class="nav-link">Before page header fixed</a></li>
                                <li class="nav-item"><a href="navbar_single_header_after.html" class="nav-link">After page header</a></li>
                                <li class="nav-item"><a href="navbar_single_header_after_sticky.html" class="nav-link">After page header sticky</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Multiple navbars</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Top static</a></li>
                                <li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Top fixed</a></li>
                                <li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Bottom static</a></li>
                                <li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Multiple bottom fixed</a></li>
                                <li class="nav-item"><a href="navbar_multiple_top_bottom_fixed.html" class="nav-link">Top and bottom fixed</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Content navbar</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
                                <li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
                            </ul>
                        </li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
                        <li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
                        <li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-arrow-fat-lines-down"></i>
                        <span>Vertical navigation</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="navigation_vertical_styles.html" class="nav-link">Navigation styles</a></li>
                        <li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
                        <li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
                        <li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
                        <li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
                        <li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
                        <li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-arrow-fat-lines-right"></i>
                        <span>Horizontal navigation</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="navigation_horizontal_styles.html" class="nav-link">Navigation styles</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">Navigation elements</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="ph-arrow-elbow-down-right"></i> <span>Menu levels</span></a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Second level with child</a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Third level with child</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                    </ul>
                </li> --}}
                <!-- /layout -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
</div>
<!-- /main sidebar -->