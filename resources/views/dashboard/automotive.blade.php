<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="dashboard" activeItem="automotive" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Automotive"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-lg-7">
                    <div class="card bg-gradient-dark">
                        <img src="{{ asset('assets') }}/img/shapes/waves-white.svg" alt="pattern-lines"
                            class="position-absolute opacity-2 start-0 top-0 w-100">
                        <img class="w-75 mt-n7 mt-lg-n8 d-none d-md-block mx-auto z-index-1"
                            src="{{ asset('assets') }}/img/tesla-model-s.png" alt="car image">
                        <div class="card-body px-5 z-index-1 bg-cover overflow-hidden pb-2">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <h4 class="text-white opacity-9">Since Last Charge</h4>
                                            <hr class="horizontal light mt-1 mb-3">
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <h6 class="mb-0 text-white opacity-8 font-weight-normal">Distance
                                                    </h6>
                                                    <h3 class="text-white">145 <small class="text-sm">Km</small></h3>
                                                </div>
                                                <div class="ms-lg-6 ms-4">
                                                    <h6 class="mb-0 text-white opacity-8 font-weight-normal">Average
                                                        Energy</h6>
                                                    <h3 class="text-white">300 <small class="text-sm">Kw</small></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h4 class="text-white opacity-9">Nearest Charger</h4>
                                            <hr class="horizontal light mt-1 mb-3">
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <h6 class="mb-0 text-white">Miclan, DW</h6>
                                                    <h6 class="mb-0 text-white">891 Limarenda road</h6>
                                                </div>
                                                <div class="ms-lg-6 ms-4">
                                                    <button
                                                        class="btn btn-icon-only btn-rounded btn-outline-white mb-0 p-1">
                                                        <i class="material-icons text-lg" aria-hidden="true">map</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-gradient-dark mb-4 mt-4 mt-lg-0">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8 my-auto">
                                            <div class="numbers">
                                                <p
                                                    class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">
                                                    Wheather today</p>
                                                <h5 class="text-white font-weight-bolder mb-0">
                                                    San Francisco - 29°C
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <img class="w-50"
                                                src="{{ asset('assets') }}/img/small-logos/icon-sun-cloud.png"
                                                alt="image sun">
                                            <h5 class="mb-0 text-white text-end me-1">Cloudy</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 mt-2">
                            <div class="card">
                                <div class="card-body p-3 pt-2">
                                    <div
                                        class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10" aria-hidden="true">drive_eta</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Today's Trip</p>
                                        <h4 class="mb-0">145 Km</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 mt-4 mt-lg-2">
                            <div class="card">
                                <div class="card-body p-3 pt-2">
                                    <div
                                        class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10" aria-hidden="true">battery_full</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Battery Health</p>
                                        <h4 class="mb-0">99 %</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 d-none d-lg-block">
                            <div class="card mt-2">
                                <div class="card-body p-3 pt-2">
                                    <div
                                        class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10" aria-hidden="true">speed</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Average Speed</p>
                                        <h4 class="mb-0">56 Km/h</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 d-none d-lg-block">
                            <div class="card mt-2">
                                <div class="card-body p-3 pt-2">
                                    <div
                                        class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10" aria-hidden="true">volume_up</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Music Volume</p>
                                        <h4 class="mb-0">15/100</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card bg-gradient-dark">
                        <div class="card-header bg-transparent">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="input-group input-group-dynamic">
                                        <label class="form-label">Search anything...</label>
                                        <input class="form-control" type="text" onfocus="focused(this)"
                                            onfocusout="defocused(this)">
                                        <span class="input-group-text"><i class="fas fa-search"
                                                aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 my-auto ms-auto">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons text-lg text-white ms-auto" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Headphones connected">headphones</i>
                                        <i class="material-icons text-lg text-white ms-3" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Music is playing">play_arrow</i>
                                        <i class="material-icons text-lg text-white ms-3" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Start radio">power_settings_new</i>
                                        <i class="material-icons text-lg text-white ms-3" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Time tracker">watch</i>
                                        <h4 class="text-white mb-0 ms-4">10:45</h4>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal light">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="d-flex align-items-center position-relative">
                                        <h3 class="text-white mb-1">11:13</h3>
                                        <p class="text-white opacity-8 mb-1 ms-3">Estimated arrival time</p>
                                        <hr class="vertical light mt-0">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="d-flex align-items-center position-relative">
                                        <h3 class="text-white mb-1 ms-lg-auto ms-0">2.4<small
                                                class="align-top text-sm">Km</small></h3>
                                        <p class="text-white opacity-8 mb-1 ms-3 me-auto">Turn right in 2.4 miles</p>
                                        <hr class="vertical light mt-0">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 ms-lg-auto">
                                    <div class="d-flex align-items-center">
                                        <h3 class="text-white mb-1 ms-lg-auto">6.3<small
                                                class="align-top text-sm">Km</small></h3>
                                        <p class="text-white opacity-8 mb-1 ms-3">Distance to Creative Tim</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div id="mapid" class="leaflet"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative">
                                            <div class="avatar avatar-lg">
                                                <img src="{{ asset('assets') }}/img/drake.jpg" alt="kal"
                                                    class="border-radius-xl rounded-circle shadow">
                                            </div>
                                            <img class="position-absolute w-60 end-0 bottom-0 me-n3 mb-0"
                                                src="{{ asset('assets') }}/img/small-logos/logo-spotify.svg"
                                                alt="spotify logo">
                                        </div>
                                        <div class="px-3">
                                            <p class="text-white text-sm font-weight-bold mb-0">
                                                Scorpion (feat Quavo)
                                            </p>
                                            <p class="text-white text-xs mb-2 opacity-8">
                                                Drake - Hip-Hop
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 my-auto text-center">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-lg btn-icon-only btn-rounded btn-outline-white mb-0 ms-auto p-0">
                                            <i class="material-icons top-0" aria-hidden="true">skip_previous</i>
                                        </button>
                                        <button
                                            class="btn btn-lg btn-icon-only btn-rounded btn-outline-white mb-0 ms-4 p-0">
                                            <i class="material-icons top-0" aria-hidden="true">pause</i>
                                        </button>
                                        <button
                                            class="btn btn-lg btn-icon-only btn-rounded btn-outline-white mb-0 ms-4 me-auto p-0">
                                            <i class="material-icons top-0" aria-hidden="true">skip_next</i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-8 my-auto">
                                    <p class="text-white mb-2">Volume</p>
                                    <div class="mb-2" id="sliderRegular"></div>
                                </div>
                                <div class="col-lg-1 col-md-6 col-4 my-auto ms-auto">
                                    <i class="material-icons text-white mt-2 ms-auto" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Hide menu">format_list_bulleted</i>
                                    <i class="material-icons text-white ms-3 mt-2" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Track messages">mode_comment</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>
    <x-plugins></x-plugins>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/leaflet.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/nouislider.min.js"></script>
    <script>
        // Initialize the map and assign it to a variable for later use
        // there's a few ways to declare a VARIABLE in javascript.
        // you might also see people declaring variables using `const` and `let`
        var map = L.map('mapid', {
            // Set latitude and longitude of the map center (required)
            center: [38.89, -77.03],
            // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
            zoom: 11,
            scrollWheelZoom: false
        });


        // Create a Tile Layer and add it to the map
        var tiles = new L.tileLayer(
            'https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
                subdomains: 'abcd',
                maxZoom: '19'
            }).addTo(map);


        // Init slider
        var slider = document.getElementById("sliderRegular");
        noUiSlider.create(slider, {
            start: 40,
            connect: [true, false],
            range: {
                min: 0,
                max: 100
            }
        });

    </script>
    @endpush
</x-page-template>
