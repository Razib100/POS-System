<body>

<div id="container">

   <div id="body">

       <?php

       foreach($results as $data) {

           echo $data->journal_no . " - " . $data->journal_date . " - " . $data->doc_no . "<br>";

       }

       ?>

       <p><?php echo $links; ?></p>

   </div>



</div>

</body>