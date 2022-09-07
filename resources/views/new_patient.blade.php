<html>

<head>
    <title>New Patient</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>

    @include('admin.sidebar')

    <div class="main">

        <div>
            <h4>New Patient Entry / Add Test:</h4>
        </div>
        <br>
        <div class="heading">
            <h4>Patient Details:</h4>
        </div>
        <form action="{{ url('patient_insert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="first-row">Patient Name<span style="color:red;">*</span>:</label>
                <input name="p_name" required>

                <label class="second-row">Patient Age:</label>
                <input name="p_age" required>

                <br>

                <label class="first-row">Phone/Mobile<span style="color:red;">*</span>:</label>
                <input name="p_mobile" required>
                <label class="second-row">Gender:</label>
                <select name="p_gender" required>
                    <option>--Select--</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Common</option>
                </select>

                <br>

                <label class="first-row">Blood Group<span style="color:red;">*</span>:</label>
                <select name="p_blood" required>
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
                <br>
                <label class="first-row">Address:</label>
                <input name="p_address" class="ex-large">
                <br>
                <label class="first-row">Doctor Name:</label>
                <input name="p_d_name" class="ex-large">
                <br>
                <label class="first-row">Refered By<span style="color:red;">*</span>:</label>
                <input name="p_r_d_name" class="ex-large" required>
                <br>
                <button type="submit" class="btn-margine btn btn-primary">Save Information</button>
            </div>
        </form>



        <br>


        <div class="heading">
            <h4>Test Details:</h4>
        </div>
        <div>

            <label>Enter Patient ID / Mobile Number<span style="color:red;">*</span>:</label>
            <input> <button class="btn btn-primary">Search</button>

            <br>
            <table>
                <tr>
                    <th>Patient Name</th>
                    <th>Mobile Number</th>
                    <th>ID</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
            </table>
            <br>
            <br>
            <?php

            use App\Models\test_info;

            $test_info = test_info::all();
            $number = 1;
            // echo $count;
            // die();
            ?>

            <label class="first-row">Add Test<span style="color:red;">*</span>:</label>
            <select class="ex-large" style="width:48.8rem;" required>
                <option>--Select--</option>
                @foreach ($test_info as $info)
                <option>{{ $info->test_name}}</option>
                @endforeach

            </select>
            <!-- <label class="first-row">Add Test<span style="color:red;">*</span>:</label>
            <form>
            <select class="ex-large" style="width:48.8rem;" required>
                    <option>--Select--</option>
                    @foreach ($test_info as $info)
                    <option>{{ $info->test_name}}</option>
                    @endforeach

                </select>
                <button class="btn btn-primary">De</button>
            </form> -->
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