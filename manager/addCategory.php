            <?php
                if (isset($_POST['addCategory'])) {
                    $categoryName = $_POST['categoryName'];
                    $status = $_POST['status'];

                    $insQuery = mysqli_query($DB_CONNECT,"INSERT INTO `category_tb`(`category_name`, `status`) VALUES ('$categoryName','$status')");

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
                            <input type="text" class="form-control" placeholder="Category Name" name="categoryName">
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

                <button type="submit" name="addCategory" class="btn btn-primary">Add</button>
            </form>