<h5 class="border rounded p-3 text-center text-white fw-bold"  style="background-color:#3c4b64;">Student List</h5>         
                        <table class="table">
                            <thead class="bg-dark">
                                <tr>
                                <!-- <th scope="col">#</th> -->
                                <th class="text-white fw-bolder" scope="col">Sno</th>
                                <th class="text-white fw-bolder" scope="col">Full Name</th>
                                <th class="text-white fw-bolder" scope="col">Email</th>
                                <th class="text-white fw-bolder" scope="col">Phone Number</th>
                                <th class="text-white fw-bolder" scope="col">Purchased Courses</th>
                                </tr>
                            </thead>
                            <?php
                                // $sql="SELECT * FROM `users`";
                                $sql="SELECT * FROM `users` LEFT JOIN `purchase_courses` ON users.sno=purchase_courses.user_id GROUP BY phone_number;
                                ";
                              
                                $result= mysqli_query($conn,$sql);
                                $sno=0;
                                while($row= mysqli_fetch_assoc($result)){
                                    
                                    $sno=$sno+1;
                                    $user_id= $row['sno'];
                                    $full_name= $row['full_name'];
                                    $user_email= $row['user_email'];
                                    $phone_number= $row['phone_number'];
                                    $course_name= $row['course_name'];
                                ?>
                            <tbody>
                                <tr>
                                
                                <td><?php echo $sno;?></td>
                                <td><?php echo $full_name;?></td>
                                <td><?php echo $user_email;?></td>
                                <td><?php echo $phone_number;?></td>
                                <td>
                                <?php
                                   $result_sql="SELECT `course_name` FROM `purchase_courses` WHERE `user_id`='$user_id'";
                                   $result_course= mysqli_query($conn,$result_sql);
                                   while($row_course= mysqli_fetch_assoc($result_course)){
                                   echo$course_name= $row_course['course_name'];
                                   echo ",";
                                   }
                                ?>
                                 </td>
                                </tr>
                            </tbody>
                            <?php  }?>
                            </table>