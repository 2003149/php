<?php include('header.php');?>
    <?php for ($i = 1; $i <15; $i++){
        echo "<a href='phpopdrachten/phpopdr$i.php'>opdracht $i</a><br>";
        }
    ?>
<script>
        $(function(){
            $('.row1').adipoli({
                'startEffect' : 'normal',
                'hoverEffect' : 'popout'
            });
        });
       $('#barca.png').adipoli();

 </script>


<div id="opdrachtenphp">
<section class="blur">
    <h2 style="margin:10px 10px 10px 25px;">PHP5 Opdrachten</h2>
    <a href="/phpopdrachten/phpopdr1.php"><img height="100" src="imgphp/helloworld.jpg" style="margin:25px;"></a>
    <a href="/phpopdrachten/phpopdr2.php"><img height="100" src="imgphp/buskosten.jpg" style="margin:25px"></a>
    <a href="/phpopdrachten/phpopdr3.php"><img height="100" src="imgphp/Kerstboom.jpg" style="margin:25px"></a>
    <a href="/phpopdrachten/phpopdr4.php"><img height="100" src="imgphp/hoppeleee.jpg"         style="margin:25px"></a>
    <a href="/phpopdrachten/phpopdr5.php"><img height="100" src="imgphp/swim.jpg"            style="margin:25px"></a>
    <a href="/phpopdrachten/phpopdr6.php"><img height="100" src="imgphp/afspraak kapper.jpg" style="margin:25px"></a>
    <a href="/phpopdrachten/phpopdr7.php"><img height="100" src="imgphp/.jpg" style="margin:25px"></a>
    <a href="/phpopdrachten/phpopdr8.php"><img height="100" src="imgphp/.jpg" style="margin:25px"></a>
    
</section>
</div>
<section class="blur">
    <h2 style="margin:10px 10px 10px 25px;">PHP5 specials</h2>
    <a href="autoshhop/index.php"><img height="200" src="imgjsp/autoshop.jpg" style="margin:25px"></a>
</section>
</div>
 <?php include('footer.php'); ?>
 