<!DOCTYPE html>
<html>
<head>
  <title>HIDGA PROJECT</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <form >
      <div class="form-group">
        <input type="text" id="search" name="search" placeholder="Search" class="form-control">
      </div>
    </form>
    <hr>
    <div class="col-sm-2"></div>
    <!-- Organisation units -->
    <div class="col-sm-4">
      <div class="table-responsive">
        <table id="table" class="table-striped" width="100%">
          <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Level</th>
          </tr>
          <tbody>
            <?php

            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://play.dhis2.org/release1/api/organisationUnits.json?paging=false&fields=name%2Ccode%2Clevel",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "authorization: Basic YWRtaW46ZGlzdHJpY3Q=",
                "cache-control: no-cache",
                "postman-token: fc7ab522-3de1-0974-2401-05d09b963893"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              $data = json_decode($response, true);

              $clinics = $data["organisationUnits"];
              
              foreach ($clinics as $clinic) {
                echo '<tr>';
                echo '<td>' . $clinic['name'] . '</td>';

                echo '<td>' . $clinic['code'] . '</td>';
                  echo '<td>' . $clinic['level'] . '</td>';
                echo '</tr>';
              }
            }

          ?>
          </tbody>
        </table>
        </div>
      </div>

    <!-- data elements -->
    <div class="col-sm-4">
      <div class="table-responsive">
        <table id="table" class="table-striped" width="100%">
          <tr>
            <th>Name</th>
            <th>Code</th>
          </tr>
          <tbody>
            <?php

            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://play.dhis2.org/release1/api/dataElements.json?paging=false&fields=name%2Ccode",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "authorization: Basic YWRtaW46ZGlzdHJpY3Q=",
                "cache-control: no-cache",
                "postman-token: fc7ab522-3de1-0974-2401-05d09b963893"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              $data = json_decode($response, true);

              $clinics = $data["dataElements"];
              
              foreach ($clinics as $clinic) {
                echo '<tr>';

                echo '<td>' . $clinic['name'] . '</td>';

                echo '<td>' . $clinic['code'] . '</td>';

                echo '</tr>';
              }
            }

          ?>
          </tbody>
        </table>
        </div>
      </div>
    <div class="col-sm-2"></div>
  </div>

  <script type="text/javascript">
    var $rows = $('#table tr');
    $('#search').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        
        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
          }).hide();
      });
  </script>

  <script type="text/javascript" src="node_modules/datatables.net/js/jquery.dataTables.js">
    $(function() {
      $("#table").DataTable({
        order: [[0, "desc"]]
      });
    });
  </script>
</body>
</html>