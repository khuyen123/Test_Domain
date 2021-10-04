<!DOCTYPE>
<html>
    <head>
      <meta charset="utf-8">
      <title>Product</title>
    </head>
    <body>
        <form action="Prod_post.php" method="post">
            <table align="center" width="350" style="border:solid; color: blue; border-width: 0.5px; padding: 10 5 10 5">
                <tr>
                    <td colspan="2"><strong><h3 style="color:#3366ff;text-align: center"> Product Discount Calculator </h3></strong></td>
                </tr>
                <tr>
                    <td style="color: black">Product Description:</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td style="color: black">List prices: </td>
                    <td><input type="text" name="price"/></td>
                </tr>
                <tr>
                    <td style="color: black">Discount Percent: </td>
                    <td style="color: black"><input type="text" name="percent"/>%</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="Submit" value="Calculate Discount"/></td>
                </tr>
                <?php 
                if(isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['percent']))
                {   $name=$_POST['name'];
                    if(empty($name))
                    {
                        echo "<script language='javascript'>alert('Notthing in Product Description');";
			echo "location.href='Prod_post.php';</script>";
                    }
                    $price=$_POST['price'];
                     if(empty($price)||!is_numeric($price))
                    {
                        echo "<script language='javascript'>alert('Fail to Format of Price');";
			echo "location.href='Prod_post.php';</script>";
                    }
                    $percent=$_POST['percent'];
                    if(empty($percent)||!is_numeric($percent))
                    {
                        echo "<script language='javascript'>alert('Fail to Format of Percent');";
			echo "location.href='Prod_post.php';</script>";
                    }
                    $amout=($price*$percent)/100;
                    $cal=$price-$amout;
                } 
                ?>
            </table>
        </form>
        <form>
            <table align="center" width="350" style="border:solid; color: blue; border-width: 0.5px; margin-top: 100px; padding: 10 5 10 5">
                <tr>
                    <td colspan="2"><strong><h3 style="color:#3366ff;text-align: center"> Product Discount Calculator </h3></strong></td>
                </tr>
                <tr>
                    <td style="color: black">Product Description:</td>
                    <td><label style="color: black"><?php  if(isset($name))echo $name ?></label></td>
                </tr>
                <tr>
                    <td style="color: black">List prices: </td>
                    <td><label style="color: black"><?php if(isset($price)) echo "$".number_format($price,2,'.',','); ?></label></td>
                </tr>
                <tr>
                    <td style="color: black">Standard Discount: </td>
                    <td><label style="color: black"><?php if(isset($percent)) echo "$".number_format($percent,1).'%'?></label></td>
                </tr>
                <tr>
                    <td style="color: black">Discount Amount:</td>
                    <td><label style="color: black"><?php if(isset($amout)) echo "$".number_format($amout,2,'.',',');?></label></td>
                </tr>
                <tr>
                    <td style="color: black">Discount Price:</td>
                    <td><label style="color: black"><?php if(isset($cal)) echo "$".number_format($cal,2,'.',',') ?></label></td>
                </tr>
            </table>
        </form>
    </body>
</html>