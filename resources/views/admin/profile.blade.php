@extends('layouts.admin')

@section('title', 'Profile')

@section('breadcrumb')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                User Pages - <span class="fw-normal">Profile</span>
            </h4>

            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                <div class="dropdown w-100 w-sm-auto">
                    <a href="#" class="d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2" data-bs-toggle="dropdown" data-bs-display="static">
                        <img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
                        <div class="me-auto me-lg-1">
                            <div class="fs-sm text-muted mb-1">Customer</div>
                            <div class="fw-semibold">Tesla Motors Inc</div>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0">
                        <div class="d-flex align-items-center p-3">
                            <h6 class="fw-semibold mb-0">Customers</h6>
                            <a href="#" class="ms-auto">
                                View all
                                <i class="ph-arrow-circle-right ms-1"></i>
                            </a>
                        </div>
                        <a href="#" class="dropdown-item active py-2">
                            <img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">Tesla Motors Inc</div>
                                <div class="fs-sm text-muted">42 users</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item py-2">
                            <img src="../../../assets/images/brands/debijenkorf.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">De Bijenkorf</div>
                                <div class="fs-sm text-muted">49 users</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item py-2">
                            <img src="../../../assets/images/brands/klm.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">Royal Dutch Airlines</div>
                                <div class="fs-sm text-muted">18 users</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item py-2">
                            <img src="../../../assets/images/brands/shell.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">Royal Dutch Shell</div>
                                <div class="fs-sm text-muted">54 users</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item py-2">
                            <img src="../../../assets/images/brands/bp.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">BP plc</div>
                                <div class="fs-sm text-muted">23 users</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="vr d-none d-sm-block flex-shrink-0 my-2 mx-3"></div>

                <div class="d-inline-flex mt-3 mt-sm-0">
                    <a href="#" class="status-indicator-container ms-1">
                        <img src="../../../assets/images/demo/users/face24.jpg" class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-warning"></span>
                    </a>
                    <a href="#" class="status-indicator-container ms-1">
                        <img src="../../../assets/images/demo/users/face1.jpg" class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>
                    <a href="#" class="status-indicator-container ms-1">
                        <img src="../../../assets/images/demo/users/face3.jpg" class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-danger"></span>
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3">
                        <i class="ph-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-expand-lg border-top py-2">
        <div class="container-fluid">
            <div class="breadcrumb py-2">
                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="#" class="breadcrumb-item">Home</a>
                <span class="breadcrumb-item active">Profile</span>
            </div>

            <div class="navbar-collapse collapse" id="profile_nav">
                <ul class="navbar-nav ms-lg-auto mt-2 mt-lg-0">
                    <li class="nav-item ms-lg-1">
                        <a href="#" class="navbar-nav-link rounded">
                            <i class="ph-note me-2"></i>
                            Notes
                        </a>
                    </li>
                    <li class="nav-item ms-lg-1">
                        <a href="#" class="navbar-nav-link rounded">
                            <i class="ph-users me-2"></i>
                            Friends
                        </a>
                    </li>
                    <li class="nav-item ms-lg-1">
                        <a href="#" class="navbar-nav-link rounded">
                            <i class="ph-image me-2"></i>
                            Photos
                        </a>
                    </li>
                    <li class="nav-item dropdown ms-lg-1">
                        <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ph-gear"></i>
                            <span class="d-lg-none ms-2">More</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <i class="ph-image me-2"></i>
                                Update cover
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-clipboard-text me-2"></i>
                                Update info
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-rows me-2"></i>
                                Manage sections
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="ph-activity me-2"></i>
                                Activity log
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-gear me-2"></i>
                                Profile settings
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="tab-content flex-1 order-2 order-lg-1">
    <div class="tab-pane fade" id="activity" role="tabpanel">

        <!-- Weekly stats -->
        <div class="card">
            <div class="card-header d-sm-flex">
                <h5 class="mb-0">Weekly statistics</h5>
                <div class="mt-2 mt-sm-0 ms-auto">
                    <span>
                        <i class="ph-clock-counter-clockwise me-1"></i>
                        Updated 2 hours ago
                    </span>
                </div>
            </div>

            <div class="card-body">
                <div class="chart-container">
                    <div class="chart has-fixed-height" id="tornado_negative_stack" _echarts_instance_="ec_1715056372593" style="position: relative;"><div style="position: relative; overflow: hidden; width: 100px; height: 400px; cursor: default;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" width="100" height="400" style="position:absolute;left:0;top:0;user-select:none"><rect width="100" height="400" x="0" y="0" id="0" fill="none" fill-opacity="1"></rect><g><path d="M81.1582 380l3.8418 0l0 -49.2857l-3.8418 0Z" fill="rgba(var(--white-rgb), .01)"></path><path d="M81.1582 330.7143l3.8418 0l0 -49.2857l-3.8418 0Z" fill="rgba(var(--black-rgb), .01)"></path><path d="M81.1582 281.4286l3.8418 0l0 -49.2857l-3.8418 0Z" fill="rgba(var(--white-rgb), .01)"></path><path d="M81.1582 232.1429l3.8418 0l0 -49.2857l-3.8418 0Z" fill="rgba(var(--black-rgb), .01)"></path><path d="M81.1582 182.8571l3.8418 0l0 -49.2857l-3.8418 0Z" fill="rgba(var(--white-rgb), .01)"></path><path d="M81.1582 133.5714l3.8418 0l0 -49.2857l-3.8418 0Z" fill="rgba(var(--black-rgb), .01)"></path><path d="M81.1582 84.2857l3.8418 0l0 -49.2857l-3.8418 0Z" fill="rgba(var(--white-rgb), .01)"></path><path d="M81.1582 380.5L85 380.5" fill="none" stroke="var(--gray-300)"></path><path d="M81.1582 330.5L85 330.5" fill="none" stroke="var(--gray-300)"></path><path d="M81.1582 281.5L85 281.5" fill="none" stroke="var(--gray-300)"></path><path d="M81.1582 232.5L85 232.5" fill="none" stroke="var(--gray-300)"></path><path d="M81.1582 183.5L85 183.5" fill="none" stroke="var(--gray-300)"></path><path d="M81.1582 133.5L85 133.5" fill="none" stroke="var(--gray-300)"></path><path d="M81.1582 84.5L85 84.5" fill="none" stroke="var(--gray-300)"></path><path d="M81.1582 35.5L85 35.5" fill="none" stroke="var(--gray-300)"></path><path d="M81.5 35L81.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M81.5 35L81.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M82.5 35L82.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M82.5 35L82.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M83.5 35L83.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M83.5 35L83.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M84.5 35L84.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M84.5 35L84.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M85.5 35L85.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M82.5 380L82.5 35" fill="none" stroke="var(--gray-500)" stroke-linecap="round"></path><path d="M81.1582 380.5L85 380.5" fill="none" stroke="var(--gray-500)" stroke-linecap="round"></path><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(73.1582 355.3571)" fill="rgba(var(--body-color-rgb), .65)">Monday</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(73.1582 306.0714)" fill="rgba(var(--body-color-rgb), .65)">Tuesday</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(73.1582 256.7857)" fill="rgba(var(--body-color-rgb), .65)">Wednesday</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(73.1582 207.5)" fill="rgba(var(--body-color-rgb), .65)">Thursday</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(73.1582 158.2143)" fill="rgba(var(--body-color-rgb), .65)">Friday</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(73.1582 108.9286)" fill="rgba(var(--body-color-rgb), .65)">Saturday</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(73.1582 59.6429)" fill="rgba(var(--body-color-rgb), .65)">Sunday</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);" y="6" transform="translate(81.6384 388)" fill="rgba(var(--body-color-rgb), .65)">-200</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);" y="6" transform="translate(82.1187 388)" fill="rgba(var(--body-color-rgb), .65)">-100</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);" y="6" transform="translate(82.5989 388)" fill="rgba(var(--body-color-rgb), .65)">0</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);" y="6" transform="translate(83.0791 388)" fill="rgba(var(--body-color-rgb), .65)">100</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);" y="6" transform="translate(83.5593 388)" fill="rgba(var(--body-color-rgb), .65)">200</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);" y="6" transform="translate(84.0396 388)" fill="rgba(var(--body-color-rgb), .65)">300</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);" y="6" transform="translate(84.5198 388)" fill="rgba(var(--body-color-rgb), .65)">400</text><path d="M82.5989 337.2571A0.9604 0.9604 0 0 1 83.5593 338.2176L83.5593 362.2967A0.9604 0.9604 0 0 1 82.5989 363.2571L82.5989 337.2571" fill="#66bc69"></path><path d="M82.5989 287.9714A0.8164 0.8164 0 0 1 83.4153 288.7878L83.4153 313.155A0.8164 0.8164 0 0 1 82.5989 313.9714L82.5989 287.9714" fill="#66bc69"></path><path d="M82.5989 238.6857A1.1525 1.1525 0 0 1 83.7514 239.8383L83.7514 263.5332A1.1525 1.1525 0 0 1 82.5989 264.6857L82.5989 238.6857" fill="#66bc69"></path><path d="M82.5989 189.4A1.1717 1.1717 0 0 1 83.7706 190.5717L83.7706 214.2283A1.1717 1.1717 0 0 1 82.5989 215.4L82.5989 189.4" fill="#66bc69"></path><path d="M82.5989 140.1143A0.9604 0.9604 0 0 1 83.5593 141.0747L83.5593 165.1538A0.9604 0.9604 0 0 1 82.5989 166.1143L82.5989 140.1143" fill="#66bc69"></path><path d="M82.5989 90.8286A1.0565 1.0565 0 0 1 83.6554 91.8851L83.6554 115.7721A1.0565 1.0565 0 0 1 82.5989 116.8286L82.5989 90.8286" fill="#66bc69"></path><path d="M82.5989 41.5429A1.0085 1.0085 0 0 1 83.6073 42.5513L83.6073 66.5344A1.0085 1.0085 0 0 1 82.5989 67.5429L82.5989 41.5429" fill="#66bc69"></path><path d="M82.5989 368.4571A1.5367 1.5367 0 0 1 84.1356 369.9939L84.1356 371.9204A1.5367 1.5367 0 0 1 82.5989 373.4571L82.5989 373.4571L82.5989 368.4571" fill="#5ab1ef"></path><path d="M82.5989 319.1714A1.4503 1.4503 0 0 1 84.0492 320.6217L84.0492 322.7212A1.4503 1.4503 0 0 1 82.5989 324.1714L82.5989 319.1714" fill="#5ab1ef"></path><path d="M82.5989 269.8857A1.6376 1.6376 0 0 1 84.2364 271.5233L84.2364 273.2481A1.6376 1.6376 0 0 1 82.5989 274.8857L82.5989 269.8857" fill="#5ab1ef"></path><path d="M82.5989 220.6A1.796 1.796 0 0 1 84.3949 222.396L84.3949 223.804A1.796 1.796 0 0 1 82.5989 225.6L82.5989 220.6" fill="#5ab1ef"></path><path d="M82.5989 171.3143A1.8729 1.8729 0 0 1 84.4718 173.1872L84.4718 174.4414A1.8729 1.8729 0 0 1 82.5989 176.3143L82.5989 171.3143" fill="#5ab1ef"></path><path d="M82.5989 122.0286A2.161 2.161 0 0 1 84.7599 124.1896L84.7599 124.8676A2.161 2.161 0 0 1 82.5989 127.0286L82.5989 122.0286" fill="#5ab1ef"></path><path d="M82.5989 72.7429A2.0169 2.0169 0 0 1 84.6158 74.7598L84.6158 75.7259A2.0169 2.0169 0 0 1 82.5989 77.7429L82.5989 72.7429" fill="#5ab1ef"></path><path d="M82.5989 368.4571L82.5989 373.4571A0.5763 0.5763 0 0 1 82.0226 372.8809L82.0226 369.0334A0.5763 0.5763 0 0 1 82.5989 368.4571" fill="#e36083"></path><path d="M82.5989 319.1714L82.5989 324.1714A0.6339 0.6339 0 0 1 81.965 323.5375L81.965 319.8053A0.6339 0.6339 0 0 1 82.5989 319.1714" fill="#e36083"></path><path d="M82.5989 269.8857L82.5989 274.8857A0.485 0.485 0 0 1 82.1139 274.4007L82.1139 270.3707A0.485 0.485 0 0 1 82.5989 269.8857" fill="#e36083"></path><path d="M82.5989 220.6L82.5989 225.6A0.6435 0.6435 0 0 1 81.9554 224.9565L81.9554 221.2435A0.6435 0.6435 0 0 1 82.5989 220.6" fill="#e36083"></path><path d="M82.5989 171.3143L82.5989 176.3143A0.9124 0.9124 0 0 1 81.6865 175.4019L81.6865 172.2267A0.9124 0.9124 0 0 1 82.5989 171.3143" fill="#e36083"></path><path d="M82.5989 122.0286L82.5989 127.0286A1.1045 1.1045 0 0 1 81.4944 125.9241L81.4944 123.1331A1.1045 1.1045 0 0 1 82.5989 122.0286" fill="#e36083"></path><path d="M82.5989 72.7429L82.5989 77.7429A1.0085 1.0085 0 0 1 81.5904 76.7344L81.5904 73.7513A1.0085 1.0085 0 0 1 82.5989 72.7429" fill="#e36083"></path><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(83.0791 350.2571)" fill="var(--white)">200</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(83.0071 300.9714)" fill="var(--white)">170</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(83.1751 251.6857)" fill="var(--white)">240</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(83.1848 202.4)" fill="var(--white)">244</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(83.0791 153.1143)" fill="var(--white)">200</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(83.1271 103.8286)" fill="var(--white)">220</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(83.1031 54.5429)" fill="var(--white)">210</text><text dominant-baseline="central" text-anchor="start" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(89.1356 370.9571)" fill="var(--body-color)">320</text><text dominant-baseline="central" text-anchor="start" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(89.0492 321.6714)" fill="var(--body-color)">302</text><text dominant-baseline="central" text-anchor="start" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(89.2364 272.3857)" fill="var(--body-color)">341</text><text dominant-baseline="central" text-anchor="start" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(89.3949 223.1)" fill="var(--body-color)">374</text><text dominant-baseline="central" text-anchor="start" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(89.4718 173.8143)" fill="var(--body-color)">390</text><text dominant-baseline="central" text-anchor="start" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(89.7599 124.5286)" fill="var(--body-color)">450</text><text dominant-baseline="central" text-anchor="start" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(89.6158 75.2429)" fill="var(--body-color)">420</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(77.0226 370.9571)" fill="var(--body-color)">-120</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(76.965 321.6714)" fill="var(--body-color)">-132</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(77.1139 272.3857)" fill="var(--body-color)">-101</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(76.9554 223.1)" fill="var(--body-color)">-134</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(76.6865 173.8143)" fill="var(--body-color)">-190</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(76.4944 124.5286)" fill="var(--body-color)">-230</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);font-weight:500;" transform="translate(76.5904 75.2429)" fill="var(--body-color)">-210</text><path d="M-5 -5l100 0l0 32l-100 0Z" transform="translate(5 5)" fill="rgb(0,0,0)" fill-opacity="0" stroke="#ccc" stroke-width="0"></path><g clip-path="url(#zr0-c0)"><path d="M2 0L23 0A2 2 0 0 1 25 2L25 6A2 2 0 0 1 23 8L2 8A2 2 0 0 1 0 6L0 2A2 2 0 0 1 2 0" transform="translate(5 12)" fill="#66bc69"></path><path d="M30 -7l38.0078 0l0 22l-38.0078 0Z" transform="translate(5 12)" fill="none"></path><text dominant-baseline="central" text-anchor="start" style="font-size:14px;font-family:var(--body-font-family);" x="35" y="4" transform="translate(5 12)" fill="var(--body-color)">Profit</text><path d="M2 0L23 0A2 2 0 0 1 25 2L25 6A2 2 0 0 1 23 8L2 8A2 2 0 0 1 0 6L0 2A2 2 0 0 1 2 0" transform="translate(103.0078 12)" fill="#e36083"></path><path d="M30 -7l62.6992 0l0 22l-62.6992 0Z" transform="translate(103.0078 12)" fill="none"></path><text dominant-baseline="central" text-anchor="start" style="font-size:14px;font-family:var(--body-font-family);" x="35" y="4" transform="translate(103.0078 12)" fill="var(--body-color)">Expenses</text><path d="M2 0L23 0A2 2 0 0 1 25 2L25 6A2 2 0 0 1 23 8L2 8A2 2 0 0 1 0 6L0 2A2 2 0 0 1 2 0" transform="translate(225.707 12)" fill="#5ab1ef"></path><path d="M30 -7l49.3516 0l0 22l-49.3516 0Z" transform="translate(225.707 12)" fill="none"></path><text dominant-baseline="central" text-anchor="start" style="font-size:14px;font-family:var(--body-font-family);" x="35" y="4" transform="translate(225.707 12)" fill="var(--body-color)">Income</text></g><path d="M-4.5 0L4.5 -7.5L4.5 7.5Z" transform="translate(44.166 16)" fill="var(--gray-500)"></path><text dominant-baseline="central" text-anchor="middle" style="font: normal normal 14px var(--body-font-family)" transform="translate(67.333 16)" fill="var(--body-color)">1/3</text><path d="M4.5 0L-4.5 -7.5L-4.5 7.5Z" transform="translate(90.5 16)" fill="var(--body-color)"></path></g><defs><clipPath id="zr0-c0"><path d="M0 0l4.666 0l0 22l-4.666 0Z" transform="translate(5 5)" fill="#000"></path></clipPath></defs></svg></div><div class="shadow-sm rounded" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, transform 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: var(--white); border-width: 1px; border-radius: 4px; color: rgb(0, 0, 0); font-style: ; font-variant-ligatures: ; font-variant-caps: ; font-variant-numeric: ; font-variant-east-asian: ; font-variant-alternates: ; font-weight: ; font-stretch: ; font-size: ; font-family: ; font-optical-sizing: ; font-kerning: ; font-feature-settings: ; font-variation-settings: ; line-height: 21px; padding: 15px; top: 0px; left: 0px; transform: translate3d(846px, 62px, 0px); border-color: var(--gray-400); pointer-events: none; visibility: hidden; opacity: 0;"><div style="margin: 0px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><div style="font-size:14px;color:#000;font-weight:400;line-height:1;">Sunday</div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#66bc69;"></span><span style="font-size:14px;color:#000;font-weight:400;margin-left:2px">Profit</span><span style="float:right;margin-left:20px;font-size:14px;color:#000;font-weight:900">210</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#5ab1ef;"></span><span style="font-size:14px;color:#000;font-weight:400;margin-left:2px">Income</span><span style="float:right;margin-left:20px;font-size:14px;color:#000;font-weight:900">420</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#e36083;"></span><span style="font-size:14px;color:#000;font-weight:400;margin-left:2px">Expenses</span><span style="float:right;margin-left:20px;font-size:14px;color:#000;font-weight:900">-210</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="clear:both"></div></div></div></div>
                </div>
            </div>
        </div>
        <!-- /weekly stats -->


        <!-- Blog posts -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-sm-flex">
                        <h5 class="mb-0">Himalayan sunset</h5>
                        <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                            <span class="text-muted">49 minutes ago</span>
                            <div class="d-inline-flex ms-auto ms-sm-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Hide user posts
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-prohibit-inset me-2"></i>
                                            Block user
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle-minus me-2"></i>
                                            Unfollow user
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-brackets-curly me-2"></i>
                                            Embed post
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-warning-circle me-2"></i>
                                            Report this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-img-actions mb-3">
                            <img class="card-img img-fluid" src="../../../assets/images/demo/cover3.jpg" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="blog_single.html" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="mb-3">
                            <i class="ph-chats me-2"></i>
                            <a href="#">Jason Ansley</a> commented:
                        </h6>

                        <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                            <p class="mb-2 fs-base">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
                            <footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
                        </blockquote>
                    </div>

                    <div class="card-body d-flex justify-content-between align-items-center pt-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-eye me-2"></i> 438</a></li>
                            <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-chats me-2"></i> 71</a></li>
                        </ul>

                        <a href="#" class="d-inline-block">Read post</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-sm-flex">
                        <h5 class="mb-0">Behind the word mountains</h5>
                        <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                            <span class="text-muted">2 hours ago</span>
                            <div class="d-inline-flex ms-auto ms-sm-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Hide user posts
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-prohibit-inset me-2"></i>
                                            Block user
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle-minus me-2"></i>
                                            Unfollow user
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-brackets-curly me-2"></i>
                                            Embed post
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-warning-circle me-2"></i>
                                            Report this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-img-actions mb-3">
                            <img class="card-img img-fluid" src="../../../assets/images/demo/cover.jpg" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="blog_single.html" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="mb-3">
                            <i class="ph-chats me-2"></i>
                            <a href="#">Tim Smith</a> commented:
                        </h6>

                        <blockquote class="blockquote border-start border-width-5 py-2 ps-3 mb-0">
                            <p class="mb-2 fs-base">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                            <footer class="blockquote-footer">Mark, <cite title="Source Title">12:58 pm</cite></footer>
                        </blockquote>
                    </div>

                    <div class="card-body d-flex justify-content-between align-items-center pt-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-eye me-2"></i> 589</a></li>
                            <li class="list-inline-item"><a href="#" class="text-body"><i class="ph-chats me-2"></i> 54</a></li>
                        </ul>

                        <a href="#" class="d-inline-block">Read post</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /blog posts -->


        <!-- Conversation -->
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Conversation with James</h5>
                <div class="ms-auto">
                    <div class="dropdown">
                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                            <i class="ph-gear"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <i class="ph-lock-key me-2"></i>
                                Hide user posts
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-prohibit-inset me-2"></i>
                                Block user
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-user-circle-minus me-2"></i>
                                Unfollow user
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="ph-brackets-curly me-2"></i>
                                Embed post
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-warning-circle me-2"></i>
                                Report this post
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="media-chat-scrollable mb-3">
                    <div class="media-chat vstack gap-2">
                        <div class="content-divider justify-content-center text-muted mx-0">Today</div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="../../../assets/images/demo/users/face11.jpg" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
                                <div class="fs-sm text-muted mt-2">Tue, 10:28 am</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="../../../assets/images/demo/users/face1.jpg" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
                                <div class="fs-sm text-muted mt-2">Tue, 8:12 am</div>
                            </div>
                        </div>


                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="../../../assets/images/demo/users/face11.jpg" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
                                <div class="fs-sm text-muted mt-2">Wed, 4:20 pm</div>
                            </div>
                        </div>

                        <div class="media-chat-item media-chat-item-reverse hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="../../../assets/images/demo/users/face1.jpg" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div>
                                <div class="media-chat-message">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
                                <div class="fs-sm text-muted mt-2">
                                    <i class="ph-checks text-primary me-1"></i>
                                    2 hours ago
                                </div>
                            </div>
                        </div>

                        <div class="media-chat-item hstack align-items-start gap-3">
                            <a href="#" class="d-block status-indicator-container">
                                <img src="../../../assets/images/demo/users/face11.jpg" class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>

                            <div class="align-self-center">
                                <span class="fw-semibold">Victoria</span> is typing
                                <div class="typing-indicator">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-control form-control-content mb-3" contenteditable="" data-placeholder="Type message here and hit enter..."></div>

                <div class="d-flex align-items-center">
                    <div>
                        <a href="#" class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1" data-bs-popup="tooltip" aria-label="Formatting" data-bs-original-title="Formatting">
                            <i class="ph-text-aa"></i>
                        </a>
                        <a href="#" class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1" data-bs-popup="tooltip" aria-label="Emoji" data-bs-original-title="Emoji">
                            <i class="ph-smiley"></i>
                        </a>
                        <a href="#" class="btn btn-light btn-icon border-transparent rounded-pill btn-sm me-1" data-bs-popup="tooltip" aria-label="Send file" data-bs-original-title="Send file">
                            <i class="ph-paperclip"></i>
                        </a>
                    </div>

                    <button type="button" class="btn btn-primary ms-auto">
                        Send
                        <i class="ph-paper-plane-tilt ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /conversation -->


        <!-- Video posts -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-sm-flex">
                        <h5 class="mb-0">Peru mountains</h5>
                        <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                            <span class="text-muted">Today, 8:39 am</span>
                            <div class="d-inline-flex ms-auto ms-sm-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Hide user posts
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-prohibit-inset me-2"></i>
                                            Block user
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle-minus me-2"></i>
                                            Unfollow user
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-brackets-curly me-2"></i>
                                            Embed post
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-warning-circle me-2"></i>
                                            Report this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="mb-3">Cutting much goodness more from sympathetic unwittingly under wow affluent luckily or distinctly demonstrable strewed lewd outside coaxingly and after and rational alas this fitted. Hippopotamus noticeably oh bridled more until dutiful.</p>

                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-sm-flex">
                        <h5 class="mb-0">Woodturner master</h5>
                        <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                            <span class="text-muted">Yesterday, 7:52 am</span>
                            <div class="d-inline-flex ms-auto ms-sm-3">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-gear"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Hide user posts
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-prohibit-inset me-2"></i>
                                            Block user
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-user-circle-minus me-2"></i>
                                            Unfollow user
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-brackets-curly me-2"></i>
                                            Embed post
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-warning-circle me-2"></i>
                                            Report this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="mb-3">Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger woolly where since gosh accurate irrespective that pounded much winked urgent and furtive house gosh one while this more.</p>

                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /video posts -->

    </div>

    <div class="tab-pane fade" id="schedule" role="tabpanel">

        <!-- Available hours -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Available hours</h5>
            </div>

            <div class="card-body">
                <div class="chart-container">
                    <div class="chart has-fixed-height" id="available_hours" _echarts_instance_="ec_1715056372595" style="position: relative;"><div style="position: relative; overflow: hidden; width: 100px; height: 400px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" width="100" height="400" style="position:absolute;left:0;top:0;user-select:none"><rect width="100" height="400" x="0" y="0" id="0" fill="none" fill-opacity="1"></rect><g><path d="M21.3477 380l68.6523 0l0 -70l-68.6523 0Z" fill="rgba(var(--white-rgb), .01)"></path><path d="M21.3477 310l68.6523 0l0 -70l-68.6523 0Z" fill="rgba(var(--black-rgb), .01)"></path><path d="M21.3477 240l68.6523 0l0 -70l-68.6523 0Z" fill="rgba(var(--white-rgb), .01)"></path><path d="M21.3477 170l68.6523 0l0 -70l-68.6523 0Z" fill="rgba(var(--black-rgb), .01)"></path><path d="M21.3477 100l68.6523 0l0 -70l-68.6523 0Z" fill="rgba(var(--white-rgb), .01)"></path><path d="M21.3477 380.5L90 380.5" fill="none" stroke="var(--gray-300)"></path><path d="M21.3477 310.5L90 310.5" fill="none" stroke="var(--gray-300)"></path><path d="M21.3477 240.5L90 240.5" fill="none" stroke="var(--gray-300)"></path><path d="M21.3477 170.5L90 170.5" fill="none" stroke="var(--gray-300)"></path><path d="M21.3477 100.5L90 100.5" fill="none" stroke="var(--gray-300)"></path><path d="M21.3477 30.5L90 30.5" fill="none" stroke="var(--gray-300)"></path><path d="M21.5 30L21.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M21.5 30L21.5 380" fill="none" stroke="var(--gray-300)" stroke-dasharray="4,2"></path><path d="M21.3477 380.5L90 380.5" fill="none" stroke="var(--gray-500)" stroke-linecap="round"></path><path d="M21.5 380L21.5 385" fill="none" stroke="var(--gray-500)"></path><path d="M21.5 380L21.5 385" fill="none" stroke="var(--gray-500)"></path><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(13.3477 380)" fill="rgba(var(--body-color-rgb), .65)">0</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(13.3477 310)" fill="rgba(var(--body-color-rgb), .65)">2</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(13.3477 240)" fill="rgba(var(--body-color-rgb), .65)">4</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(13.3477 170)" fill="rgba(var(--body-color-rgb), .65)">6</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(13.3477 100)" fill="rgba(var(--body-color-rgb), .65)">8</text><text dominant-baseline="central" text-anchor="end" style="font-size:12px;font-family:var(--body-font-family);" transform="translate(13.3477 30)" fill="rgba(var(--body-color-rgb), .65)">10</text><text dominant-baseline="central" text-anchor="middle" style="font-size:12px;font-family:var(--body-font-family);" y="6" transform="translate(26.2514 388)" fill="rgba(var(--body-color-rgb), .65)">Monday</text><path d="M22.6717 380l3.2543 0l0 -140l-3.2543 0Z" fill="#B0BEC5"></path><path d="M32.4791 380l3.2543 0l0 -280l-3.2543 0Z" fill="#B0BEC5"></path><path d="M42.2866 380l3.2543 0l0 -210l-3.2543 0Z" fill="#B0BEC5"></path><path d="M52.0941 380l3.2543 0l0 -140l-3.2543 0Z" fill="#B0BEC5"></path><path d="M61.9016 380l3.2543 0l0 -245l-3.2543 0Z" fill="#B0BEC5"></path><path d="M71.7091 380l3.2543 0l0 -175l-3.2543 0Z" fill="#B0BEC5"></path><path d="M81.5165 380l3.2543 0l0 -315l-3.2543 0Z" fill="#B0BEC5"></path><path d="M26.5768 380l3.2543 0l0 -210l-3.2543 0Z" fill="#29B6F6"></path><path d="M36.3843 380l3.2543 0l0 -70l-3.2543 0Z" fill="#29B6F6"></path><path d="M46.1918 380l3.2543 0l0 -140l-3.2543 0Z" fill="#29B6F6"></path><path d="M55.9993 380l3.2543 0l0 -210l-3.2543 0Z" fill="#29B6F6"></path><path d="M65.8067 380l3.2543 0l0 -105l-3.2543 0Z" fill="#29B6F6"></path><path d="M75.6142 380l3.2543 0l0 -175l-3.2543 0Z" fill="#29B6F6"></path><path d="M85.4217 380l3.2543 0l0 -35l-3.2543 0Z" fill="#29B6F6"></path><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(24.2988 235)" fill="var(--body-color)">4</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(34.1063 95)" fill="var(--body-color)">8</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(43.9138 165)" fill="var(--body-color)">6</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(53.7212 235)" fill="var(--body-color)">4</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(63.5287 130)" fill="var(--body-color)">7</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(73.3362 200)" fill="var(--body-color)">5</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(83.1437 60)" fill="var(--body-color)">9</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(28.204 165)" fill="var(--body-color)">6</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(38.0115 305)" fill="var(--body-color)">2</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(47.8189 235)" fill="var(--body-color)">4</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(57.6264 165)" fill="var(--body-color)">6</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(67.4339 270)" fill="var(--body-color)">3</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(77.2414 200)" fill="var(--body-color)">5</text><text dominant-baseline="central" text-anchor="middle" style="font-size:14px;font-family:var(--body-font-family);font-weight:500;" y="-6" transform="translate(87.0488 340)" fill="var(--body-color)">1</text><path d="M-5 -5l131.8379 0l0 74l-131.8379 0Z" transform="translate(-10.9189 5)" fill="rgb(0,0,0)" fill-opacity="0" stroke="#ccc" stroke-width="0"></path><path d="M2 0L23 0A2 2 0 0 1 25 2L25 6A2 2 0 0 1 23 8L2 8A2 2 0 0 1 0 6L0 2A2 2 0 0 1 2 0" transform="translate(-10.9189 12)" fill="#B0BEC5"></path><path d="M30 -7l84.0508 0l0 22l-84.0508 0Z" transform="translate(-10.9189 12)" fill="none"></path><text dominant-baseline="central" text-anchor="start" style="font-size:14px;font-family:var(--body-font-family);" xml:space="preserve" x="35" y="4" transform="translate(-10.9189 12)" fill="var(--body-color)">Booked hours</text><path d="M2 0L23 0A2 2 0 0 1 25 2L25 6A2 2 0 0 1 23 8L2 8A2 2 0 0 1 0 6L0 2A2 2 0 0 1 2 0" transform="translate(-10.9189 54)" fill="#29B6F6"></path><path d="M30 -7l91.8379 0l0 22l-91.8379 0Z" transform="translate(-10.9189 54)" fill="none"></path><text dominant-baseline="central" text-anchor="start" style="font-size:14px;font-family:var(--body-font-family);" xml:space="preserve" x="35" y="4" transform="translate(-10.9189 54)" fill="var(--body-color)">Available hours</text></g></svg></div><div class="shadow-sm rounded"></div></div>
                </div>
            </div>
        </div>
        <!-- /available hours -->


        <!-- Schedule -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">My schedule</h5>
            </div>

            <div class="card-body">
                <div class="my-schedule fc fc-media-screen fc-direction-ltr fc-theme-standard"><div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr"><div class="fc-toolbar-chunk"><div class="fc-button-group"><button type="button" title="Previous week" aria-pressed="false" class="fc-prev-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-left"></span></button><button type="button" title="Next week" aria-pressed="false" class="fc-next-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-right"></span></button></div><button type="button" title="This week" aria-pressed="false" class="fc-today-button fc-button fc-button-primary">today</button></div><div class="fc-toolbar-chunk"><h2 class="fc-toolbar-title" id="fc-dom-1">Nov 7 – 13, 2021</h2></div><div class="fc-toolbar-chunk"><div class="fc-button-group"><button type="button" title="month view" aria-pressed="false" class="fc-dayGridMonth-button fc-button fc-button-primary">month</button><button type="button" title="week view" aria-pressed="true" class="fc-timeGridWeek-button fc-button fc-button-primary fc-button-active">week</button><button type="button" title="day view" aria-pressed="false" class="fc-timeGridDay-button fc-button fc-button-primary">day</button></div></div></div><div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active" style="height: 0px;"><div class="fc-timegrid fc-timeGridWeek-view fc-view"><table role="grid" class="fc-scrollgrid  fc-scrollgrid-liquid"><thead role="rowgroup"><tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header "><th role="presentation"><div class="fc-scroller-harness"><div class="fc-scroller" style="overflow: hidden;"><table role="presentation" class="fc-col-header " style="width: 0px;"><colgroup><col style="width: 0px;"></colgroup><thead role="presentation"><tr role="row"><th aria-hidden="true" class="fc-timegrid-axis"><div class="fc-timegrid-axis-frame"></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun fc-day-past" data-date="2021-11-07"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 7, 2021">Sun 11/7</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-mon fc-day-past" data-date="2021-11-08"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 8, 2021">Mon 11/8</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-tue fc-day-past" data-date="2021-11-09"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 9, 2021">Tue 11/9</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-wed fc-day-past" data-date="2021-11-10"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 10, 2021">Wed 11/10</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-thu fc-day-past" data-date="2021-11-11"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 11, 2021">Thu 11/11</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-fri fc-day-past" data-date="2021-11-12"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 12, 2021">Fri 11/12</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-sat fc-day-past" data-date="2021-11-13"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 13, 2021">Sat 11/13</a></div></th></tr></thead></table></div></div></th></tr></thead><tbody role="rowgroup"><tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body "><td role="presentation"><div class="fc-scroller-harness"><div class="fc-scroller" style="overflow: hidden;"><div class="fc-daygrid-body fc-daygrid-body-unbalanced fc-daygrid-body-natural" style="width: 0px;"><table role="presentation" class="fc-scrollgrid-sync-table" style="width: 0px;"><colgroup><col style="width: 0px;"></colgroup><tbody role="presentation"><tr role="row"><td aria-hidden="true" class="fc-timegrid-axis fc-scrollgrid-shrink"><div class="fc-timegrid-axis-frame fc-scrollgrid-shrink-frame fc-timegrid-axis-frame-liquid"><span class="fc-timegrid-axis-cushion fc-scrollgrid-shrink-cushion fc-scrollgrid-sync-inner">all-day</span></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2021-11-07"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(66, 165, 245); background-color: rgb(66, 165, 245);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">University</div></div></div></div></a></div><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"><div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;"><div class="fc-non-business"></div></div></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2021-11-08"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2021-11-09"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2021-11-10"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2021-11-11"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(38, 166, 154); background-color: rgb(38, 166, 154);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Conference</div></div></div></div></a></div><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2021-11-12"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2021-11-13"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"><div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;"><div class="fc-non-business"></div></div></div></div></td></tr></tbody></table></div></div></div></td></tr><tr role="presentation" class="fc-scrollgrid-section"><td class="fc-timegrid-divider fc-cell-shaded"></td></tr><tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid"><td role="presentation"><div class="fc-scroller-harness fc-scroller-harness-liquid"><div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden auto;"><div class="fc-timegrid-body" style="width: 0px;"><div class="fc-timegrid-slots"><table aria-hidden="true" class="" style="width: 0px;"><colgroup><col style="width: 0px;"></colgroup><tbody><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="00:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">12am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="00:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="00:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="00:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="01:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">1am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="01:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="01:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="01:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="02:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">2am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="02:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="02:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="02:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="03:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">3am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="03:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="03:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="03:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="04:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">4am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="04:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="04:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="04:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="05:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">5am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="05:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="05:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="05:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="06:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">6am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="06:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="06:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="06:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="07:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">7am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="07:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="07:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="07:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="08:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">8am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="08:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="08:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="08:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="09:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">9am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="09:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="09:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="09:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="10:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">10am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="10:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="10:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="10:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="11:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">11am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="11:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="11:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="11:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="12:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">12pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="12:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="12:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="12:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="13:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">1pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="13:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="13:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="13:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="14:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">2pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="14:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="14:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="14:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="15:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">3pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="15:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="15:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="15:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="16:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">4pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="16:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="16:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="16:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="17:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">5pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="17:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="17:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="17:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="18:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">6pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="18:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="18:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="18:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="19:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">7pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="19:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="19:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="19:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="20:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">8pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="20:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="20:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="20:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="21:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">9pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="21:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="21:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="21:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="22:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">10pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="22:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="22:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="22:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="23:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">11pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="23:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="23:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="23:30:00"></td></tr></tbody></table></div><div class="fc-timegrid-cols"><table role="presentation" style="width: 0px;"><colgroup><col style="width: 0px;"></colgroup><tbody role="presentation"><tr role="row"><td aria-hidden="true" class="fc-timegrid-col fc-timegrid-axis"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-sun fc-day-past" data-date="2021-11-07"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -1440px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-mon fc-day-past" data-date="2021-11-08"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -540px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1020px; bottom: -1440px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-tue fc-day-past" data-date="2021-11-09"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -540px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1020px; bottom: -1440px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 780px 0% -840px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(141, 110, 99); background-color: rgb(141, 110, 99);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">1:00</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Shopping</div></div></div></div></a></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-wed fc-day-past" data-date="2021-11-10"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -540px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1020px; bottom: -1440px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-thu fc-day-past" data-date="2021-11-11"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -540px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1020px; bottom: -1440px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 570px 0% -630px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(120, 144, 156); background-color: rgb(120, 144, 156);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">9:30</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Meeting</div></div></div></div></a></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-fri fc-day-past" data-date="2021-11-12"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -540px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1020px; bottom: -1440px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 870px 0% -930px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(38, 166, 154); background-color: rgb(38, 166, 154);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">2:30</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Happy Hour</div></div></div></div></a></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-sat fc-day-past" data-date="2021-11-13"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -1440px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 180px 0% -240px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(76, 175, 80); background-color: rgb(76, 175, 80);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">3:00</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Birthday Party</div></div></div></div></a></div><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 1140px 0% -1200px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(255, 112, 67); background-color: rgb(255, 112, 67);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">7:00</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Dinner</div></div></div></div></a></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
        </div>
        <!-- /schedule -->

    </div>

    <div class="tab-pane fade active show" id="settings" role="tabpanel">

        <!-- Profile info -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Profile information</h5>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" value="Victoria" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Full name</label>
                                <input type="text" value="Smith" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Address line 1</label>
                                <input type="text" value="Ring street 12" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Address line 2</label>
                                <input type="text" value="building D, flat #67" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" value="Munich" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">State/Province</label>
                                <input type="text" value="Bayern" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">ZIP code</label>
                                <input type="text" value="1031" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" readonly="readonly" value="victoria@smith.com" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Your country</label>
                                <select class="form-select">
                                    <option value="germany" selected="">Germany</option> 
                                    <option value="france">France</option> 
                                    <option value="spain">Spain</option> 
                                    <option value="netherlands">Netherlands</option> 
                                    <option value="other">...</option> 
                                    <option value="uk">United Kingdom</option> 
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Phone #</label>
                                <input type="text" value="+99-99-9999-9999" class="form-control">
                                <div class="form-text text-muted">+99-99-9999-9999</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Upload profile image</label>
                                <input type="file" class="form-control">
                                <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /profile info -->
    </div>
</div>
@endsection

@section('rightbar')
<div class="sidebar sidebar-end sidebar-expand-lg">

    <!-- Expand button -->
    <button type="button" class="btn btn-sidebar-expand sidebar-control sidebar-end-toggle h-100">
        <i class="ph-caret-left"></i>
    </button>
    <!-- /expand button -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Header -->
        <div class="sidebar-section sidebar-section-body d-flex align-items-center">
            <h5 class="mb-0">My profile</h5>
            <div class="ms-auto">
                <button type="button" class="btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-end-toggle d-none d-lg-inline-flex">
                    <i class="ph-arrows-left-right"></i>
                </button>

                <button type="button" class="btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-end-toggle d-lg-none">
                    <i class="ph-x"></i>
                </button>
            </div>
        </div>
        <!-- /header -->


        <!-- Sidebar user -->
        <div class="sidebar-section">
            <div class="sidebar-section-body text-center pt-0">
                <div class="card-img-actions d-inline-block mb-3">
                    <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face11.jpg" width="150" height="150" alt="">
                    <div class="card-img-actions-overlay card-img rounded-circle">
                        <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-pencil"></i>
                        </a>
                    </div>
                </div>

                <h6 class="mb-0">Adi Nugroho</h6>
                <span class="text-muted">Fullstack Developer</span>

                <div class="d-flex justify-content-center mt-3">
                    <a href="#" class="link-pink" data-bs-popup="tooltip" aria-label="Dribbble" data-bs-original-title="Dribbble">
                        <i class="ph-dribbble-logo"></i>
                    </a>
                    <a href="#" class="link-info mx-2" data-bs-popup="tooltip" aria-label="Twitter" data-bs-original-title="Twitter">
                        <i class="ph-twitter-logo"></i>
                    </a>
                    <a href="#" class="link-indigo" data-bs-popup="tooltip" aria-label="Teams" data-bs-original-title="Teams">
                        <i class="ph-microsoft-teams-logo"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /sidebar user -->


        <!-- Sub navigation -->
        <div class="sidebar-section">
            <div class="sidebar-section-header bg-light py-2">
                <div class="fw-semibold">Information</div>
            </div>

            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="ph-envelope me-2"></i>
                         adin72978@gmail.com
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="ph-phone me-2"></i>
                        085730004337
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="ph-gender me-2"></i>
                        Male
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{-- ICON LOCATION --}}
                        <i class="ph-location me-2"></i>
                        Selopuro 02/02
                    </a>
                </li>
            </ul>
        </div>
        <!-- /sub navigation -->
    </div>
    <!-- /sidebar content -->

</div>
@endsection