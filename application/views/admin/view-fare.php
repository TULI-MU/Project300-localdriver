
            <div id="layoutSidenav_content">
                <main>

                     <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        
                                        <thead>
                                            <tr>
                                                <th>f_id</th>

                                                <th>place_id_from</th>

                                                <th>place_id_to</th>

                                                <th>fare</th>
                                                
                                                <th>vehicle</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                            <?php foreach($fare as $row){  ?>
                                            <tr>
                                                <td><?=$row['f_id']?></td>
                                                <td><?=$row['place_id_from']?></td>
                                                <td><?=$row['place_id_to']?></td>
                                                <td><?=$row['fare']?></td>
                                                <td><?=$row['vehicle']?></td>

                                               <td><a href="<?=base_url()?>Admin/edit_fare/<?=$row['f_id']?>"><button class="btn btn-success">Edit</button><a></td>

                                                     <td><a href="<?=base_url()?>Admin/delete_vehicle/<?=$row['f_id']?>"><button class="btn btn-danger">Delete</button><a></td>
                                                
                                                
                                            </tr>

                                        <?php } ?>
                                           
                                  
                                        </tbody>
                                    </table>
                                </div>

                            </div>




                
                </main>
              