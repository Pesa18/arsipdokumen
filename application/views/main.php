<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations cuy 🎉</h5>
            <p class="mb-4">
              You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
              your profile.
            </p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class="bx bx-archive text-primary p-1 rounded bg-label-primary" style="font-size: xx-large;"></i>
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                  <a class="dropdown-item" href="javascript:void(0);">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Jumlah Arsip</span>
            <h3 class="card-title mb-2"><?php echo $countArsip->jumlah; ?></h3>
            <small class="text-success fw-semibold">Arsip</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class="bx bx-archive-out text-success p-1 rounded bg-label-success" style="font-size: xx-large;"></i>
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
            <span>Sirkulasi</span>
            <h3 class="card-title text-nowrap mb-1"><?php echo $countSirkulasi->jumlah; ?></h3>
            <small class="text-success fw-semibold"> Sirkulasi</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-8 col-lg-8 order-2 order-md-1">
    <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between pb-0">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2">Order Statistics</h5>
              <small class="text-muted">42.82k Total Sales</small>
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-2">8,258</h2>
                <span>Total Orders</span>
              </div>
              <div id="orderStatisticsChart"></div>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Electronic</h6>
                    <small class="text-muted">Mobile, Earbuds, TV</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">82.5k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Fashion</h6>
                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">23.8k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Decor</h6>
                    <small class="text-muted">Fine Art, Dining</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">849k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Sports</h6>
                    <small class="text-muted">Football, Cricket Kit</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">99</small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Order Statistics -->

      <!-- Expense Overview -->
      <div class="col-md-6 col-lg-6 order-1 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">
                  Income
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab">Expenses</button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab">Profit</button>
              </li>
            </ul>
          </div>
          <div class="card-body px-0">
            <div class="tab-content p-0">
              <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                <div class="d-flex p-4 pt-3">
                  <div class="avatar flex-shrink-0 me-3">
                    <i class="bx bx-archive text-primary p-1 rounded bg-label-primary" style="font-size: xx-large;"></i>
                  </div>
                  <div>
                    <small class="text-muted d-block">Total Balance</small>
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">$459.10</h6>
                      <small class="text-success fw-semibold">
                        <i class="bx bx-chevron-up"></i>
                        42.9%
                      </small>
                    </div>
                  </div>
                </div>
                <div id="incomeChart"></div>
                <div class="d-flex justify-content-center pt-4 gap-2">
                  <div class="flex-shrink-0">
                    <div id="expensesOfWeek"></div>
                  </div>
                  <div>
                    <p class="mb-n1 mt-1">Expenses This Week</p>
                    <small class="text-muted">$39 less than last week</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Expense Overview -->

    </div>
  </div>
  <div class="col-12 col-md-8 col-lg-4 order-2 order-md-1">
    <div class="row">
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class="bx bx-user text-primary p-1 rounded bg-label-primary" style="font-size: xx-large;"></i>
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                </div>
              </div>
            </div>
            <span class="d-block mb-1">Pengguna</span>
            <h3 class="card-title text-nowrap mb-2"><?php echo $countUser->jumlah; ?></h3>
            <small class="text-danger fw-semibold"> User</small>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Profile Report</h5>
                  <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                </div>
                <div class="mt-sm-auto">
                  <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                  <h3 class="mb-0">$84,686k</h3>
                </div>
              </div>
              <div id="profileReportChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="<?php echo base_url('/assets/staradmin/src/assets/vendors/chart.js/Chart.min.js') ?>"></script>
<script>
  $(function() {
    //get the bar chart canvas
    var cData = JSON.parse(`<?php echo $chart1_data; ?>`);
    console.log(cData);
    var ctx = $("#bar-chart1");

    //bar chart data
    var data = {
      labels: cData.label,
      datasets: [{
        label: cData.label,
        data: cData.data,
        backgroundColor: ChartColor[1],
        borderColor: ChartColor[1],
        borderWidth: 0
      }]
    };

    //options
    var options = {
      responsive: true,
      title: {
        display: true,
        position: "top",
        text: "Jumlah Arsip Per-Bulan",
        fontSize: 16,
        //fontColor: "#333"
      },
      legend: {
        display: true,
        position: "bottom",
        labels: {
          //fontColor: "#333",
          fontSize: 14
        }
      }
    };

    //create bar Chart class object
    var chart1 = new Chart(ctx, {
      type: "bar",
      data: data,
      options: options
    });

  });
</script>

<script>
  $(function() {
    //get the bar chart canvas
    var cData = JSON.parse(`<?php echo $chart2_data; ?>`);
    console.log(cData);
    var ctx = $("#bar-chart2");

    //bar chart data
    var data = {
      labels: cData.label,
      datasets: [{
        label: cData.label,
        data: cData.data,
        backgroundColor: ChartColor[2],
        borderColor: ChartColor[2],
        borderWidth: 0
      }]
    };

    //options
    var options = {
      responsive: true,
      title: {
        display: true,
        position: "top",
        text: "Jumlah Arsip Per-Lokasi",
        fontSize: 16,
        //fontColor: "#333"
      },
      legend: {
        display: true,
        position: "bottom",
        labels: {
          //fontColor: "#333",
          fontSize: 14
        }
      }
    };

    //create bar Chart class object
    var chart2 = new Chart(ctx, {
      type: "bar",
      data: data,
      options: options
    });

  });
</script>

<!--<script>
  $(function(){
      //get the bar chart canvas
      var cData = JSON.parse(`<?php //echo $chart3_data; 
                              ?>`);
      console.log(cData);
      var ctx = $("#bar-chart3");
 
      //bar chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: cData.label,
            data: cData.data,
			backgroundColor: ChartColor[3],
          	borderColor: ChartColor[3],
          	borderWidth: 0
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Jumlah Peminjaman Per-Bulan",
          fontSize: 16,
          //fontColor: "#333"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            //fontColor: "#333",
            fontSize: 14
          }
        }
      };
 
      //create bar Chart class object
      var chart3 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
      });
 
  });
</script>-->
