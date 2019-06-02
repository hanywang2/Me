<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

</head>

<body>
    <!-- Left Panel -->
    <?php include 'nav.php';?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include 'header.php';?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">$<span class="count">23569</span></div>
                                            <div class="stat-heading">Revenue</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">3435</span></div>
                                            <div class="stat-heading">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">349</span></div>
                                            <div class="stat-heading">Templates</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">2986</span></div>
                                            <div class="stat-heading">Clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                  <div class="row">

                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header">
                                  <strong class="card-title">Data Table</strong>
                              </div>
                              <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>Name</th>
                                              <th>Position</th>
                                              <th>Office</th>
                                              <th>Salary</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Tiger Nixon</td>
                                              <td>System Architect</td>
                                              <td>Edinburgh</td>
                                              <td>$320,800</td>
                                          </tr>
                                          <tr>
                                              <td>Garrett Winters</td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              <td>$170,750</td>
                                          </tr>
                                          <tr>
                                              <td>Ashton Cox</td>
                                              <td>Junior Technical Author</td>
                                              <td>San Francisco</td>
                                              <td>$86,000</td>
                                          </tr>
                                          <tr>
                                              <td>Cedric Kelly</td>
                                              <td>Senior Javascript Developer</td>
                                              <td>Edinburgh</td>
                                              <td>$433,060</td>
                                          </tr>
                                          <tr>
                                              <td>Airi Satou</td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              <td>$162,700</td>
                                          </tr>
                                          <tr>
                                              <td>Brielle Williamson</td>
                                              <td>Integration Specialist</td>
                                              <td>New York</td>
                                              <td>$372,000</td>
                                          </tr>
                                          <tr>
                                              <td>Herrod Chandler</td>
                                              <td>Sales Assistant</td>
                                              <td>San Francisco</td>
                                              <td>$137,500</td>
                                          </tr>
                                          <tr>
                                              <td>Rhona Davidson</td>
                                              <td>Integration Specialist</td>
                                              <td>Tokyo</td>
                                              <td>$327,900</td>
                                          </tr>
                                          <tr>
                                              <td>Colleen Hurst</td>
                                              <td>Javascript Developer</td>
                                              <td>San Francisco</td>
                                              <td>$205,500</td>
                                          </tr>
                                          <tr>
                                              <td>Sonya Frost</td>
                                              <td>Software Engineer</td>
                                              <td>Edinburgh</td>
                                              <td>$103,600</td>
                                          </tr>
                                          <tr>
                                              <td>Jena Gaines</td>
                                              <td>Office Manager</td>
                                              <td>London</td>
                                              <td>$90,560</td>
                                          </tr>
                                          <tr>
                                              <td>Quinn Flynn</td>
                                              <td>Support Lead</td>
                                              <td>Edinburgh</td>
                                              <td>$342,000</td>
                                          </tr>
                                          <tr>
                                              <td>Charde Marshall</td>
                                              <td>Regional Director</td>
                                              <td>San Francisco</td>
                                              <td>$470,600</td>
                                          </tr>
                                          <tr>
                                              <td>Haley Kennedy</td>
                                              <td>Senior Marketing Designer</td>
                                              <td>London</td>
                                              <td>$313,500</td>
                                          </tr>
                                          <tr>
                                              <td>Tatyana Fitzpatrick</td>
                                              <td>Regional Director</td>
                                              <td>London</td>
                                              <td>$385,750</td>
                                          </tr>
                                          <tr>
                                              <td>Michael Silva</td>
                                              <td>Marketing Designer</td>
                                              <td>London</td>
                                              <td>$198,500</td>
                                          </tr>
                                          <tr>
                                              <td>Paul Byrd</td>
                                              <td>Chief Financial Officer (CFO)</td>
                                              <td>New York</td>
                                              <td>$725,000</td>
                                          </tr>
                                          <tr>
                                              <td>Gloria Little</td>
                                              <td>Systems Administrator</td>
                                              <td>New York</td>
                                              <td>$237,500</td>
                                          </tr>
                                          <tr>
                                              <td>Bradley Greer</td>
                                              <td>Software Engineer</td>
                                              <td>London</td>
                                              <td>$132,000</td>
                                          </tr>
                                          <tr>
                                              <td>Dai Rios</td>
                                              <td>Personnel Lead</td>
                                              <td>Edinburgh</td>
                                              <td>$217,500</td>
                                          </tr>
                                          <tr>
                                              <td>Jenette Caldwell</td>
                                              <td>Development Lead</td>
                                              <td>New York</td>
                                              <td>$345,000</td>
                                          </tr>
                                          <tr>
                                              <td>Yuri Berry</td>
                                              <td>Chief Marketing Officer (CMO)</td>
                                              <td>New York</td>
                                              <td>$675,000</td>
                                          </tr>
                                          <tr>
                                              <td>Caesar Vance</td>
                                              <td>Pre-Sales Support</td>
                                              <td>New York</td>
                                              <td>$106,450</td>
                                          </tr>
                                          <tr>
                                              <td>Doris Wilder</td>
                                              <td>Sales Assistant</td>
                                              <td>Sidney</td>
                                              <td>$85,600</td>
                                          </tr>
                                          <tr>
                                              <td>Angelica Ramos</td>
                                              <td>Chief Executive Officer (CEO)</td>
                                              <td>London</td>
                                              <td>$1,200,000</td>
                                          </tr>
                                          <tr>
                                              <td>Gavin Joyce</td>
                                              <td>Developer</td>
                                              <td>Edinburgh</td>
                                              <td>$92,575</td>
                                          </tr>
                                          <tr>
                                              <td>Jennifer Chang</td>
                                              <td>Regional Director</td>
                                              <td>Singapore</td>
                                              <td>$357,650</td>
                                          </tr>
                                          <tr>
                                              <td>Brenden Wagner</td>
                                              <td>Software Engineer</td>
                                              <td>San Francisco</td>
                                              <td>$206,850</td>
                                          </tr>
                                          <tr>
                                              <td>Fiona Green</td>
                                              <td>Chief Operating Officer (COO)</td>
                                              <td>San Francisco</td>
                                              <td>$850,000</td>
                                          </tr>
                                          <tr>
                                              <td>Shou Itou</td>
                                              <td>Regional Marketing</td>
                                              <td>Tokyo</td>
                                              <td>$163,000</td>
                                          </tr>
                                          <tr>
                                              <td>Michelle House</td>
                                              <td>Integration Specialist</td>
                                              <td>Sidney</td>
                                              <td>$95,400</td>
                                          </tr>
                                          <tr>
                                              <td>Suki Burks</td>
                                              <td>Developer</td>
                                              <td>London</td>
                                              <td>$114,500</td>
                                          </tr>
                                          <tr>
                                              <td>Prescott Bartlett</td>
                                              <td>Technical Author</td>
                                              <td>London</td>
                                              <td>$145,000</td>
                                          </tr>
                                          <tr>
                                              <td>Gavin Cortez</td>
                                              <td>Team Leader</td>
                                              <td>San Francisco</td>
                                              <td>$235,500</td>
                                          </tr>
                                          <tr>
                                              <td>Martena Mccray</td>
                                              <td>Post-Sales support</td>
                                              <td>Edinburgh</td>
                                              <td>$324,050</td>
                                          </tr>
                                          <tr>
                                              <td>Unity Butler</td>
                                              <td>Marketing Designer</td>
                                              <td>San Francisco</td>
                                              <td>$85,675</td>
                                          </tr>
                                          <tr>
                                              <td>Howard Hatfield</td>
                                              <td>Office Manager</td>
                                              <td>San Francisco</td>
                                              <td>$164,500</td>
                                          </tr>
                                          <tr>
                                              <td>Hope Fuentes</td>
                                              <td>Secretary</td>
                                              <td>San Francisco</td>
                                              <td>$109,850</td>
                                          </tr>
                                          <tr>
                                              <td>Vivian Harrell</td>
                                              <td>Financial Controller</td>
                                              <td>San Francisco</td>
                                              <td>$452,500</td>
                                          </tr>
                                          <tr>
                                              <td>Timothy Mooney</td>
                                              <td>Office Manager</td>
                                              <td>London</td>
                                              <td>$136,200</td>
                                          </tr>
                                          <tr>
                                              <td>Jackson Bradshaw</td>
                                              <td>Director</td>
                                              <td>New York</td>
                                              <td>$645,750</td>
                                          </tr>
                                          <tr>
                                              <td>Olivia Liang</td>
                                              <td>Support Engineer</td>
                                              <td>Singapore</td>
                                              <td>$234,500</td>
                                          </tr>
                                          <tr>
                                              <td>Bruno Nash</td>
                                              <td>Software Engineer</td>
                                              <td>London</td>
                                              <td>$163,500</td>
                                          </tr>
                                          <tr>
                                              <td>Sakura Yamamoto</td>
                                              <td>Support Engineer</td>
                                              <td>Tokyo</td>
                                              <td>$139,575</td>
                                          </tr>
                                          <tr>
                                              <td>Thor Walton</td>
                                              <td>Developer</td>
                                              <td>New York</td>
                                              <td>$98,540</td>
                                          </tr>
                                          <tr>
                                              <td>Finn Camacho</td>
                                              <td>Support Engineer</td>
                                              <td>San Francisco</td>
                                              <td>$87,500</td>
                                          </tr>
                                          <tr>
                                              <td>Serge Baldwin</td>
                                              <td>Data Coordinator</td>
                                              <td>Singapore</td>
                                              <td>$138,575</td>
                                          </tr>
                                          <tr>
                                              <td>Zenaida Frank</td>
                                              <td>Software Engineer</td>
                                              <td>New York</td>
                                              <td>$125,250</td>
                                          </tr>
                                          <tr>
                                              <td>Zorita Serrano</td>
                                              <td>Software Engineer</td>
                                              <td>San Francisco</td>
                                              <td>$115,000</td>
                                          </tr>
                                          <tr>
                                              <td>Jennifer Acosta</td>
                                              <td>Junior Javascript Developer</td>
                                              <td>Edinburgh</td>
                                              <td>$75,650</td>
                                          </tr>
                                          <tr>
                                              <td>Cara Stevens</td>
                                              <td>Sales Assistant</td>
                                              <td>New York</td>
                                              <td>$145,600</td>
                                          </tr>
                                          <tr>
                                              <td>Hermione Butler</td>
                                              <td>Regional Director</td>
                                              <td>London</td>
                                              <td>$356,250</td>
                                          </tr>
                                          <tr>
                                              <td>Lael Greer</td>
                                              <td>Systems Administrator</td>
                                              <td>London</td>
                                              <td>$103,500</td>
                                          </tr>
                                          <tr>
                                              <td>Jonas Alexander</td>
                                              <td>Developer</td>
                                              <td>San Francisco</td>
                                              <td>$86,500</td>
                                          </tr>
                                          <tr>
                                              <td>Shad Decker</td>
                                              <td>Regional Director</td>
                                              <td>Edinburgh</td>
                                              <td>$183,000</td>
                                          </tr>
                                          <tr>
                                              <td>Michael Bruce</td>
                                              <td>Javascript Developer</td>
                                              <td>Singapore</td>
                                              <td>$183,000</td>
                                          </tr>
                                          <tr>
                                              <td>Donna Snider</td>
                                              <td>Customer Support</td>
                                              <td>New York</td>
                                              <td>$112,000</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>

                  </div>
                </div>
                <!-- /.orders -->
                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <?php include 'footer.php';?>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>

    <!--Local Stuff-->
    <script>

    //Data Table
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    });
    </script>
</body>
</html>
