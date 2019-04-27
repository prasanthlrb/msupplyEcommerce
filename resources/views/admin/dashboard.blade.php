@extends('admin.app')
@section('extra-css')

@endsection
@section('section')
<div class="content-wrapper">

    <div class="content-body">
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="info">850</h3>
                    <h6>Products Sold</h6>
                  </div>
                  <div>
                    <i class="icon-basket-loaded info font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="warning">$748</h3>
                    <h6>Net Profit</h6>
                  </div>
                  <div>
                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                  aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="success">146</h3>
                    <h6>New Customers</h6>
                  </div>
                  <div>
                    <i class="icon-user-follow success font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="danger">99.89 %</h3>
                    <h6>Customer Satisfaction</h6>
                  </div>
                  <div>
                    <i class="icon-heart danger font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="recent-transactions" class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Recent Transactions</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                    href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                </ul>
              </div>
            </div>
            <div class="card-content">
              <div class="table-responsive">
                <table id="recent-orders" class="table table-hover table-xl mb-0">
                  <thead>
                    <tr>
                      <th class="border-top-0">Status</th>
                      <th class="border-top-0">Invoice#</th>
                      <th class="border-top-0">Customer Name</th>
                      <th class="border-top-0">Products</th>
                      <th class="border-top-0">Categories</th>
                      <th class="border-top-0">Shipping</th>
                      <th class="border-top-0">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                      <td class="text-truncate"><a href="#">INV-001001</a></td>
                      <td class="text-truncate">
                        <span class="avatar avatar-xs">
                          <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                          alt="avatar">
                        </span>
                        <span>Elizabeth W.</span>
                      </td>
                      <td class="text-truncate p-1">
                        <ul class="list-unstyled users-list m-0">
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-1.jpg"
                            alt="Avatar">
                          </li>
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-2.jpg"
                            alt="Avatar">
                          </li>
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-4.jpg"
                            alt="Avatar">
                          </li>
                          <li class="avatar avatar-sm">
                            <span class="badge badge-info">+1 more</span>
                          </li>
                        </ul>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                      </td>
                      <td>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                          <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%"
                          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="text-truncate">$ 1200.00</td>
                    </tr>
                    <tr>
                      <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>                          Declined</td>
                      <td class="text-truncate"><a href="#">INV-001002</a></td>
                      <td class="text-truncate">
                        <span class="avatar avatar-xs">
                          <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-5.png"
                          alt="avatar">
                        </span>
                        <span>Doris R.</span>
                      </td>
                      <td class="text-truncate p-1">
                        <ul class="list-unstyled users-list m-0">
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                            alt="Avatar">
                          </li>
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-6.jpg"
                            alt="Avatar">
                          </li>
                          <li class="avatar avatar-sm">
                            <span class="badge badge-info">+2 more</span>
                          </li>
                        </ul>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                      </td>
                      <td>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%"
                          aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="text-truncate">$ 1850.00</td>
                    </tr>
                    <tr>
                      <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>                          Pending</td>
                      <td class="text-truncate"><a href="#">INV-001003</a></td>
                      <td class="text-truncate">
                        <span class="avatar avatar-xs">
                          <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                          alt="avatar">
                        </span>
                        <span>Megan S.</span>
                      </td>
                      <td class="text-truncate p-1">
                        <ul class="list-unstyled users-list m-0">
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-2.jpg"
                            alt="Avatar">
                          </li>
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                            alt="Avatar">
                          </li>
                        </ul>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                      </td>
                      <td>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                          aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="text-truncate">$ 3200.00</td>
                    </tr>
                    <tr>
                      <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                      <td class="text-truncate"><a href="#">INV-001004</a></td>
                      <td class="text-truncate">
                        <span class="avatar avatar-xs">
                          <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-7.png"
                          alt="avatar">
                        </span>
                        <span>Andrew D.</span>
                      </td>
                      <td class="text-truncate p-1">
                        <ul class="list-unstyled users-list m-0">
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-6.jpg"
                            alt="Avatar">
                          </li>
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-1.jpg"
                            alt="Avatar">
                          </li>
                          <li class="avatar avatar-sm">
                            <span class="badge badge-info">+1 more</span>
                          </li>
                        </ul>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-info round">Apparels</button>
                      </td>
                      <td>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                          <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%"
                          aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="text-truncate">$ 4500.00</td>
                    </tr>
                    <tr>
                      <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                      <td class="text-truncate"><a href="#">INV-001005</a></td>
                      <td class="text-truncate">
                        <span class="avatar avatar-xs">
                          <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-9.png"
                          alt="avatar">
                        </span>
                        <span>Walter R.</span>
                      </td>
                      <td class="text-truncate p-1">
                        <ul class="list-unstyled users-list m-0">
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                            alt="Avatar">
                          </li>
                          <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                          class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                            src="../../../app-assets/images/portfolio/portfolio-3.jpg"
                            alt="Avatar">
                          </li>
                        </ul>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                      </td>
                      <td>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                          <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 35%"
                          aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="text-truncate">$ 1500.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-6 col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Revenue</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body pt-0">
                <div class="row mb-1">
                  <div class="col-6 col-md-4">
                    <h5>Current week</h5>
                    <h2 class="danger">$82,124</h2>
                  </div>
                  <div class="col-6 col-md-4">
                    <h5>Previous week</h5>
                    <h2 class="text-muted">$52,502</h2>
                  </div>
                </div>
                <div class="chartjs">
                  <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                  <canvas id="lastYearRevenue" width="400"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-12">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="card pull-up">
                <div class="card-header bg-hexagons">
                  <h4 class="card-title">Hit Rate
                    <span class="danger">-12%</span>
                  </h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show bg-hexagons">
                  <div class="card-body pt-0">
                    <div class="chartjs">
                      <canvas id="hit-rate-doughnut" height="275"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="card pull-up">
                <div class="card-content collapse show bg-gradient-directional-danger ">
                  <div class="card-body bg-hexagons-danger">
                    <h4 class="card-title white">Deals
                      <span class="white">-55%</span>
                      <span class="float-right">
                        <span class="white">152</span>
                        <span class="red lighten-4">/200</span>
                      </span>
                    </h4>
                    <div class="chartjs">
                      <canvas id="deals-doughnut" height="275"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="card pull-up">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h6 class="text-muted">Order Value </h6>
                        <h3>$ 88,568</h3>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-trophy success font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="card pull-up">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h6 class="text-muted">Calls</h6>
                        <h3>3,568</h3>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-call-in danger font-large-2 float-right"></i>
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
        <div class="col-12 col-md-3">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Emails</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body pt-0">
                <p>Open rate
                  <span class="float-right text-bold-600">89%</span>
                </p>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                  <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%"
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="pt-1">Sent
                  <span class="float-right">
                    <span class="text-bold-600">310</span>/500</span>
                </p>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%"
                  aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Top Products</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a href="#">Show all</a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <th scope="row" class="border-top-0">iPone X</th>
                        <td class="border-top-0">2245</td>
                      </tr>
                      <tr>
                        <th scope="row">One Plus</th>
                        <td>1850</td>
                      </tr>
                      <tr>
                        <th scope="row">Samsung S7</th>
                        <td>1550</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center">Average Deal Size</h4>
            </div>
            <div class="card-content collapse show">
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                    <h6 class="danger text-bold-600">-30%</h6>
                    <h4 class="font-large-2 text-bold-400">$12,536</h4>
                    <p class="blue-grey lighten-2 mb-0">Per rep</p>
                  </div>
                  <div class="col-md-6 col-12 text-center">
                    <h6 class="success text-bold-600">12%</h6>
                    <h4 class="font-large-2 text-bold-400">$18,548</h4>
                    <p class="blue-grey lighten-2 mb-0">Per team</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card box-shadow-0">
            <div class="card-content">
              <div class="row">
                <div class="col-md-9 col-12">
                  <div id="world-map-markers" class="height-450"></div>
                </div>
                <div class="col-md-3 col-12">
                  <div class="card-body text-center">
                    <h4 class="card-title mb-0">Visitors Sessions</h4>
                    <div class="row">
                      <div class="col-12">
                        <p class="pb-1">Sessions by Browser</p>
                        <div id="sessions-browser-donut-chart" class="height-200"></div>
                      </div>
                      <div class="col-12">
                        <div class="sales pr-2 pt-2">
                          <div class="sales-today mb-2">
                            <p class="m-0">Today's
                              <span class="success float-right"><i class="ft-arrow-up success"></i> 6.89%</span>
                            </p>
                            <div class="progress progress-sm mt-1 mb-0">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="sales-yesterday">
                            <p class="m-0">Yesterday's
                              <span class="danger float-right"><i class="ft-arrow-down danger"></i> 4.18%</span>
                            </p>
                            <div class="progress progress-sm mt-1 mb-0">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
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

@endsection
@section('extra-js')

@endsection