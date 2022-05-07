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
    <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="popup text-left">
                <h4 class="mb-3">Sipariş Düzenle</h4>
                <form id="customerForm" method="post" data-toggle="validator">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-etgroup">
                          
                          <label id="orderId" value=""></label>
                          <label id="customerId" value=""></label>
                          <label>Müşteri Adı *</label>
                          <input
                            id="customerName"
                            name="customerName"
                            type="text"
                            class="form-control"
                            placeholder="Müşteri Adını Girin"
                            disabled
                          />
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Ürün </label>
                          <input
                            id="productName"
                            name="productName"
                            type="text"
                            class="form-control"
                            placeholder="Ürün Adını Girin"
                            disabled
                          />
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Adet*</label>
                          <input
                            id="orderQuantity"
                            name="orderQuantity"
                            type="number"
                            class="form-control fa-phone"
                            placeholder="Adet/Kg Bilgisi Girin"
                            required
                          />
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tarih </label>
                          <input
                            id="orderDate"
                            name="orderDate"
                            type="date"
                            class="form-control"
                            placeholder="Borç Miktarını Girin(TL)"
                            disabled
                          />
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Fiyat</label>
                          <input
                            id="orderPrice"
                            name="orderPrice"
                            type="number"
                            class="form-control"
                            placeholder="Fiyatı Girin"
                          />
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                    <button id="updateOrder" type="button" class="btn btn-primary mr-2">
                      Siparişi Düzenle
                    </button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="content-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="card card-block card-stretch card-height">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4 card-total-sale">
                    <div class="icon iq-icon-box-2 bg-info-light">
                      <img src="../assets/images/product/1.png" class="img-fluid" alt="image">
                    </div>
                    <div>
                      <p class="mb-2">Toplam Satış</p>
                      <?php
                        require_once 'connection.php';
                        $sorgu = $conn->query("SELECT SUM(orderPrice) as total FROM TblOrder where orderStatus = 1");
                        foreach($sorgu as $sorgu){
                          $totalPrice = $sorgu["total"];
                          echo "<h4>$totalPrice TL</h4>";
                        }
                        
                      ?>
                      <br>
                    </div>
                  </div>
                  <div class="iq-progress-bar mt-2">
                    <span class="bg-info iq-progress progress-1" data-percent="100">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="card card-block card-stretch card-height">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4 card-total-sale">
                    <div class="icon iq-icon-box-2 bg-success-light">
                      <img src="../assets/images/product/3.png" class="img-fluid" alt="image">
                    </div>
                    <div>
                      <p class="mb-2">Toplam Borç</p>
                      <?php
                        require_once 'connection.php';
                        $sorgu = $conn->query("SELECT SUM(orderPrice) as total FROM TblOrder where orderStatus = 0");
                        foreach($sorgu as $sorgu){
                          $totalPrice = $sorgu["total"];
                          echo "<h4>$totalPrice TL</h4>";
                        }
                        
                      ?>
                      <br>
                    </div>
                  </div>
                  <div class="iq-progress-bar mt-2">
                    <span class="bg-success iq-progress progress-1" data-percent="100">
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive col-lg-12 ">
          <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12">
                <table id="datatable" class="table data-tables table-striped dataTable" role="grid"
                  aria-describedby="datatable_info">
                  <thead>
                        <tr class="ligth" role="row">
                          <th
                            class="sorting sorting_asc"
                            tabindex="0"
                            aria-controls="datatable"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="Name: activate to sort column descending"
                            style="width: 265.438px"
                          >
                            Müşteri Adı
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="datatable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Position: activate to sort column ascending"
                            style="width: 411.266px"
                          >
                            Ürün
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="datatable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Office: activate to sort column ascending"
                            style="width: 197.656px"
                          >
                            Adet/Kg
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="datatable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Age: activate to sort column ascending"
                            style="width: 83px"
                          >
                            Fiyat
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="datatable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Start date: activate to sort column ascending"
                            style="width: 181.828px"
                          >
                            Tarih
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="datatable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Salary: activate to sort column ascending"
                            style="width: 172.812px"
                          ></th>
                        </tr>
                      </thead>
                  <tbody>
                    <?php
                    require_once 'connection.php';
                    $sorgu = $conn->query("SELECT orderId,orderProductId,productName,customerName,orderDate,orderPrice,orderStatus,orderQuantity FROM TblOrder left join tblproduct on orderProductId = productId left join tblcustomer on orderCustomerId = customerId where orderStatus = 0");
                    foreach($sorgu as $sorgu){
                  $orderId = $sorgu["orderId"];
                  $orderProductId = $sorgu["orderProductId"];
                  $productName = $sorgu["productName"];
                  $customerName = $sorgu["customerName"];
                  $orderDate = $sorgu["orderDate"];
                  $orderPrice = $sorgu["orderPrice"];
                  $orderStatus = $sorgu["orderStatus"];
                  $orderQuantity = $sorgu["orderQuantity"];
                  echo "<tr id='$orderId' class='odd'><td>$customerName</td><td>$productName</td><td>".$orderQuantity."</td>"."<td>".$orderPrice."</td><td>$orderDate"."</td>";
                  echo "<td><div class='d-flex align-items-center list-action'>";
                  echo "<button type='button' id='button$orderId'
                  onclick='completeOrder($orderId,1,$orderPrice)' class='btn btn-primary mr-2 btn-success' title='Tamamla'>✓</button>";
                       
                  echo "<button type='button' data-toggle='modal' data-target='#new-order' 
                  onclick='popupFiller($orderId,$orderProductId,`$customerName`,`$productName`,`$orderDate`,$orderPrice,$orderStatus,$orderQuantity)' class='btn btn-primary mr-2 btn-info' title='Düzenle'>✎</button>
                              <button
                                type='button'
                                class='btn btn-primary mr-2 btn-danger'
                                title='Sil'
                                onclick='deleteItem($orderId,$orderPrice)'
                              >
                                <svg
                                  xmlns='http://www.w3.org/2000/svg'
                                  width='16'
                                  height='16'
                                  fill='currentColor'
                                  class='bi bi-trash'
                                  viewBox='0 0 16 16'
                                >
                                  <path
                                    d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'
                                  />
                                  <path
                                    fill-rule='evenodd'
                                    d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'
                                  />
                                </svg>
                              </button>
                            </div>
                          </td>";
                    echo "</tr>";
 
                }

            mysqli_close($conn);
            ?>
                  </tbody>
                  <tfoot>
                        <tr>
                          <th rowspan="1" colspan="1">Müşteri Adı</th>
                          <th rowspan="1" colspan="1">Ürün</th>
                          <th rowspan="1" colspan="1">Adet/Kg</th>
                          <th rowspan="1" colspan="1">Fiyat</th>
                          <th rowspan="1" colspan="1">Tarih</th>
                          <th rowspan="1" colspan="1"></th>
                        </tr>
                      </tfoot>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-5">
              </div>
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
$("#updateOrder").on("click",  function (){
var orderId = $("#orderId").val();
var orderPrice = $("#orderPrice").val();
var orderQuantity = $("#orderQuantity").val();
  $.ajax({
  type:"POST",
  data:{
    orderId : orderId,
    orderPrice : orderPrice,
    orderQuantity : orderQuantity
  },
  url:"updateOrder.php",
});
});

function completeOrder(orderId,orderStatus,orderPrice){
  $('#'+orderId).empty();
  $.ajax({
  type:"POST",
  data:{
    orderStatus : orderStatus,
    orderId : orderId,
    orderPrice : orderPrice,
  },
  url:"updateOrder.php",
});
$('#button'+orderId).hide();


}


function deleteItem(orderId,orderPrice){
$('#'+orderId).empty();
$.ajax({
  type:'POST',
  url:'deleteOrder.php',
  data:{
    orderId : orderId,
    orderPrice : orderPrice
    },
});
} 

function popupFiller(orderId,orderProductId,customerName,productName,orderDate,orderPrice,orderStatus,orderQuantity){
$("#orderId").val(orderId);
$("#customerName").val(customerName);
$("#productName").val(productName);
$("#orderDate").val(orderDate);
$("#orderPrice").val(orderPrice);
$("#orderQuantity").val(orderQuantity);

}

</script>
</body>

</html>