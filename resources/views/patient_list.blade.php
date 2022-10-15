<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>

    @include('admin.sidebar')

    <div class="main">
        <div>
            <h4>Patient List:</h4>
        </div>
        <br>
        <div class="heading">
            <h4>Patient Details:</h4>
        </div>
        <div>
            <label>Enter Patient ID / Mobile Number / Name<span style="color:red;">*</span>:</label>
            <input> <button class="btn btn-primary">Search</button>
            <br>

            <?php

            use App\Models\Patient;

            $patient_details = Patient::all();
            ?>
            <table>
                <tr>
                    
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Mobile Number</th>
                    <th>Action</th>
                </tr>
                @foreach($patient_details as $p_details)
                <tr>
                    <td>{{$p_details->id}}</td>
                    <td>{{$p_details->p_name}}</td>
                    <td>{{$p_details->p_mobile}}</td>
                    <td><a href="/patient_profile/{{$p_details->id}}" style="direction:none;">Action</a></td>
                </tr>
                @endforeach

            </table>


            <br>
            <br>
            <label class="first-row">Add Test<span style="color:red;">*</span>:</label>
            <select class="ex-large" style="width:48.8rem;" required>
                <option>--Select--</option>
                <option>A+</option>
                <option>A-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
            </select>
            <button class="btn btn-primary">Add</button>
            <br>
            <label class="first-row">Price:</label>
            <input readonly>

            <label class="second-row">Referrer Fee:</label>
            <input readonly>
        </div>

        <br>



        <div>


            <table>
                <tr style="background-color:cornflowerblue; text-align:center;">
                    <th>Test Name</th>
                    <th>Referrer Fee</th>
                    <th>Amount</th>
                </tr>

                <!-- Test Item -->
                <tr>
                    <td>Fasting Lipid Profile</td>
                    <td>500</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>Urine Amylase</td>
                    <td>300</td>
                    <td>800</td>
                </tr>



                <tr>
                    <td><strong style="float:right;">Total:</strong></td>
                    <td><strong>800</strong></td>
                    <td><strong>1800</strong></td>
                </tr>
                <tr>

                    <td colspan="2">Report Delivery Date: <input style="width:10rem;" type="date"> <br> Time:<input style="width:5rem;" value="12"><select style="width:5rem;">
                            <option>PM</option>
                            <option>AM</option>
                        </select></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><strong style="float:right;">Sub Total:</strong></td>
                    <td><strong>1800</strong></td>
                </tr>
                <tr>

                    <td colspan="2"><strong style="float:right;">Discount Amount:</strong></td>
                    <td><strong><input style="width:10rem;" value=0></strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong style="float:right;">Payment:</strong></td>
                    <td><strong><input style="width:10rem;" value=0></strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong style="float:right;">Due Amount:</strong></td>
                    <td><strong><input style="width:10rem;" value=0></strong></td>
                </tr>
            </table>
            <button class="btn-margine btn btn-warning" style="margin-bottom:2px ;">Calculate Data</button>
            <button class="btn-margine btn btn-primary">Save Test Data</button>
            <br>

        </div>
        <button class="btn btn-warning">Calculate</button>




    </div>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>

</body>

</html>