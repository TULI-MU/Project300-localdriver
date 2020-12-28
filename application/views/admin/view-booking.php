
            <div id="layoutSidenav_content">
                <main>


                	 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <!--  <th>Name</th> -->
                                                <th>Mobile</th>
                                                <th>Vehicle</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Place From</th>
                                                <th>Place To</th>
                                                <th>No Passengers</th>
                                             
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                            <?php foreach($booking as $row){  ?>
                                            <tr>
                                               <!--  <td><?=$row['name']?></td> -->
                                                <td><?=$row['mobile']?></td>
                                                <td><?=$row['vehicle_name']?></td>
                                                <td><?=$row['pickup_date']?></td>
                                                <td><?=$row['pickup_time']?></td>
                                                <td><?=$row['place_name']?></td>
                                                <td><?=$row['place_from']?></td>
                                                <td><?=$row['no_of_passengers']?></td>

                                            </tr>
                                              

                                        <?php } ?>
                                           
                                  
                                        </tbody>
                                    </table>
                                </div>

                            </div>




                
                </main>
              