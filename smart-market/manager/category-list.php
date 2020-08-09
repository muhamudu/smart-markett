            <table class="table table-hover table-bordered" id="datatable">
                <thead>
                    <tr>
                        <th style="width:5%;">No</th>
                        <th>Category Name</th>
                        <th style="width:15%">Status</th>
                        <th style="width:15%">Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    $query = mysqli_query($DB_CONNECT,"SELECT * FROM category_tb" );
                    $count = 0;

                    while($fetchQuery = mysqli_fetch_array($query))
                    {
                        // $company_ID = $fetchQuery['company_ID'];

                        // $query2 = mysql_query("SELECT * FROM company_tb WHERE company_ID='$company_ID' " );

                        // $fetchQuery2 = mysql_fetch_array($query2);

                        $count++;
                        echo "
                        <tr>
                        <td>$count</td>
                        <td>".$fetchQuery['category_name']."</td>
                        <td>".$fetchQuery['status']."</td>

                        <td class='table-action'>
                            <a href='edit-category.php?id=".$fetchQuery['category_ID']."'><i class='align-middle' data-feather='edit-2'></i></a>

                            <a href='delete-category.php?id=".$fetchQuery['category_ID']."'><i class='align-middle' data-feather='trash'></i></a>
                        </td>
                        </tr> ";
                    }
                ?>
                    
                </tbody>
            </table>