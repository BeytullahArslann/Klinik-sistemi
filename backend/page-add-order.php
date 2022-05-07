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
    <script src=
        "https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
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
          <a href="../backend/admin.php" class="header-logo">
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
                <a href="../backend/admin.php" class="svg-icon">
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
                  href="#customer"
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
                  id="customer"
                  class="iq-submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  <li class="">
                    <a href="../backend/page-list-customers.php">
                      <i class="las la-minus"></i><span>Müşteri Listesi</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="../backend/page-add-customers.php">
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
                    <a href="../backend/page-list-order.php">
                      <i class="las la-minus"></i><span>Sipariş Listesi</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="../backend/page-add-order.php">
                      <i class="las la-minus"></i><span>Sipariş Ekle</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a
                  href="#product"
                  class="collapsed"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M11.5 23l-8.5-4.535v-3.953l5.4 3.122 3.1-3.406v8.772zm1-.001v-8.806l3.162 3.343 5.338-2.958v3.887l-8.5 4.534zm-10.339-10.125l-2.161-1.244 3-3.302-3-2.823 8.718-4.505 3.215 2.385 3.325-2.385 8.742 4.561-2.995 2.771 2.995 3.443-2.242 1.241v-.001l-5.903 3.27-3.348-3.541 7.416-3.962-7.922-4.372-7.923 4.372 7.422 3.937v.024l-3.297 3.622-5.203-3.008-.16-.092-.679-.393v.002z"/></svg>
                    <path
                      d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"
                    ></path>
                  </svg>
                  <span class="ml-4">Ürünler</span>
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
                    <a href="../backend/page-list-product.php">
                      <i class="las la-minus"></i><span>Ürün Listesi</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="../backend/page-add-product.php">
                      <i class="las la-minus"></i><span>Ürün Ekle</span>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="">
                <a href="../backend/page-report.php" class="">
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
              <a href="../backend/admin.php" class="header-logo">
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
        <div class="container-fluid add-form-list">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                    <h4 class="card-title">Siparis Ekle</h4>
                  </div>
                </div>
                <div class="card-body">
                  <form
                    data-toggle="validator"
                  >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tarih *</label>
                          <input
                            type="date"
                            class="form-control"
                            id="orderDate"
                            name="orderDate"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Müşteri</label>
                         <input class="form-control" list="customersOptions" id="orderCustomers" placeholder="Müşteri Seçiniz">
                          <datalist id="customersOptions">
                          <?php
                    require_once 'connection.php';
                    $sorgu = $conn->query("SELECT * FROM TblCustomer");
                    foreach($sorgu as $sorgu){
                  $customerId = $sorgu["customerId"];
                  $customerName = $sorgu["customerName"];
                  echo "<option id='$customerId' value='$customerName'>";
                  }
                  echo "</datalist>";
                  echo "</div> </div>
                      <div class='col-md-6'>
                        <div class='form-group'>
                          <label class='col'>Ürün Seçiniz</label>
                          <input class='form-control' list='productOptions' id='orderProduct' placeholder='Ürün Seçiniz'>
                          <datalist id='productOptions'>";

                  $sorgu = $conn->query("SELECT * FROM TblProduct");
                    foreach($sorgu as $sorgu){
                  $productId = $sorgu["productId"];
                  $productName = $sorgu["productName"];
                  $productPrice = $sorgu["productSellPrice"];
                  echo "<option id='$productId' name='$productPrice' value='$productName'>$productPrice</option>";
                  }
                  echo "</datalist>
                        </div>
                      </div>";


            mysqli_close($conn);
            ?>
                      <div class="col-md-6">
                        <div class="form-group" >
                          <label>Adet *</label>
                          <input
                            id="orderQuantity"
                            name="orderQuantity"
                            type="number"
                            class="form-control"
                            placeholder="Adet"
                            onchange="changePrice()"
                            required
                          />
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group" >
                          <label>Fiyat *</label>
                          <input
                            id="orderPrice"
                            name="orderPrice"
                            type="number"
                            class="form-control"
                            placeholder="Fiyat"
                            required
                          />
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                    <button id="saveOrder" name="saveOrder" type="button" class="btn btn-primary mr-2">
                      Siparişi Kaydet
                    </button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Page end  -->
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
    <script>
      function changePrice(){
        var customer = $("#orderCustomers").val();
        var customerId = $("[value*='"+customer+"']").attr('id');
        var product = $('#orderProduct').val();
        var quantity = $("#orderQuantity").val();
        var price = $("[value*="+product+"]").attr('name');
        var productId = $("[value*="+product+"]").attr('id');
        $("#orderPrice").val(price*quantity);
      }
      $(document).ready(function () {
        $("#saveOrder").on("click", function () {
          //$("#saveProduct").attr("disabled", "disabled");
          var product = $('#orderProduct').val();
          var customer = $("#orderCustomers").val();
        

          var orderProductId = $("[value*="+product+"]").attr('id');
          var orderCustomerId = $("[value*='"+customer+"']").attr('id');
          var orderDate = $("#orderDate").val();
          var orderPrice = $("#orderPrice").val();
          var orderQuantity = $("#orderQuantity").val();
            $.ajax({
              url: "insertOrder.php",
              type: "POST",
              data: {
                orderProductId : orderProductId,
                orderCustomerId : orderCustomerId,
                orderDate : orderDate,
                orderPrice : orderPrice,
                orderQuantity : orderQuantity
              },
              cache: false,
              success: function (dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                  $("#saveProduct").removeAttr("disabled");
                  $("#productForm").find("input:text").val("");
                  $("#success").show();
                  $("#success").html("Data added successfully !");
                } else if (dataResult.statusCode == 201) {
                  alert("Error occured !");
                  $("#saveProduct").removeAttr("disabled");
                }
              },
            });
          
        });
      });
      </script>
  </body>
</html>
