<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="static/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/favicons/favicon-16x16.png">
    <title>Departure form - ESMS</title>
    <link href="static/css/sb-admin-2.min.css" rel="stylesheet">
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
              <h2 class="h6 mb-0 font-weight-bold">Departure form</h2>
            </div>
            <div class="card-body mb-1 mx-1">
              <form>
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <label for="departureDate">Departure date</label>
                    <input class="form-control" type="date" id="departureDate" name="departureDate" onfocus="this.showPicker()" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="departureTime">Departure time</label>
                    <input class="form-control" type="time" id="departureTime" name="departureTime" onfocus="this.showPicker()" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="specificLocation">Specific location</label>
                  <input class="form-control" type="text" id="specificLocation" name="specificLocation" placeholder="Enter specific location" required>
                </div>
                <div class="form-group">
                  <label for="purpose">Purpose</label>
                  <input class="form-control" type="text" id="purpose" name="purpose" placeholder="Enter purpose" required>
                </div>
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <label for="returnDate">Return date</label>
                    <input class="form-control" type="date" id="returnDate" name="returnDate" onfocus="this.showPicker()" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="returnTime">Return time</label>
                    <input class="form-control" type="time" id="returnTime" name="returnTime" onfocus="this.showPicker()" required>
                  </div>
                </div>
                <div class="mb-4"></div>
                <button class="btn btn-primary" type="submit">Submit</button>
              </form>
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
    <script src="static/js/sb-admin-2.min.js"></script>
    <script src="static/js/jquery.easing.min.js"></script>
  </body>
</html>
