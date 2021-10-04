<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                width:30%;
                
            }
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>School</th>
            </tr>
                <?php      
                    $json='[{"name":"Starlabs", "age":"19", "school":"Digital School"},
                            {"name":"Starlabs 1", "age":"21", "school":"Digital School Pristine"},
                            {"name":"Starlabs 3", "age":"30", "school":"Digital School Kosovo"}]';

                    $json_data=json_decode($json,TRUE);

                    foreach($json_data as $key => $val){
                ?>
                        <tr>    
                            <td>
                            <?php
                                echo $val['name'];     
                                ?>
                            </td>
                            <td>
                            <?php
                                echo $val['age'];
                                ?>
                            </td>
                            <td>
                            <?php
                                echo $val['school'];
                                ?>
                            </td>
                        </tr>
                        <?php 
                            };
                        ?>
        </table>
    </body>
</html>