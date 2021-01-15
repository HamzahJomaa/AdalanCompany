    <head>
        <link rel="stylesheet" href="css/order-form.css">
    </head>
    <?php

    include("connect.php");
    $get_med = "SELECT * FROM medicines";
    $get_cust = "SELECT * FROM customers WHERE id = " . $userID . "";
    $get_cust_order = "SELECT COUNT(*) as userOrder FROM `orders`";
    $query_cust = $conn->query($get_cust);
    while ($row_cat = $query_cust->fetch_assoc()) {
        $cust = $row_cat;
    }
    $quert_cust_order = $conn->query($get_cust_order);
    $cust_order = $quert_cust_order->fetch_row();
    $order = intval($cust_order[0]) + 1;

    ?>
    <div class="container" style="margin-top: 5%;">
        <div class="title">
            <h2>Product Order Form - <b><?php echo $cust["first_name"] . " " . $cust["last_name"] . " ORDER#" . $order;  ?></b> </h2>
        </div>
        <div class="d-flex">
            <form action="" method="">

                <label>
                    <span>Company Name (Optional)</span>
                    <input type="text" name="cn">
                </label>
                <label>
                    <span>Street Address <span class="required">*</span></span>
                    <input type="text" name="houseadd" placeholder="House number and street name" required>
                </label>
                <label>
                    <span>&nbsp;</span>
                    <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
                </label>
                <label>
                    <span>Town / City <span class="required">*</span></span>
                    <input type="text" name="city">
                </label>
                <label>
                    <span>State / County <span class="required">*</span></span>
                    <input type="text" name="city">
                </label>
                <label>
                    <span>Postcode / ZIP <span class="required">*</span></span>
                    <input type="text" name="city">
                </label>

                <hr>
                <label>
                    <span>Medicine <span class="required">*</span></span>
                    <select name="selection_med" id="selection_med">
                        <?php
                        $query_med = $conn->query($get_med);
                        if ($query_med->num_rows > 0) {
                            while ($row_cat = $query_med->fetch_assoc()) {
                        ?><option>
                                    <?php echo $row_cat["NAME"] ?>
                                </option>
                        <?php
                            }
                        }
                        ?>
                    </select>

                </label>
                <label>
                    <span>Quantity <span class="required">*</span></span>
                    <input type="number" name="qty" id="qty">
                    <input type="button" value="Add" id="add_med">
                </label>
                <hr>
                <label>
                    <table id="table_med">
                        <tr style="width: 100%;">
                            <th style="width: 500;">Medicine</th>
                            <th style="width: 500;">Quantity</th>
                        </tr>

                    </table>
                </label>
                <button type="button" id="send">Place Order</button>

            </form>
        </div>
    </div>

    <script>
        $(document).ready(() => {
            $("#add_med").click(() => {
                let med = $("#selection_med option:selected").text()
                let qty = $("#qty").val()
                if (med != "" && qty != "" && qty > 0) {
                    $("#table_med").append("<tr><td>" + med + "</td><td> " + qty + " </td</tr>")

                } else {
                    alert("Please check the Quantity")
                }
            })

            $("#send").click(() => {

                var array1 = [];
                var headers = [];
                $('#table_med th').each(function(index, item) {
                    headers[index] = $(item).html().trim();
                });
                $('#table_med tr').has('td').each(function() {
                    var arrayItem = {};
                    $('td', $(this)).each(function(index, item) {
                        arrayItem[headers[index]] = $(item).html().trim();
                    });
                    array1.push(arrayItem);
                });
                console.log(array1)
                $.ajax({
                    type: "POST", //type of method
                    url: "order_submit.php", //your page
                    data: JSON.stringify({
                        UserId: <?php echo $userID ?>,
                        Medicines: array1,
                        OrderId: <?php echo $order ?>
                    }),
                    contentType: "application/json",
                    success: function(res) {
                        console.log(res)
                    }
                });


            })
        })
    </script>