<?php
                    session_start();
                    include 'php/config.php';
                    if ($conn->connect_error) {
                        die ("Connection failed: " . $conn->connect_error);
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = isset ($_POST['email']) ? $_POST['email'] : '';

                        if (!empty ($email)) {
                            $sql = "SELECT * FROM Staff WHERE email='$email'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                echo "<h3>Users with email: $email</h3>";
                                echo "<form method='post'>";
                                echo "<table id='client-table'>";
                                echo "<tr>";
                                echo "<th>User ID</th>";
                                echo "<th>First Name</th>";
                                echo "<th>Last Name</th>";
                                echo "<th>Email</th>";
                                echo "<th>Is Suspended</th>";
                                echo "<th>Toggle Suspension</th>";
                                echo "</tr>";
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $user_id = $row['user_id'];
                                    $first_name = $row['first_name'];
                                    $surname = $row['surname'];
                                    $email = $row['email'];
                                    $is_suspended = $row['is_suspended'];
                                    $suspension_status = $is_suspended ? "Yes" : "No";
                                    echo "<tr>";
                                    echo "<td>$staffid</td>";
                                    echo "<td>$first_name</td>";
                                    echo "<td>$surname</td>";
                                    echo "<td>$email</td>";
                                    echo "<td>$suspension_status</td>";
                                    echo "<td><input type='checkbox' name='toggle[]' value='$staffid'></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                echo "<button type='submit'>Toggle Suspension</button>";
                                echo "</form>";
                            } else {
                                echo "No users found with email: $email";
                            }
                        } else {
                            echo "Email is required.";
                        }
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST['toggle'])) {
                        foreach ($_POST['toggle'] as $staffid) {
                            $sql = "UPDATE users SET is_suspended = NOT is_suspended WHERE user_id = $user_id";
                            mysqli_query($conn, $sql);
                        }
                        // Refresh the page after updating suspension status
                        echo "<meta http-equiv='refresh' content='0'>";
                    }
                    ?>