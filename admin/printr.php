<?php
include('partials/menu.php'); 
?>
<!DOCTYPE html>
<html>
<?php
$id = $_GET['id'];
$ret = "SELECT * FROM tbl_order WHERE id = 'id'";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
while ($order = $res->fetch_object()) {
    $total = ($order->price * $order->qty);

?>

    <body>

                        <div class="main-content">
                        <div class="wrapper">
                        <h1>Print</h1>
        <br><br>
                            <address>
                                <strong>Kantipur Restaurant</strong>
                                <br>
                                127-0-0-1
                                <br>
                                 Gaushala,Kathmandu
                                <br>
                                (+977) 9810394185
                            </address>
                        </div>
                        <div>
                            <p>
                                <em>Date: <?php echo date('d/M/Y g:i', strtotime($order->created_at)); ?></em>
                            </p>
                            <p>
                                <em>Receipt #: <?php echo $order->id; ?></em>
                            </p>
                        </div>
                    </div>
                    <div >
                        <div>
                            <h2>Receipt</h2>
                        </div>
                        </span>
                        <table>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th >Unit Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td ><em> <?php echo $order->food; ?> </em></h4>
                                    </td>
                                    <td  style="text-align: center"> <?php echo $order->qty; ?></td>
                                    <td>$<?php echo $order->price; ?></td>
                                    <td>$<?php echo $total; ?></td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td >
                                        <p>
                                            <strong>Subtotal: </strong>
                                        </p>
                                        <p>
                                            <strong>Tax: </strong>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <strong>$<?php echo $total; ?></strong>
                                        </p>
                                        <p>
                                            <strong>14%</strong>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <h4><strong>Total: </strong></h4>
                                    </td>
                                    <td>
                                        <h4><strong>$<?php echo $total; ?></strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <button id="print" onclick="printContent('Receipt');" class="btn-secondary">
                        Print <span></span>
                    </button>
                </div>
            </div>
        </div>
    </body>
</div >
</div>

</html>
<script>
    function printContent(el) {
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
    }
</script>
<?php } ?>