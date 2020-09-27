<!--customer search-->
<link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<div class="container my-4">
    <hr>
    <p class="font-weight-bold">Basic example</p>

    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">First Name
                </th>
                <th class="th-sm">Last Name
                </th>
                <th class="th-sm">Customer No
                </th>
                <th class="th-sm">Age
                </th>
                <th class="th-sm">Mobile
                </th>
                <th class="th-sm">email
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td><a href="<?php echo HOME_URL ?>?page=customer_profile">FX123</a></td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr>
            <tr>
                <td>abc </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr>
            <tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr>
            <tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr><tr>
                <td>Tiger </td>
                <td>Nixon</td>
                <td>FX123</td>
                <td>61</td>
                <td>123456</td>
                <td>abc@forex.com</td>
            </tr>
        </tbody>
    </table>





</div>



<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>