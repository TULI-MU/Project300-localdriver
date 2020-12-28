
            <div id="layoutSidenav_content">
                <main>


                     <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Place_id</th>
                                                 
                                                <th>Place name</th>
                                               
                                                 
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                            <?php foreach($place as $row){  ?>
                                            <tr>
                                                <td><?=$row['p_id']?></td>
                                                <td><?=$row['place_name']?></td>
                                                
                                                
                                            </tr>

                                        <?php } ?>
                                           
                                  
                                        </tbody>
                                    </table>
                                </div>

                            </div>




                
                </main>
              