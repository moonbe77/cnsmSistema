 <HTML>
      <BODY>

          <div>REPORTICO</div> 

          <!-- Start of Reportico Report -->
          <?php
            require_once('/reportico-4.6/run.php'); 
            $q = new reportico();
            $q->initial_project = "CNSM";
            $q->initial_project_password = "cdlr3314";
            $q->initial_report = "Lista de actividad pendiente.xml";
            //$q->access_mode = "REPORTOUTPUT";
            $q->initial_execute_mode = "EXECUTE";
            //$q->initial_output_format = "HTML";
            $q->target_format = "HTML";
            //$q->access_mode = "REPORTOUTPUT";
            $q->embedded_report = true;
            $q->execute();
          ?> 
          < !-- End of Reportico Report -->

          ...... More web content ......

      </BODY>
    </HTML>