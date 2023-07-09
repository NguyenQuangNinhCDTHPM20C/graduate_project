@extends('Admin.layouts.app')

@section('title', 'Double-N shop | Admin Management')

@section('content')
    <div class="page-wrapper cardhead">
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span><img
                                    src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/dash1.svg"
                                    alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
                            <h6>Total Purchase Due</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash1">
                        <div class="dash-widgetimg">
                            <span><img
                                    src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/dash2.svg"
                                    alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                            <h6>Total Sales Due</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash2">
                        <div class="dash-widgetimg">
                            <span><img
                                    src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/dash3.svg"
                                    alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                            <h6>Total Sale Amount</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                            <span><img
                                    src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/dash4.svg"
                                    alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
                            <h6>Total Sale Amount</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4>{{ $count_customer }}</h4>
                            <h5>Customers</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4>{{ $count_brand }}</h4>
                            <h5>Suppliers</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4>100</h4>
                            <h5>Purchase Invoice</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4>{{ $count_sale_invoice }}</h4>
                            <h5>Sales Invoice</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Purchase &amp; Sales</h5>
                            <div class="graph-sets">
                                <ul>
                                    <li>
                                        <span>Sales</span>
                                    </li>
                                    <li>
                                        <span>Purchase</span>
                                    </li>
                                </ul>
                                <div class="dropdown">
                                    <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        2022 <img
                                            src="https://dreamspos.dreamguystech.com/laravel/template/public/assets/img/icons/dropdown.svg"
                                            alt="img" class="ms-2">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="position: relative;">
                            <div id="sales_charts" style="min-height: 315px;">
                                <div id="apexchartst3ausdskf"
                                    class="apexcharts-canvas apexchartst3ausdskf apexcharts-theme-light"
                                    style="width: 661px; height: 300px;"><svg id="SvgjsSvg1242" width="661"
                                        height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="661" height="300">
                                            <div class="apexcharts-legend apexcharts-align-center position-right"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="position: absolute; left: auto; top: 60px; right: 5px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="Sales"
                                                    data:collapsed="false" style="margin: 2px 5px;"><span
                                                        class="apexcharts-legend-marker" rel="1"
                                                        data:collapsed="false"
                                                        style="background: rgb(40, 199, 111) !important; color: rgb(40, 199, 111); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="Sales" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2"
                                                    seriesname="Purchase" data:collapsed="false"
                                                    style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                        rel="2" data:collapsed="false"
                                                        style="background: rgb(234, 84, 85) !important; color: rgb(234, 84, 85); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="Purchase" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Purchase</span>
                                                </div>
                                            </div>
                                            <style type="text/css">

                                            </style>
                                        </foreignObject>
                                        <g id="SvgjsG1244" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(43.18076133728027, 30)">
                                            <defs id="SvgjsDefs1243">
                                                <linearGradient id="SvgjsLinearGradient1248" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1249" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1250" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1251" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskt3ausdskf">
                                                    <rect id="SvgjsRect1253" width="606.8192386627197"
                                                        height="235.99519938278195" x="-2" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskt3ausdskf">
                                                    <rect id="SvgjsRect1254" width="606.8192386627197"
                                                        height="239.99519938278195" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1252" width="15.070480966567994"
                                                height="235.99519938278195" x="29.647596287727357" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke-dasharray="3" fill="url(#SvgjsLinearGradient1248)"
                                                class="apexcharts-xcrosshairs" y2="235.99519938278195" filter="none"
                                                fill-opacity="0.9" x1="29.647596287727357" x2="29.647596287727357">
                                            </rect>
                                            <g id="SvgjsG1340" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1341" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1343"
                                                        font-family="Helvetica, Arial, sans-serif" x="37.67620241641998"
                                                        y="264.99519938278195" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1344"> Jan </tspan>
                                                        <title> Jan </title>
                                                    </text><text id="SvgjsText1346"
                                                        font-family="Helvetica, Arial, sans-serif" x="113.02860724925995"
                                                        y="264.99519938278195" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1347">feb</tspan>
                                                        <title>feb</title>
                                                    </text><text id="SvgjsText1349"
                                                        font-family="Helvetica, Arial, sans-serif" x="188.38101208209991"
                                                        y="264.99519938278195" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1350">march</tspan>
                                                        <title>march</title>
                                                    </text><text id="SvgjsText1352"
                                                        font-family="Helvetica, Arial, sans-serif" x="263.7334169149399"
                                                        y="264.99519938278195" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1353">april</tspan>
                                                        <title>april</title>
                                                    </text><text id="SvgjsText1355"
                                                        font-family="Helvetica, Arial, sans-serif" x="339.08582174777985"
                                                        y="264.99519938278195" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1356">may</tspan>
                                                        <title>may</title>
                                                    </text><text id="SvgjsText1358"
                                                        font-family="Helvetica, Arial, sans-serif" x="414.4382265806198"
                                                        y="264.99519938278195" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1359">june</tspan>
                                                        <title>june</title>
                                                    </text><text id="SvgjsText1361"
                                                        font-family="Helvetica, Arial, sans-serif" x="489.7906314134598"
                                                        y="264.99519938278195" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1362">july</tspan>
                                                        <title>july</title>
                                                    </text><text id="SvgjsText1364"
                                                        font-family="Helvetica, Arial, sans-serif" x="565.1430362462997"
                                                        y="264.99519938278195" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1365">auguest</tspan>
                                                        <title>auguest</title>
                                                    </text></g>
                                                <line id="SvgjsLine1366" x1="0" y1="236.99519938278195"
                                                    x2="602.8192386627197" y2="236.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-width="1"></line>
                                            </g>
                                            <g id="SvgjsG1381" class="apexcharts-grid">
                                                <g id="SvgjsG1382" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1393" x1="0" y1="0"
                                                        x2="602.8192386627197" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1394" x1="0" y1="47.19903987655639"
                                                        x2="602.8192386627197" y2="47.19903987655639" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1395" x1="0" y1="94.39807975311278"
                                                        x2="602.8192386627197" y2="94.39807975311278" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1396" x1="0" y1="141.59711962966918"
                                                        x2="602.8192386627197" y2="141.59711962966918" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1397" x1="0" y1="188.79615950622556"
                                                        x2="602.8192386627197" y2="188.79615950622556" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1398" x1="0" y1="235.99519938278195"
                                                        x2="602.8192386627197" y2="235.99519938278195" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1383" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1384" x1="0" y1="236.99519938278195"
                                                    x2="0" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1385" x1="75.35240483283997" y1="236.99519938278195"
                                                    x2="75.35240483283997" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1386" x1="150.70480966567993" y1="236.99519938278195"
                                                    x2="150.70480966567993" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1387" x1="226.0572144985199" y1="236.99519938278195"
                                                    x2="226.0572144985199" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1388" x1="301.40961933135986" y1="236.99519938278195"
                                                    x2="301.40961933135986" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1389" x1="376.76202416419983" y1="236.99519938278195"
                                                    x2="376.76202416419983" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1390" x1="452.1144289970398" y1="236.99519938278195"
                                                    x2="452.1144289970398" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1391" x1="527.4668338298798" y1="236.99519938278195"
                                                    x2="527.4668338298798" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1392" x1="602.8192386627197" y1="236.99519938278195"
                                                    x2="602.8192386627197" y2="242.99519938278195" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1400" x1="0" y1="235.99519938278195"
                                                    x2="602.8192386627197" y2="235.99519938278195" stroke="transparent"
                                                    stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1399" x1="0" y1="1" x2="0"
                                                    y2="235.99519938278195" stroke="transparent" stroke-dasharray="0">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1255" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1256" class="apexcharts-series" seriesName="Sales"
                                                    rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1258"
                                                        d="M 30.140961933135987 141.59711962966918L 30.140961933135987 66.69967341038385Q 37.67620241641998 59.16443292709985 45.21144289970398 66.69967341038385L 45.21144289970398 66.69967341038385L 45.21144289970398 141.59711962966918L 45.21144289970398 141.59711962966918z"
                                                        fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 30.140961933135987 141.59711962966918L 30.140961933135987 66.69967341038385Q 37.67620241641998 59.16443292709985 45.21144289970398 66.69967341038385L 45.21144289970398 66.69967341038385L 45.21144289970398 141.59711962966918L 45.21144289970398 141.59711962966918z"
                                                        pathFrom="M 30.140961933135987 141.59711962966918L 30.140961933135987 141.59711962966918L 45.21144289970398 141.59711962966918L 45.21144289970398 141.59711962966918L 45.21144289970398 141.59711962966918L 30.140961933135987 141.59711962966918"
                                                        cy="62.93205316874186" cx="105.49336676597595" j="0"
                                                        val="50" barHeight="78.66506646092732"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1263"
                                                        d="M 105.49336676597595 141.59711962966918L 105.49336676597595 74.56618005647658Q 113.02860724925995 67.03093957319258 120.56384773254395 74.56618005647658L 120.56384773254395 74.56618005647658L 120.56384773254395 141.59711962966918L 120.56384773254395 141.59711962966918z"
                                                        fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 105.49336676597595 141.59711962966918L 105.49336676597595 74.56618005647658Q 113.02860724925995 67.03093957319258 120.56384773254395 74.56618005647658L 120.56384773254395 74.56618005647658L 120.56384773254395 141.59711962966918L 120.56384773254395 141.59711962966918z"
                                                        pathFrom="M 105.49336676597595 141.59711962966918L 105.49336676597595 141.59711962966918L 120.56384773254395 141.59711962966918L 120.56384773254395 141.59711962966918L 120.56384773254395 141.59711962966918L 105.49336676597595 141.59711962966918"
                                                        cy="70.79855981483459" cx="180.84577159881593" j="1"
                                                        val="45" barHeight="70.79855981483459"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1268"
                                                        d="M 180.84577159881593 141.59711962966918L 180.84577159881593 50.9666601181984Q 188.38101208209991 43.4314196349144 195.91625256538393 50.9666601181984L 195.91625256538393 50.9666601181984L 195.91625256538393 141.59711962966918L 195.91625256538393 141.59711962966918z"
                                                        fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 180.84577159881593 141.59711962966918L 180.84577159881593 50.9666601181984Q 188.38101208209991 43.4314196349144 195.91625256538393 50.9666601181984L 195.91625256538393 50.9666601181984L 195.91625256538393 141.59711962966918L 195.91625256538393 141.59711962966918z"
                                                        pathFrom="M 180.84577159881593 141.59711962966918L 180.84577159881593 141.59711962966918L 195.91625256538393 141.59711962966918L 195.91625256538393 141.59711962966918L 195.91625256538393 141.59711962966918L 180.84577159881593 141.59711962966918"
                                                        cy="47.1990398765564" cx="256.1981764316559" j="2"
                                                        val="60" barHeight="94.39807975311278"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1273"
                                                        d="M 256.1981764316559 141.59711962966918L 256.1981764316559 35.23364682601294Q 263.7334169149399 27.69840634272894 271.26865739822387 35.23364682601294L 271.26865739822387 35.23364682601294L 271.26865739822387 141.59711962966918L 271.26865739822387 141.59711962966918z"
                                                        fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 256.1981764316559 141.59711962966918L 256.1981764316559 35.23364682601294Q 263.7334169149399 27.69840634272894 271.26865739822387 35.23364682601294L 271.26865739822387 35.23364682601294L 271.26865739822387 141.59711962966918L 271.26865739822387 141.59711962966918z"
                                                        pathFrom="M 256.1981764316559 141.59711962966918L 256.1981764316559 141.59711962966918L 271.26865739822387 141.59711962966918L 271.26865739822387 141.59711962966918L 271.26865739822387 141.59711962966918L 256.1981764316559 141.59711962966918"
                                                        cy="31.466026584370937" cx="331.55058126449586" j="3"
                                                        val="70" barHeight="110.13109304529824"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1278"
                                                        d="M 331.55058126449586 141.59711962966918L 331.55058126449586 66.69967341038385Q 339.08582174777985 59.16443292709985 346.62106223106383 66.69967341038385L 346.62106223106383 66.69967341038385L 346.62106223106383 141.59711962966918L 346.62106223106383 141.59711962966918z"
                                                        fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 331.55058126449586 141.59711962966918L 331.55058126449586 66.69967341038385Q 339.08582174777985 59.16443292709985 346.62106223106383 66.69967341038385L 346.62106223106383 66.69967341038385L 346.62106223106383 141.59711962966918L 346.62106223106383 141.59711962966918z"
                                                        pathFrom="M 331.55058126449586 141.59711962966918L 331.55058126449586 141.59711962966918L 346.62106223106383 141.59711962966918L 346.62106223106383 141.59711962966918L 346.62106223106383 141.59711962966918L 331.55058126449586 141.59711962966918"
                                                        cy="62.93205316874186" cx="406.9029860973358" j="4"
                                                        val="50" barHeight="78.66506646092732"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1283"
                                                        d="M 406.9029860973358 141.59711962966918L 406.9029860973358 74.56618005647658Q 414.4382265806198 67.03093957319258 421.9734670639038 74.56618005647658L 421.9734670639038 74.56618005647658L 421.9734670639038 141.59711962966918L 421.9734670639038 141.59711962966918z"
                                                        fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 406.9029860973358 141.59711962966918L 406.9029860973358 74.56618005647658Q 414.4382265806198 67.03093957319258 421.9734670639038 74.56618005647658L 421.9734670639038 74.56618005647658L 421.9734670639038 141.59711962966918L 421.9734670639038 141.59711962966918z"
                                                        pathFrom="M 406.9029860973358 141.59711962966918L 406.9029860973358 141.59711962966918L 421.9734670639038 141.59711962966918L 421.9734670639038 141.59711962966918L 421.9734670639038 141.59711962966918L 406.9029860973358 141.59711962966918"
                                                        cy="70.79855981483459" cx="482.2553909301758" j="5"
                                                        val="45" barHeight="70.79855981483459"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1288"
                                                        d="M 482.2553909301758 141.59711962966918L 482.2553909301758 50.9666601181984Q 489.7906314134598 43.4314196349144 497.32587189674376 50.9666601181984L 497.32587189674376 50.9666601181984L 497.32587189674376 141.59711962966918L 497.32587189674376 141.59711962966918z"
                                                        fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 482.2553909301758 141.59711962966918L 482.2553909301758 50.9666601181984Q 489.7906314134598 43.4314196349144 497.32587189674376 50.9666601181984L 497.32587189674376 50.9666601181984L 497.32587189674376 141.59711962966918L 497.32587189674376 141.59711962966918z"
                                                        pathFrom="M 482.2553909301758 141.59711962966918L 482.2553909301758 141.59711962966918L 497.32587189674376 141.59711962966918L 497.32587189674376 141.59711962966918L 497.32587189674376 141.59711962966918L 482.2553909301758 141.59711962966918"
                                                        cy="47.1990398765564" cx="557.6077957630157" j="6"
                                                        val="60" barHeight="94.39807975311278"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1293"
                                                        d="M 557.6077957630157 141.59711962966918L 557.6077957630157 35.23364682601294Q 565.1430362462997 27.69840634272894 572.6782767295837 35.23364682601294L 572.6782767295837 35.23364682601294L 572.6782767295837 141.59711962966918L 572.6782767295837 141.59711962966918z"
                                                        fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 557.6077957630157 141.59711962966918L 557.6077957630157 35.23364682601294Q 565.1430362462997 27.69840634272894 572.6782767295837 35.23364682601294L 572.6782767295837 35.23364682601294L 572.6782767295837 141.59711962966918L 572.6782767295837 141.59711962966918z"
                                                        pathFrom="M 557.6077957630157 141.59711962966918L 557.6077957630157 141.59711962966918L 572.6782767295837 141.59711962966918L 572.6782767295837 141.59711962966918L 572.6782767295837 141.59711962966918L 557.6077957630157 141.59711962966918"
                                                        cy="31.466026584370937" cx="632.9602005958557" j="7"
                                                        val="70" barHeight="110.13109304529824"
                                                        barWidth="15.070480966567994"></path>
                                                </g>
                                                <g id="SvgjsG1298" class="apexcharts-series" seriesName="Purchase"
                                                    rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1300"
                                                        d="M 30.140961933135987 141.59711962966918L 30.140961933135987 170.86882730161668Q 37.67620241641998 178.40406778490066 45.21144289970398 170.86882730161668L 45.21144289970398 170.86882730161668L 45.21144289970398 141.59711962966918L 45.21144289970398 141.59711962966918z"
                                                        fill="rgba(234,84,85,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 30.140961933135987 141.59711962966918L 30.140961933135987 170.86882730161668Q 37.67620241641998 178.40406778490066 45.21144289970398 170.86882730161668L 45.21144289970398 170.86882730161668L 45.21144289970398 141.59711962966918L 45.21144289970398 141.59711962966918z"
                                                        pathFrom="M 30.140961933135987 141.59711962966918L 30.140961933135987 141.59711962966918L 45.21144289970398 141.59711962966918L 45.21144289970398 141.59711962966918L 45.21144289970398 141.59711962966918L 30.140961933135987 141.59711962966918"
                                                        cy="174.63644754325867" cx="105.49336676597595" j="0"
                                                        val="-21" barHeight="-33.039327913589474"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1305"
                                                        d="M 105.49336676597595 141.59711962966918L 105.49336676597595 222.78777116582867Q 113.02860724925995 230.32301164911266 120.56384773254395 222.78777116582867L 120.56384773254395 222.78777116582867L 120.56384773254395 141.59711962966918L 120.56384773254395 141.59711962966918z"
                                                        fill="rgba(234,84,85,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 105.49336676597595 141.59711962966918L 105.49336676597595 222.78777116582867Q 113.02860724925995 230.32301164911266 120.56384773254395 222.78777116582867L 120.56384773254395 222.78777116582867L 120.56384773254395 141.59711962966918L 120.56384773254395 141.59711962966918z"
                                                        pathFrom="M 105.49336676597595 141.59711962966918L 105.49336676597595 141.59711962966918L 120.56384773254395 141.59711962966918L 120.56384773254395 141.59711962966918L 120.56384773254395 141.59711962966918L 105.49336676597595 141.59711962966918"
                                                        cy="226.55539140747067" cx="180.84577159881593" j="1"
                                                        val="-54" barHeight="-84.9582717778015"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1310"
                                                        d="M 180.84577159881593 141.59711962966918L 180.84577159881593 208.62805920286178Q 188.38101208209991 216.16329968614576 195.91625256538393 208.62805920286178L 195.91625256538393 208.62805920286178L 195.91625256538393 141.59711962966918L 195.91625256538393 141.59711962966918z"
                                                        fill="rgba(234,84,85,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 180.84577159881593 141.59711962966918L 180.84577159881593 208.62805920286178Q 188.38101208209991 216.16329968614576 195.91625256538393 208.62805920286178L 195.91625256538393 208.62805920286178L 195.91625256538393 141.59711962966918L 195.91625256538393 141.59711962966918z"
                                                        pathFrom="M 180.84577159881593 141.59711962966918L 180.84577159881593 141.59711962966918L 195.91625256538393 141.59711962966918L 195.91625256538393 141.59711962966918L 195.91625256538393 141.59711962966918L 180.84577159881593 141.59711962966918"
                                                        cy="212.39567944450377" cx="256.1981764316559" j="2"
                                                        val="-45" barHeight="-70.79855981483459"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1315"
                                                        d="M 256.1981764316559 141.59711962966918L 256.1981764316559 192.89504591067632Q 263.7334169149399 200.4302863939603 271.26865739822387 192.89504591067632L 271.26865739822387 192.89504591067632L 271.26865739822387 141.59711962966918L 271.26865739822387 141.59711962966918z"
                                                        fill="rgba(234,84,85,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 256.1981764316559 141.59711962966918L 256.1981764316559 192.89504591067632Q 263.7334169149399 200.4302863939603 271.26865739822387 192.89504591067632L 271.26865739822387 192.89504591067632L 271.26865739822387 141.59711962966918L 271.26865739822387 141.59711962966918z"
                                                        pathFrom="M 256.1981764316559 141.59711962966918L 256.1981764316559 141.59711962966918L 271.26865739822387 141.59711962966918L 271.26865739822387 141.59711962966918L 271.26865739822387 141.59711962966918L 256.1981764316559 141.59711962966918"
                                                        cy="196.6626661523183" cx="331.55058126449586" j="3"
                                                        val="-35" barHeight="-55.06554652264912"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1320"
                                                        d="M 331.55058126449586 141.59711962966918L 331.55058126449586 170.86882730161668Q 339.08582174777985 178.40406778490066 346.62106223106383 170.86882730161668L 346.62106223106383 170.86882730161668L 346.62106223106383 141.59711962966918L 346.62106223106383 141.59711962966918z"
                                                        fill="rgba(234,84,85,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 331.55058126449586 141.59711962966918L 331.55058126449586 170.86882730161668Q 339.08582174777985 178.40406778490066 346.62106223106383 170.86882730161668L 346.62106223106383 170.86882730161668L 346.62106223106383 141.59711962966918L 346.62106223106383 141.59711962966918z"
                                                        pathFrom="M 331.55058126449586 141.59711962966918L 331.55058126449586 141.59711962966918L 346.62106223106383 141.59711962966918L 346.62106223106383 141.59711962966918L 346.62106223106383 141.59711962966918L 331.55058126449586 141.59711962966918"
                                                        cy="174.63644754325867" cx="406.9029860973358" j="4"
                                                        val="-21" barHeight="-33.039327913589474"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1325"
                                                        d="M 406.9029860973358 141.59711962966918L 406.9029860973358 222.78777116582867Q 414.4382265806198 230.32301164911266 421.9734670639038 222.78777116582867L 421.9734670639038 222.78777116582867L 421.9734670639038 141.59711962966918L 421.9734670639038 141.59711962966918z"
                                                        fill="rgba(234,84,85,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 406.9029860973358 141.59711962966918L 406.9029860973358 222.78777116582867Q 414.4382265806198 230.32301164911266 421.9734670639038 222.78777116582867L 421.9734670639038 222.78777116582867L 421.9734670639038 141.59711962966918L 421.9734670639038 141.59711962966918z"
                                                        pathFrom="M 406.9029860973358 141.59711962966918L 406.9029860973358 141.59711962966918L 421.9734670639038 141.59711962966918L 421.9734670639038 141.59711962966918L 421.9734670639038 141.59711962966918L 406.9029860973358 141.59711962966918"
                                                        cy="226.55539140747067" cx="482.2553909301758" j="5"
                                                        val="-54" barHeight="-84.9582717778015"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1330"
                                                        d="M 482.2553909301758 141.59711962966918L 482.2553909301758 208.62805920286178Q 489.7906314134598 216.16329968614576 497.32587189674376 208.62805920286178L 497.32587189674376 208.62805920286178L 497.32587189674376 141.59711962966918L 497.32587189674376 141.59711962966918z"
                                                        fill="rgba(234,84,85,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 482.2553909301758 141.59711962966918L 482.2553909301758 208.62805920286178Q 489.7906314134598 216.16329968614576 497.32587189674376 208.62805920286178L 497.32587189674376 208.62805920286178L 497.32587189674376 141.59711962966918L 497.32587189674376 141.59711962966918z"
                                                        pathFrom="M 482.2553909301758 141.59711962966918L 482.2553909301758 141.59711962966918L 497.32587189674376 141.59711962966918L 497.32587189674376 141.59711962966918L 497.32587189674376 141.59711962966918L 482.2553909301758 141.59711962966918"
                                                        cy="212.39567944450377" cx="557.6077957630157" j="6"
                                                        val="-45" barHeight="-70.79855981483459"
                                                        barWidth="15.070480966567994"></path>
                                                    <path id="SvgjsPath1335"
                                                        d="M 557.6077957630157 141.59711962966918L 557.6077957630157 192.89504591067632Q 565.1430362462997 200.4302863939603 572.6782767295837 192.89504591067632L 572.6782767295837 192.89504591067632L 572.6782767295837 141.59711962966918L 572.6782767295837 141.59711962966918z"
                                                        fill="rgba(234,84,85,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="square" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskt3ausdskf)"
                                                        pathTo="M 557.6077957630157 141.59711962966918L 557.6077957630157 192.89504591067632Q 565.1430362462997 200.4302863939603 572.6782767295837 192.89504591067632L 572.6782767295837 192.89504591067632L 572.6782767295837 141.59711962966918L 572.6782767295837 141.59711962966918z"
                                                        pathFrom="M 557.6077957630157 141.59711962966918L 557.6077957630157 141.59711962966918L 572.6782767295837 141.59711962966918L 572.6782767295837 141.59711962966918L 572.6782767295837 141.59711962966918L 557.6077957630157 141.59711962966918"
                                                        cy="196.6626661523183" cx="632.9602005958557" j="7"
                                                        val="-35" barHeight="-55.06554652264912"
                                                        barWidth="15.070480966567994"></path>
                                                </g>
                                                <g id="SvgjsG1257" class="apexcharts-datalabels" data:realIndex="0">
                                                    <g id="SvgjsG1260" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1262"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="37.67620241641998" y="109.06458658994038"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="37.67620241641998"
                                                            cy="109.06458658994038"
                                                            style="font-family: Helvetica, Arial, sans-serif;">50</text>
                                                    </g>
                                                    <g id="SvgjsG1265" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1267"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="113.02860724925996" y="112.99783991298675"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="113.02860724925996"
                                                            cy="112.99783991298675"
                                                            style="font-family: Helvetica, Arial, sans-serif;">45</text>
                                                    </g>
                                                    <g id="SvgjsG1270" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1272"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="188.38101208209991" y="101.19807994384766"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="188.38101208209991"
                                                            cy="101.19807994384766"
                                                            style="font-family: Helvetica, Arial, sans-serif;">60</text>
                                                    </g>
                                                    <g id="SvgjsG1275" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1277"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="263.7334169149399" y="93.33157329775491"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="263.7334169149399"
                                                            cy="93.33157329775491"
                                                            style="font-family: Helvetica, Arial, sans-serif;">70</text>
                                                    </g>
                                                    <g id="SvgjsG1280" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1282"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="339.08582174777985" y="109.06458658994038"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="339.08582174777985"
                                                            cy="109.06458658994038"
                                                            style="font-family: Helvetica, Arial, sans-serif;">50</text>
                                                    </g>
                                                    <g id="SvgjsG1285" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1287"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="414.4382265806198" y="112.99783991298675"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="414.4382265806198"
                                                            cy="112.99783991298675"
                                                            style="font-family: Helvetica, Arial, sans-serif;">45</text>
                                                    </g>
                                                    <g id="SvgjsG1290" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1292"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="489.7906314134597" y="101.19807994384766"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="489.7906314134597"
                                                            cy="101.19807994384766"
                                                            style="font-family: Helvetica, Arial, sans-serif;">60</text>
                                                    </g>
                                                    <g id="SvgjsG1295" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1297"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="565.1430362462997" y="93.33157329775491"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="565.1430362462997"
                                                            cy="93.33157329775491"
                                                            style="font-family: Helvetica, Arial, sans-serif;">70</text>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1299" class="apexcharts-datalabels" data:realIndex="1">
                                                    <g id="SvgjsG1302" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1304"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="37.67620241641998" y="164.9167837771988"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="37.67620241641998"
                                                            cy="164.9167837771988"
                                                            style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                    <g id="SvgjsG1307" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1309"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="113.02860724925996" y="190.8762557093048"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="113.02860724925996"
                                                            cy="190.8762557093048"
                                                            style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                    <g id="SvgjsG1312" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1314"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="188.38101208209991" y="183.79639972782132"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="188.38101208209991"
                                                            cy="183.79639972782132"
                                                            style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                    <g id="SvgjsG1317" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1319"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="263.7334169149399" y="175.9298930817286"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="263.7334169149399"
                                                            cy="175.9298930817286"
                                                            style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                    <g id="SvgjsG1322" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1324"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="339.08582174777985" y="164.9167837771988"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="339.08582174777985"
                                                            cy="164.9167837771988"
                                                            style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                    <g id="SvgjsG1327" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1329"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="414.4382265806198" y="190.8762557093048"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="414.4382265806198"
                                                            cy="190.8762557093048"
                                                            style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                    <g id="SvgjsG1332" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1334"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="489.7906314134597" y="183.79639972782132"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="489.7906314134597"
                                                            cy="183.79639972782132"
                                                            style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                    <g id="SvgjsG1337" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1339"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="565.1430362462997" y="175.9298930817286"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="565.1430362462997"
                                                            cy="175.9298930817286"
                                                            style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1401" x1="0" y1="0"
                                                x2="602.8192386627197" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1402" x1="0" y1="0"
                                                x2="602.8192386627197" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1403" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1404" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1405" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1367" class="apexcharts-yaxis" rel="0"
                                            transform="translate(13.180761337280273, 0)">
                                            <g id="SvgjsG1368" class="apexcharts-yaxis-texts-g"><text
                                                    id="SvgjsText1369" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="31.5" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1370">90</tspan>
                                                </text><text id="SvgjsText1371"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="78.69903987655638" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1372">60</tspan>
                                                </text><text id="SvgjsText1373"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="125.89807975311277" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1374">30</tspan>
                                                </text><text id="SvgjsText1375"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="173.09711962966915" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1376">0</tspan>
                                                </text><text id="SvgjsText1377"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="220.29615950622554" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1378">-30</tspan>
                                                </text><text id="SvgjsText1379"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="267.49519938278195" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1380">-60</tspan>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1245" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light"
                                        style="left: 80.3636px; top: 57.3px;">
                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                            style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(40, 199, 111);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label">Sales: </span><span
                                                        class="apexcharts-tooltip-text-value">50</span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;">
                                            <span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(40, 199, 111);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label">Sales: </span><span
                                                        class="apexcharts-tooltip-text-value">50</span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                    <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                        <div class="apexcharts-menu-icon" title="Menu"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                            </svg></div>
                                        <div class="apexcharts-menu">
                                            <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download
                                                SVG</div>
                                            <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download
                                                PNG</div>
                                            <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download
                                                CSV</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Recently Added Products</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="dropset">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="https://dreamspos.dreamguystech.com/laravel/template/public/productlist"
                                            class="dropdown-item">Product List</a>
                                    </li>
                                    <li>
                                        <a href="https://dreamspos.dreamguystech.com/laravel/template/public/addproduct"
                                            class="dropdown-item">Product Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive dataview">
                                <table class="table datatable ">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Products</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recent_added_product as $key => $product)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td class="productimgname">
                                                    <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                                        class="product-img">
                                                        <img src="{{ asset('assets/product/' . $product->image) }}"
                                                            alt="product">
                                                    </a>
                                                    <a
                                                        href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                                </td>
                                                <td>${{ $product->selling_price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Product Out Stock</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th>SNo</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Brand Name</th>
                                    <th>Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_out_stock as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><a href="javascript:void(0);">{{ $product->code }}</a></td>
                                        <td class="productimgname">
                                            <a class="product-img"
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset('assets/product/' . $product->image) }}"
                                                    alt="product">
                                            </a>
                                            <a
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ $product->brand->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
