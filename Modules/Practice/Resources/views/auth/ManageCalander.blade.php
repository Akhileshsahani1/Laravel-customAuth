
@include('practice::auth.header') 
@include('practice::auth.sidebar') 
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"> -->
<?php
 
       $singleArray = array();

       foreach ($data as $key => $value){
           foreach($value as $val)
           {
             $singleArray[] = $val;
           }
         
       }
 
?>

<link href='https://docs/dist/demo-to-codepen.css' rel='stylesheet' />




  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.1/index.global.min.js'></script>


<script src='https://docs/dist/demo-to-codepen.js'></script>


  <script>
  
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var pausecontent = <?php echo json_encode($singleArray); ?>;
     
     
    var calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      initialView: 'multiMonthYear',
      editable: true,
      // events: 'https://fullcalendar.io/api/demo-feeds/events.json'
      events:pausecontent,
        
    
        
    
    });
  
    calendar.render();
  });


</script>
<style>
 #calendar {
   width: 100%;   
  }
 
</style>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
       
          <!-- /.col -->
          <div class="col-md-12">
          <div id="calendar"></div>
         
          </div>
           
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@include('practice::auth.footer') 

