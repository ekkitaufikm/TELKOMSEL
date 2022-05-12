
<!-- Container-fluid starts-->
<div class="container-fluid pt-4">
    <!-- input lat,long -->
    <div class="card">
      <div class="card-header p-3">
          <div class="row">
              <div class="col-lg-6">
                  <h5 class="card-title">Analisis Answer Komplain</h5>
              </div>
          </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <div class="form-group">
              <label>Latitude</label>
              <input type="text" id="lat" class="form-control" name="lat">
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="form-group">
              <label>Longitude</label>
              <input type="text" id="lng" class="form-control" name="lng">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- maps -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="theme-form">
                        <div id="googleMap" style="width:100%;height:380px;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- chart -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-6 col-md-12 box-col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Bar Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                      <canvas id="myBarGraph"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-12 box-col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Line Graph</h5>
                    </div>
                    <div class="card-body chart-block">
                      <canvas id="myGraph"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-12 box-col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Radar Graph</h5>
                    </div>
                    <div class="card-body chart-block">
                      <canvas id="myRadarGraph"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-12 box-col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Line Chart</h5>
                    </div>
                    <div class="card-body chart-block">
                      <canvas id="myLineCharts"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-12 box-col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Doughnut Chart</h5>
                    </div>
                    <div class="card-body chart-block chart-vertical-center">
                      <canvas id="myDoughnutGraph"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-12 box-col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Polar Chart</h5>
                    </div>
                    <div class="card-body chart-block chart-vertical-center">
                      <canvas id="myPolarGraph"></canvas>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- keterangan -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->