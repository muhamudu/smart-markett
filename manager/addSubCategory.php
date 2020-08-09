            <?php
                if (isset($_POST['addSubCategory'])) {
                    $categoryID = $_POST['category_ID'];
                    $subCategoryName = $_POST['subCategoryName'];
                    $status = $_POST['status'];

                    $insQuery = mysqli_query($DB_CONNECT,"INSERT INTO `sub_category_tb`(`category_ID`, `sub_category_name`, `status`) VALUES ('$categoryID','$subCategoryName','$status')");

                    if ($insQuery) {
                        ?>
                            <script type="text/javascript">
                                window.alert ('Successfully Added');
                            </script>
                        <?php
                        echo "<meta http-equiv='refresh' content='0'>";
                    }
                    else {
                        echo "Failed to add new user".mysqli_error();
                    }
                }
            ?>
            <form action="" method="post">
                <div class="row">

                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label>Category Name</label>
                            <select name="category_ID" class="form-control">
                                <option disabled selected>Select Category</option>
                                <?php 
                                    $selQuery = mysqli_query($DB_CONNECT,"SELECT * FROM category_tb");
                                    while ($fet = mysqli_fetch_array($selQuery)) {
                                        echo '<option value="'.$fet["category_ID"].'">'.$fet["category_name"].'</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sub-Category Name</label>
                            <input type="text" class="form-control" placeholder="Sub-Category Name" name="subCategoryName">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option>Active</option>
                                <option>Disactive</option>
                            </select>
                        </div>
                        
                    </div>
                    
                </div>

                <button type="submit" name="addSubCategory" class="btn btn-primary">Add</button>
            </form>