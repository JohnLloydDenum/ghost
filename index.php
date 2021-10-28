 <?php
require_once ("../crud system/components/component.php");
require_once ("../crud system/components/operation.php");

Createdb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SYSTEM</title>

    <script src="https://kit.fontawesome.com/a9428e25d8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <main>
        <div class="container text-center">
            <h1 class="py-5 bg-dark text-light rounded"> <i class="fas fa-swatchbook"></i> Sales Inventory </h1>
        <div class="d-flex justify-content-center">
            <form action=""method="post" class="w-60">
            <div class="py-2"> 
            <?php inputElement("<i class='fas fa-id-card'></i>","Product ID", "id",setID()); ?>
            </div>
        

            <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Product Name", "product_name",""); ?>  
            </div>
            <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Quantity", "quantity",""); ?>  
            </div>
            <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","First Name", "first_name",""); ?>  
            </div>
             <div class="pt-2">
             <?php inputElement("<i class='fas fa-book'></i>","Last Name", "last_name",""); ?>
             </div>
            <div class="row">
            <div class="col">
                <?php inputElement("<i class='fas fa-money-check-alt'></i>","Price", "price",""); ?>        
             </div>

        </div>
        <div class="d-flex justify-content-center">
            
            <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'> </i>", "create", "dat-toggle='tooltip'data-placement='bottom' title='Create'"); ?>
            <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'> </i>", "read", "dat-toggle='tooltip'data-placement='bottom' title='Read'"); ?>
            <?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'> </i>", "update", "dat-toggle='tooltip'data-placement='bottom' title='Update'"); ?>
            <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'> </i>", "delete", "dat-toggle='tooltip'data-placement='bottom' title='Delete'"); ?>
            <?php deleteBtn(); ?>
        </div>

        </form>
        </div>
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
            <thead class="table-dark"> 
                <tr>
                    <th> Product ID </th>
                    <th> Product Name</th>
                    <th> Quantity </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Price </th>
                    <th> Edit </th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                if(isset($_POST['read'])){
                    $result = getData();

                    if($result){
                        while ($row = mysqli_fetch_assoc($result)){?>
                        
                            <tr>
                                <td data-id="<?php echo $row['id']; ?>"> <?php echo $row['id']; ?> </td>
                                <td data-id="<?php echo $row['id']; ?>"> <?php echo $row['product_name']; ?> </td>
                                <td data-id="<?php echo $row['id']; ?>"> <?php echo $row['quantity']; ?> </td>
                                <td data-id="<?php echo $row['id']; ?>"> <?php echo $row['first_name']; ?> </td>
                                <td data-id="<?php echo $row['id']; ?>"> <?php echo $row['last_name']; ?> </td>
                                <td data-id="<?php echo $row['id']; ?>"> <?php echo '₱'. $row['price']; ?> </td>
                                <td> <i class="fas fa-edit btnedit"data-id="<?php echo $row['id']; ?>"></i></td>
                                
                            </tr>
                        <?php            
                        
                            
                        
                        }
                        
                    }
                }
                ?>
            </tbody>
            </table>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../crud system/components/main.js"> </script>
        
    </link>
</link>
</body>
</html>
