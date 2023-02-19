<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AIS MUMTAZA</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
      <div class="me-3">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
      </div>
      <div>
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="images/logo.svg" alt="logo" />
        </a>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
      <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
          <h1 class="welcome-text">
            <!-- KATA SAMBUTAN SESUAI JAM -->
            <?php
            date_default_timezone_set('Asia/Jakarta'); // mengatur zona waktu
            $time = date('H:i'); // mengambil waktu saat ini

            if ($time >= '00:01' && $time < '11:00') {
              echo "Good Morning";
            } elseif ($time >= '11:00' && $time < '13:00') {
              echo "Good Noon";
            } elseif ($time >= '13:00' && $time < '17:00') {
              echo "Good Afternoon";
            } elseif ($time >= '17:00' && $time < '19:00') {
              echo "Good Evening";
            } else {
              echo "Good Night";
            }
            ?>
            , <span class="text-black fw-bold">M Galih Rakasiwi</span>
          </h1>
          <h3 class="welcome-sub-text">Yuk!! Sering Tidur Biar Cepet Gapai Mimpinya :)</h3>



        </li>
      </ul>
      <ul class="navbar-nav ms-auto">


        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
          <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="images/faces/raka.WEBP" alt="Profile image"> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img class="img-xs rounded-circle" src="images/faces/raka.WEBP" alt="Profile image">
              <p class="mb-1 mt-3 font-weight-semibold">M Galih Rakasiwi</p>
              <p class="fw-light text-muted mb-0">raka@mumtazacenter.com</p>
            </div>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="ti-settings"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
          <div class="img-ss rounded-circle bg-light border me-3"></div>Light
        </div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme">
          <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
        </div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default"></div>
        </div>
      </div>
    </div>
    <div id="right-sidebar" class="settings-panel">
      <i class="settings-close ti-close"></i>
      <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
        </li>
      </ul>
      <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
          <div class="add-items d-flex px-3 mb-0">
            <form class="form w-100">
              <div class="form-group d-flex">
                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
              </div>
            </form>
          </div>
          <div class="list-wrapper px-3">
            <ul class="d-flex flex-column-reverse todo-list">
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Team review meeting at 3.00 PM
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Prepare for presentation
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Resolve all the low priority tickets due today
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Schedule meeting for next week
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Project review
                  </label>
                </div>
                <i class="remove ti-close"></i>
              </li>
            </ul>
          </div>
          <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
          <div class="events pt-4 px-3">
            <div class="wrapper d-flex mb-2">
              <i class="ti-control-record text-primary me-2"></i>
              <span>Feb 11 2018</span>
            </div>
            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
            <p class="text-gray mb-0">The total number of sessions</p>
          </div>
          <div class="events pt-4 px-3">
            <div class="wrapper d-flex mb-2">
              <i class="ti-control-record text-primary me-2"></i>
              <span>Feb 7 2018</span>
            </div>
            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
            <p class="text-gray mb-0 ">Call Sarah Graves</p>
          </div>
        </div>
        <!-- To do section tab ends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
          </div>
          <ul class="chat-list">
            <li class="list active">
              <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">19 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
              <div class="info">
                <div class="wrapper d-flex">
                  <p>Catherine</p>
                </div>
                <p>Away</p>
              </div>
              <div class="badge badge-success badge-pill my-auto mx-2">4</div>
              <small class="text-muted my-auto">23 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Daniel Russell</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">14 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
              <div class="info">
                <p>James Richardson</p>
                <p>Away</p>
              </div>
              <small class="text-muted my-auto">2 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Madeline Kennedy</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">5 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Sarah Graves</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">47 min</small>
            </li>
          </ul>
        </div>
        <!-- chat tab ends -->
      </div>
    </div>

    <!-- MENU SAMPING -->
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href='home'>
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='home'>
            <i class="menu-icon mdi mdi-account-box-outline"></i>
            <span class="menu-title">Profile</span>
          </a>
        </li>
        <li class="nav-item nav-category">MENU</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-floor-plan"></i>
            <span class="menu-title">Administrasi</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Tabungan Siswa</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">SPP</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='home'>
            <i class="menu-icon mdi mdi-book-open-page-variant"></i>
            <span class="menu-title">E-Library</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='home'>
            <i class="menu-icon mdi mdi-account-plus"></i>
            <span class="menu-title">Tambah Guru</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='home'>
            <i class="menu-icon mdi mdi-account-multiple-plus"></i>
            <span class="menu-title">Tambah Siswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='home'>
            <i class="menu-icon mdi mdi-checkbox-marked-outline"></i>
            <span class="menu-title">Absen Santri</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='home'>
            <i class="menu-icon mdi mdi-close-box-outline"></i>
            <span class="menu-title">Catatan Pelanggaran</span>
          </a>
        </li>
        <li class="nav-item nav-category">AKADEMIK</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="menu-icon mdi mdi-card-text-outline"></i>
            <span class="menu-title">E-Tests</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Nahwu</a></li>
              <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Shorof</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="menu-icon mdi mdi-file-check"></i>
            <span class="menu-title">Exam</span>
            <i class="menu-arrow"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='form_etest'>
            <i class="menu-icon mdi mdi-file-lock"></i>
            <span class="menu-title">Buat Soal</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="menu-icon mdi mdi-chart-line"></i>
            <span class="menu-title">Stastistics</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
            </ul>
          </div>
        </li>


        <li class="nav-item nav-category">setting</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="menu-icon mdi mdi-lock-outline"></i>
            <span class="menu-title">Password</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">help</li>
        <li class="nav-item">
          <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
            <i class="menu-icon mdi mdi-phone-settings"></i>
            <span class="menu-title">Hubungi Kami</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <div class="home-tab">
              <div class="d-sm-flex align-items-center justify-content-between border-bottom">
              </div>
              <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                  <div class="row">
                    <div class="col-lg-8 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                  <h4 class="card-title card-title-dash">Form E-Tests</h4>
                                </div>
                              </div>

                              <!-- CONTOH FORM -->
                              <!-- CONTOH FORM PERTANYAAN-->
                              <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label>Pertanyaan</label>
                                  <input class="form-control p-input" id="InputSoal" placeholder="Masukan Pertanyaan">
                                  <label>Jawaban A</label>
                                  <input type="text" class="form-control p-input" id="jawaban_a" placeholder="Masukan Jawaban A">
                                  <label>Jawaban B</label>
                                  <input type="text" class="form-control p-input" id="jawaban_a" placeholder="Masukan Jawaban B">
                                  <label>Jawaban C</label>
                                  <input type="text" class="form-control p-input" id="jawaban_a" placeholder="Masukan Jawaban C">
                                  <label>Jawaban D</label>
                                  <input type="text" class="form-control p-input" id="jawaban_a" placeholder="Masukan Jawaban D">

                                </div>

                                <div class="form-group">
                                  <label for="exampleInputFile">File input</label>
                                  <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">

                                  <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </form>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                          <div class="card bg-primary card-rounded">
                            <div class="card-body pb-0">
                              <h4 class="card-title card-title-dash text-white mb-4">Pengumuman</h4>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                    <div class="circle-progress-width">
                                      <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                    </div>
                                    <div>
                                      <p class="text-small mb-2">Literasi Buku</p>
                                      <h4 class="mb-0 fw-bold">26.80%</h4>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="circle-progress-width">
                                      <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                    </div>
                                    <div>
                                      <p class="text-small mb-2">E-Test</p>
                                      <h4 class="mb-0 fw-bold">9065</h4>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                  <h4 class="card-title card-title-dash">Market Overview</h4>
                                  <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                </div>
                                <div>
                                  <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                      <h6 class="dropdown-header">Settings</h6>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                  <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                  <h4 class="me-2">USD</h4>
                                  <h4 class="text-success">(+1.37%)</h4>
                                </div>
                                <div class="me-3">
                                  <div id="marketing-overview-legend"></div>
                                </div>
                              </div>
                              <div class="chartjs-bar-wrapper mt-3">
                                <canvas id="marketingOverview"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded table-darkBGImg">
                            <div class="card-body">
                              <div class="col-sm-8">
                                <h3 class="text-white upgrade-info mb-0">
                                  Enhance your <span class="fw-bold">Campaign</span> for better outreach
                                </h3>
                                <a href="#" class="btn btn-info upgrade-btn">Upgrade Account!</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                    <div class="col-lg-4 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title card-title-dash">Todo list</h4>
                                    <div class="add-items d-flex mb-0">
                                      <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                      <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                  </div>
                                  <div class="list-wrapper">
                                    <ul class="todo-list todo-list-rounded">
                                      <li class="d-block">
                                        <div class="form-check w-100">
                                          <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                          </label>
                                          <div class="d-flex mt-2">
                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                            <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                            <i class="mdi mdi-flag ms-2 flag-color"></i>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="d-block">
                                        <div class="form-check w-100">
                                          <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                          </label>
                                          <div class="d-flex mt-2">
                                            <div class="ps-4 text-small me-3">23 June 2020</div>
                                            <div class="badge badge-opacity-success me-3">Done</div>
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="form-check w-100">
                                          <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                          </label>
                                          <div class="d-flex mt-2">
                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                            <div class="badge badge-opacity-success me-3">Done</div>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="border-bottom-0">
                                        <div class="form-check w-100">
                                          <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                          </label>
                                          <div class="d-flex mt-2">
                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                            <div class="badge badge-opacity-danger me-3">Expired</div>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="card-title card-title-dash">Type By Amount</h4>
                                  </div>
                                  <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                  <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block fw-bold">Shadow.bits Company</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>