
            <div id="layoutSidenav_content">
                <main>


                     <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                 
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                            <?php foreach($vehicle as $row){  ?>
                                            <tr>
                                                <td><?=$row['vehicle_name']?></td>
                                                <td><img style="width:100px;height:100px;" src="<?=base_url()?>image/<?=$row['picture']?>"></td>
                                        
                                                <td><a href="<?=base_url()?>Admin/edit_vehicle/<?=$row['v_id']?>"><button class="btn btn-success">Edit</button><a></td>

                                                     <td><a href="<?=base_url()?>Admin/delete_vehicle/<?=$row['v_id']?>"><button class="btn btn-danger">Delete</button><a></td>
                                                
                                                
                                            </tr>

                                        <?php } ?>
                                           
                                  
                                        </tbody>
                                    </table>
                                </div>

                            </div>




                
                </main>
              