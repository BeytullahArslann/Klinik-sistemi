<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Kardeşler Bakkal</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css" />
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0" />
    <link
      rel="stylesheet"
      href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="../assets/vendor/remixicon/fonts/remixicon.css"
    />
  </head>
  <body class="">
    <!-- loader Start -->
    <div id="loading">
      <div id="loading-center"></div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-sidebar sidebar-default">
        <div
          class="
            iq-sidebar-logo
            d-flex
            align-items-center
            justify-content-between
          "
        >
          <a href="../backend/admin.html" class="header-logo">
            <img
              src="../assets/images/logo2.jpg"
              class="img-fluid rounded-normal light-logo"
              alt="logo"
            />
            <h5 class="logo-title light-logo ml-3">Kardeşler Bakkal</h5>
          </a>
          <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
          </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
          <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
              <li class="active">
                <a href="../backend/admin.html" class="svg-icon">
                  <svg
                    class="svg-icon"
                    id="p-dash1"
                    width="20"
                    height="20"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"
                    ></path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                  </svg>
                  <span class="ml-4">Panel</span>
                </a>
              </li>
              <li class="">
                <a
                  href="#product"
                  class="collapsed"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <svg
                    class="svg-icon"
                    id="p-dash8"
                    width="20"
                    height="20"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                  </svg>
                  <span class="ml-4">Müşteriler</span>
                  <svg
                    class="svg-icon iq-arrow-right arrow-active"
                    width="20"
                    height="20"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <polyline points="10 15 15 20 20 15"></polyline>
                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                  </svg>
                </a>
                <ul
                  id="product"
                  class="iq-submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  <li class="">
                    <a href="../backend/page-list-customers.html">
                      <i class="las la-minus"></i><span>Müşteri Listesi</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="../backend/page-add-customers.html">
                      <i class="las la-minus"></i><span>Müşteri Ekle</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a
                  href="#category"
                  class="collapsed"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <svg
                    class="svg-icon"
                    id="p-dash3"
                    width="20"
                    height="20"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <rect
                      x="9"
                      y="9"
                      width="13"
                      height="13"
                      rx="2"
                      ry="2"
                    ></rect>
                    <path
                      d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"
                    ></path>
                  </svg>
                  <span class="ml-4">Siparişler</span>
                  <svg
                    class="svg-icon iq-arrow-right arrow-active"
                    width="20"
                    height="20"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <polyline points="10 15 15 20 20 15"></polyline>
                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                  </svg>
                </a>
                <ul
                  id="category"
                  class="iq-submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  <li class="">
                    <a href="../backend/page-list-order.html">
                      <i class="las la-minus"></i><span>Sipariş Listesi</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="../backend/page-add-order.html">
                      <i class="las la-minus"></i><span>Sipariş Ekle</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a
                  href="#sale"
                  class="collapsed"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <svg
                    class="svg-icon"
                    id="p-dash4"
                    width="20"
                    height="20"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                  </svg>
                  <span class="ml-4">Ödeme</span>
                  <svg
                    class="svg-icon iq-arrow-right arrow-active"
                    width="20"
                    height="20"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <polyline points="10 15 15 20 20 15"></polyline>
                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                  </svg>
                </a>
                <ul
                  id="sale"
                  class="iq-submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  <li class="">
                    <a href="../backend/page-list-purchase.html">
                      <i class="las la-minus"></i><span>Ödeme Listesi</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="../backend/page-add-purchase.html">
                      <i class="las la-minus"></i><span>Ödeme Ekle</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a href="../backend/page-report.html" class="">
                  <svg
                    class="svg-icon"
                    id="p-dash7"
                    width="20"
                    height="20"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                    ></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                  </svg>
                  <span class="ml-4">Rapor</span>
                </a>
                <ul
                  id="reports"
                  class="iq-submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                ></ul>
              </li>
            </ul>
          </nav>

          <div class="p-3"></div>
        </div>
      </div>
      <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
          <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div
              class="
                iq-navbar-logo
                d-flex
                align-items-center
                justify-content-between
              "
            >
              <i class="ri-menu-line wrapper-menu"></i>
              <a href="../backend/index.html" class="header-logo">
                <img
                  src="../assets/images/logo2.jpg"
                  class="img-fluid rounded-normal"
                  alt="logo"
                />
                <h5 class="logo-title ml-3">Kardeşler Bakkal</h5>
              </a>
            </div>
            <div class="iq-search-bar device-search"></div>
            <div class="d-flex align-items-center">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-label="Toggle navigation"
              >
                <i class="ri-menu-3-line"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                  <li class="nav-item nav-icon dropdown caption-content">
                    <a>
                      <form method="post" action="login.php">
                        <button type="submit" class="btn btn-danger">
                          Çıkış
                        </button>
                      </form>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!--PopUp-->
      <div
        class="modal fade"
        id="new-order"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="popup text-left">
                <h4 class="mb-3">Hızlı Ödeme</h4>
                <form>
                  <div class="content create-workform bg-body"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-page">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h1>Hakkımızda</h1>
                  <br />
                  <h5>19090700018 Beytullah Arslan</h5>
                </div>
                <div class="card-body">
                  <p>
                    Projenin amacı: <br />
                    Proje 2 Kısımdan oluşmaktadır<br />
                    <h5>1. Kısım - Yönetim kısmı: </h5><br> Yönetim kısmına uygun username ve
                    password ile giren kullacılar bu bu sayfalar aracılıgı ile
                    gelen siparişleri ve aylık, yıllık kazançlarını
                    görüntüleyebilecek. <br /><h5>2. Kısım - Müşteri Kısmı :</h5> <br />
                    Müşteriler bu siteye üye olarak site üzerinden istedikleri
                    ürünleri satın alabilecekler
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Wrapper End-->

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
  </body>
</html>
