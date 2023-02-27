<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="static/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/favicons/favicon-16x16.png">
    <title>Departure records - ESMS</title>
    <link href="static/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="static/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="static/css/all.min.css" rel="stylesheet">
    <link href="static/css/nunito.css" rel="stylesheet">
    <link href="static/css/custom-styles.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <div id="wrapper">
      <div id="content-wrapper">
        <?php
        include 'navigation-menu.php';
        ?>
        <div class="container-fluid pb-1">
          <h1 class="h2 mb-4 font-weight-light">Ler Lum Advisory Services Sdn Bhd</h1>
          <div class="card mb-5 shadow">
            <div class="card-header py-3">
              <h2 class="h6 mb-0 font-weight-bold">Departure records</h2>
            </div>
            <div class="card-body mb-1 mx-1">
              <div class="table-responsive">
                <table class="table table-bordered nowrap" id="dataTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Departure date</th>
                      <th>Departure time</th>
                      <th>Specific location</th>
                      <th>Purpose</th>
                      <th>Return date</th>
                      <th>Return time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Dr Amy Lim Swee Geok</td>
                      <td>amylim@lerlum-hlb.com</td>
                      <td>01/10/2022</td>
                      <td>02:00 PM</td>
                      <td>Ler Lum Advisory Services Sdn Bhd</td>
                      <td>General meeting</td>
                      <td>01/10/2022</td>
                      <td>04:00 PM</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php
        include 'sticky-footer.php';
        ?>
      </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/jquery.dataTables.min.js"></script>
    <script src="static/js/datatables-initialization.js"></script>
    <script src="static/js/dataTables.bootstrap4.min.js"></script>
    <script src="static/js/sb-admin-2.min.js"></script>
    <script src="static/js/jquery.easing.min.js"></script>
  </body>
</html>
