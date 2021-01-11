    <head>
        <link rel="stylesheet" href="css/order-form.css">
    </head>
    <?php

    include("connect.php");
    $get_med = "SELECT * FROM medicines";

    ?>
    <div class="container" style="margin-top: 5%;">
        <div class="title">
            <h2>Product Order Form</h2>
        </div>
        <div class="d-flex">
            <form action="" method="">
                <label>
                    <span class="fname">First Name <span class="required">*</span></span>
                    <input type="text" name="fname">
                </label>
                <label>
                    <span class="lname">Last Name <span class="required">*</span></span>
                    <input type="text" name="lname">
                </label>
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
                <label>
                    <span>Phone <span class="required">*</span></span>
                    <input type="tel" name="city">
                </label>
                <label>
                    <span>Email Address <span class="required">*</span></span>
                    <input type="email" name="city">
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
                location.href = 'order_submit?data=' + JSON.stringify(array1);
            })
        })
    </script>